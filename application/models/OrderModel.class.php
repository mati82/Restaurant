<?php

class OrderModel
{
  public function findOrder($idOrder)
  {
    $database = new Database();
    $sql = 'SELECT * FROM order WHERE Id = ?';
    return $database->queryOne($sql,[$idOrder]);
  }

  public function findOrderLine($idOrder)
  {
    $database = new Database();
    $sql = 'SELECT QuantityOrder, Meal_Id, Name, PriceEach, Order_Id FROM Orderline WHERE Order_Id = ?
    INNER JOIN Meal ON Meal.Id = Orderline.Meal_Id';
    return $database->query($sql,[$idOrder]);
  }

  public function validate($user, $basketItems)
  {
    // requete sql insertion de la commande dans la base de données
    // intialialisation du montant total HT
    // insertion des lignes de la commande
    // Ajout du montant HT de la ligne du panier au montant tota HT
    // Insertion d'une ligne de la commande dans la base de données
    // Mise à jour de la commande dans la base de données, avaecd le montants
    // renvoyer l'id de l'order
  }
}
