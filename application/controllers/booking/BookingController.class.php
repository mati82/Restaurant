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
      if(/*user is connect*/true)
      {
        $formFields["bookingCurrentUser"];
        $formFields["bookingDay"];
        $formFields["bookingMonth"];
        $formFields["bookingYear"];
        $formFields["bookingHour"];
        $formFields["bookingMinute"];
        $formFields["bookingNumber"];

        $saveDate = new BookingModel();
        $saveDate->requestSaveDate($formFields);

        $redirect = new Http();
        $redirect->redirectTo($requestUrl);
      }
  }
}
