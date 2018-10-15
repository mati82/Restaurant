<?php

class MealModel
{

  public function getAllMeal()
  {
    $database = new Database();
    $sql = 'SELECT * FROM meal';
    return $database->query($sql);
  }

  public function getOneMeal($idMeal)
  {
    $database = new Database();
    $sql = "SELECT Id, Name, Photo, Description, SalePrice FROM meal WHERE Id = " . $idMeal;
    return $database->queryOne($sql,[$idMeal]);
  }
}
