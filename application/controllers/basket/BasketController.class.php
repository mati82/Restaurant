<?php

//verif de la connection on peut pas voir le panier si on est pas connecté, si le paner est vide créer quand même le panier mais vide
class BasketController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {
    /*
     * Méthode appelée en cas de requête HTTP GET
     *
     * L'argument $http est un objet permettant de faire des redirections etc.
     * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.

     */
     $userSession = new UserSession();
    if ($userSession->isAuthenticated() == false) {
        $http->redirectTo('/user/Login');
  }
