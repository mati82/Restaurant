<?php

class MealModel
{

  public function getAllMeal()
  {
    $database = new Database();
    $sql = 'SELECT Id, Name, Photo, Description, SalePrice FROM meal';
    return $database->queryOne($sql);
  }

  public function getOneMeal($idMeal)
  {
    $database = new Database();
    $sql = "SELECT Id, Name, Photo, Description, SalePrice FROM meal WHERE Id = " . $idMeal;
    return $database->query($sql,[$idMeal]);
  }

  public function getLastMeal()
  {
    $database = new Database();
    $sql = 'SELECT MAX(Id) AS last_Id, Name, Photo, Description, SalePrice FROM meal';
    return $database->executeSql($sql);
  }
}
