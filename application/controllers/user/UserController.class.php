<?php
//gestion de la user session + inscription + messages d'erreurs

class UserController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {


  }

  public function httpPostMethod(Http $http, array $formFields)
  {
    $userModel = new UserModel();
    $userModel->signUp(
      $formFields["userLastName"],
      $formFields["userFirstName"],
      $formFields["userMail"],
      $formFields["userPassword"],
      $formFields["userYear"] . "-" .
      $formFields["userMonth"] . "-" .
      $formFields["userDay"],
      $formFields["userAddress"],
      $formFields["userCity"],
      $formFields["userPostcode"],
      $formFields["userPhone"]
    );

    $http->redirectTo($requestUrl);



  }
}
