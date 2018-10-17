<?php

class OrderModel
{
  public function findOrder($idOrder)
  {
    $database = new Database();
    $sql =
    'SELECT *
    FROM order
    WHERE Id = ?';
    return $database->queryOne($sql,[$idOrder]);
  }

  public function findOrderLine($idOrder)
  {
    $database = new Database();
    $sql =
    'SELECT QuantityOrder, Meal_Id, Name, PriceEach, Order_Id
    FROM orderline
    INNER JOIN meal
    ON Meal.Id = Orderline.Meal_Id
    WHERE Order_Id = ?';
    return $database->query($sql,[$idOrder]);
  }

  public function validate($user, $basketItems)
  {
    // requete sql insertion de la commande dans la base de données
    $database = new Database();
    $sqlOrder = $database->executeSql(
      'INSERT INTO order (User_Id, CreationTimeStamp, TaxRate)
      VALUES (?, NOW(), 20)', [$user]);

    $sqlOrderLine =
    'INSERT INTO orderline (Order_Id, Meal_Id, QuantityOrdered, PriceEach)
    VALUES (?, ?, ?, ?)';
    // intialialisation du montant total HT
    $TotalAmount = 0;
    // insertion des lignes de la commande
    foreach($basketItems as $basketItem){
      $totalAmount += $basketItem['quantity'] * $basketItem['salePrice'];
      // Ajout du montant HT de la ligne du panier au montant tota HT
      // Insertion d'une ligne de la commande dans la base de données
      $database->executeSql($sqlOrderLine, [$sqlOrder, $basketItem['Meal_Id'], $basketItem['QuantityOrdered'], $basketItem['SalePrice']]);
    }

    // Mise à jour de la commande dans la base de données, avaecd le montants
    $sqlUpdate =
    'UPDATE order
    SET completeTimeStamp = NOW(), TotalAmount = ?, TaxAmount = ?*TaxRate/100
    WHERE Id = ?';
    // renvoyer l'id de l'order1
    $database->executeSql($sqlUpdate, [$TotalAmount, $TotalAmount, $sqlOrder]);

    return $sqlOrder;
  }
}
