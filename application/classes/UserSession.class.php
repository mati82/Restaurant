<?php

class UserSession
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE)
        {
        // démarrage du module
        session_start();
        }
    }

    public function create($email,$firstName,$lastName,$userId)
    {
        $_SESSION["user"]= array
        (
            "email" => $email,
            "firstName" => $firstName,
            "lastName" => $lastName,
            "userId" => $userId
        );
    }

    public function destroy()
    {
        session_unset($_SESSION["user"]);
        session_destroy();
    }

    public function isAuthenticated()
    {
    //verif si la clés du user existe on retourn ou vrai ou faux
        if (array_key_exist("user", $_SESSION) == true)
        {
            if(empty($_SESSION["user"]) == false)
            {
                return true;
            }
        }
        return false;
    }

    public function getEmail()
    {

        if (IsAuthenticated() == true)
        {
            return $_SESSION["user"]["email"];
        }
        return null;
    }

    public function getLastName()
    {
        if (IsAuthenticated() == true)
        {
            return $_SESSION["user"]["lastName"];
        }
        return null;
    }

    public function getFirstName()
    {
        if (IsAuthenticated() == true)
        {
            return $_SESSION["user"]["firstName"];
        }
        return null;
    }

    public function getFullName()
    {
        if (IsAuthenticated() == true)
        {
            return $_SESSION["user"]["firstName"] . " " . $_SESSION["user"]["lastName"];
        }
        return null;
    }

    public function getUserId()
    {
        if (IsAuthenticated() == true)
        {
            return $_SESSION["user"]["userId"];
        }
        return null;
    }

}
