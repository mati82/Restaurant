<?php

//verif de la connection on peut pas voir le panier si on est pas connecté, si le paner est vide créer quand même le panier mais vide
class BasketController
{
  public function httpGetMethod(Http $http, array $formFields)
  {
    //Récupération donner formulaire du basket avec le bouton "valider la commande"
    $userSession = new UserSession();
    if ($userSession->isAuthenticated() == false)
    {
      $http->redirectTo('/user/Login');
    }
    else
    {
      if(array_key_exists('basketItem', $formFields) == false)
      {
        $formFields['basketItem'] = [];
      }
    }

    return [
      "basketItems" => $formFields["basketItem"],
      "_raw_template" = true
    ];
  }
}
