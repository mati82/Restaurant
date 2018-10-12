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
      if ($userSession->isAuthenticated() == true)
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
      else
      {
        $http->redirectTo('/user/Login');
      }
  }
}
