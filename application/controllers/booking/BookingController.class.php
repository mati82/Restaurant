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
        "bookingDate" => $formFields["bookingYear"] . "-" . $formFields["bookingMonth"] . "-" . $formFields["bookingDay"],
        "bookingTime" => $formFields["bookingHour"] . ":" . $formFields["bookingMinute"] . ":00",
        "bookingSeat" => $formFields["bookingSeat"],
        "bookingCurrentUser" => $formFields["bookingCurrentUser"],
      );


      $saveDate = new BookingModel();
      $saveDate->requestSaveDate(array(
          $groupFormFields["bookingDate"],
          $groupFormFields["bookingTime"],
          $groupFormFields["bookingSeat"],
          $groupFormFields["bookingCurrentUser"]
        )
      );


      $http->redirectTo("/Booking");
    }
    else
    {
      $http->redirectTo("/user/Login");
    }
  }
}
