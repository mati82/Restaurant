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
      // Attention il ne faut pas charger le template voir ou chercher _raw_template dans la librairie + les Items du basket
    ];
  }
}
