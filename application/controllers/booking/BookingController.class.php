<?php

//verif de la connection on ne peut pas reserver si on est pas connecté + creation de la résa et redirctTo

class BookingController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {
    /*
     * Méthode appelée en cas de requête HTTP GET
     *
     * L'argument $http est un objet permettant de faire des redirections etc.
     * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
     */
  }

  public function httpPostMethod(Http $http, array $formFields)
  {
      $dateToSave = [
        $_POST["myDate"],
        $_POST["myTime"],
        $_POST["numberBook"],
        $_POST["currentUser"]
      ];

      $saveDate = new BookingModel();
      $saveDate->requestSaveDate($dateToSave);

      $redirect = new Http();
      // $redirect->redirectTo($requestUrl);
  }
}
