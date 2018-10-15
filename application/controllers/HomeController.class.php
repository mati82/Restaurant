<?php

class HomeController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
       $model = new MealModel();
       $mealObjects = $model->getAllMeal();
       return ["mealObjects" => $mealObjects];
    }
}
