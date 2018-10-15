<?php

class OrderController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {
    $userSession = new UserSession();
    if ($userSession->isAuthenticated() == false)
    {
      $http->redirectTo('/user/Login');
    }
    else
    {
      $model = new MealModel();
      $mealObjects = $model->getAllMeal();
      return ["mealObjects" => $mealObjects];
    }
  }
}
