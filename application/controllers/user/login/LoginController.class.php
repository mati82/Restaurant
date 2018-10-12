<?php

//recuperation des données de l'utilsateur en fonction de ses identifiants + Construction de la session utilisateur

class LoginController
{
  public function httpGetMethod(Http $http, array $queryFields)
  {
    return ['_form' => new LoginForm()];
  }

  public function httpPostMethod(Http $http, array $formFields)
  {
      $userModel = new UserModel();
      $user = $userModel->findWithEmailPassword(
        $formFields["loginEmail"],
        $formFields["loginPwd"]
      );
      
    $newSession = new UserSession();
    $newSession->create($user["Email"],$user["FirstName"],$user["LastName",$user["Id"]);
    
    
    $http->redirectTo('/');

  }
}
