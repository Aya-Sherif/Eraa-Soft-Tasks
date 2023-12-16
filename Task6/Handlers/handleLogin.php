<?php
session_start();
require_once "../Core/request.php";
require_once "../Core/Validation.php";
require_once "../Core/sessions.php";
require_once "../Core/functions.php";


if (CheckPostMethod()) {
    $errors = [];
    foreach ($_POST as $key => $value) {
        $$key = reciveInput($value);
    }



    if (requiredInput($email)) {
        $errors[] = 'Please write your email';
    } elseif (EmailValidation($email)) {
        $errors[] = 'Enter a valide Email';
    }


    if (requiredInput($password)) {
        $errors[] = 'Please write  password';
    }



    if (empty($error)) {
        $user = [
            'email' => $email,
            'password' => sha1($password),
        ];
        if (handleLogin(OpenFile("../data/users.csv"), $user)) {
            Redirect("../index.php ");
        }
        else {
            $errors[] = "Invalid Email or Password";
            setSession('errors', $errors);
            Redirect('../login.php');
    
        }
    } else {
        setSession('errors', $errors);
        Redirect('../login.php');
    }


}