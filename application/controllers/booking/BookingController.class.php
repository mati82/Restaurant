<?php

//verif de la connection on ne peut pas reserver si on est pas connecté + creation de la résa et redirctTo

class BookingController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {
    $userSession = new UserSession();
    if ($userSession->isAuthenticated() == false)
    {
        $http->redirectTo('/user/Login');
    }
  }

  public function httpPostMethod(Http $http, array $formFields)
  {
    $userSession = new UserSession();
    if ($userSession->isAuthenticated() == true)
    {
      $groupFormFields = array(
        $formFields["bookingYear"] . "-" .
        $formFields["bookingMonth"] . "-" .
        $formFields["bookingDay"],
        $formFields["bookingHour"] . ":" .
        $formFields["bookingMinute"],
        $formFields["bookingNumber"],
        $formFields["bookingCurrentUser"],
      ); // j'en suis là à gérer la fonction pour sauvegarder

      $saveDate = new BookingModel();
      $saveDate->requestSaveDate($groupFormFields);


      $http->redirectTo("/Booking");
    }
    else
    {
      $http->redirectTo("/user/Login");
    }
  }
}
