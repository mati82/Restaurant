<?php

class MealModel
{
  private $sql;
  private $database;

  public function __construct()
  {
    $this->sql = $sql;
    $this->database = new Database();
  }

  public function getAllMeal()
  {
    $this->sql = 'SELECT Id, Name, Photo, Description, SalePrice FROM meal';
    return $this->sql;
  }

  public function getOneMeal($idMeal)
  {
    $this->sql = 'SELECT Id, Name, Photo, Description, SalePrice FROM meal WHERE Id = ' . $idMeal;
    return $this->sql;
  }

}
