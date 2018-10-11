<?php
//gestion de la user session + inscription + messages d'erreurs

class UserController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {
    return ['_form' => new UserForm()];
  }

  public function httpPostMethod(Http $http, array $formFields)
  {
    try {
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

      $http->redirectTo('/');

    } catch (\Exception $e) {
      echo "Ahahah";
    }




  }
}
