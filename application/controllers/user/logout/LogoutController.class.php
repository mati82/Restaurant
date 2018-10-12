<?php

class LogoutController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {
    $userSession = new UserSession();
    if ($userSession->isAuthenticated() == false)
    {
        $http->redirectTo('/');
    }
    else
    {
      $userSession = new UserSession();
      $userSession->destroy();
      $http->redirectTo('/');
    }
  }

  public function httpPostMethod(Http $http, array $formFields)
  {

  }
}
