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


    if (requiredInput($name)) {
        $errors[] = 'Please write  name';
    } elseif (MineInput($name, 3)) {

        $errors[] = 'Name must be grater than 3 ';

    } elseif (MaxInput($name, 30)) {

        $errors[] = ' Name must be Shorter than 30 ';

    }


    if (requiredInput($email)) {
        $errors[] = 'Please write an email';
    } elseif (MineInput($email, 3)) {

        $errors[] = 'Email must be grater than 3 ';

    } elseif (MaxInput($email, 30)) {

        $errors[] = 'Email must be Shorter than 30 ';

    } elseif (EmailValidation($email)) {
        $errors[] = 'Enter a valide Email';
    }


    if (requiredInput($password)) {
        $errors[] = 'Please write  password';
    } elseif (MineInput($password, 6)) {

        $errors[] = 'password must be at lest 6 caracters ';

    } elseif (MaxInput($password, 30)) {

        $errors[] = ' password must be Shorter than 30 ';

    } elseif (!passwordConfirmation($password, $confirm_password)) {
        $errors[] = 'Password didn\'t match';
    }



    if (empty($error)) {
        $user = [
             $name,
             $email,
             sha1($password),
        ];
        SaveUser(OpenFile("../data/users.csv"), $user);
        // $_SESSION['auth'] = [$name, $email];
setSession('auth', $user);
        Redirect("../index.php ");
    } else {
        setSession('errors', $errors);
        Redirect('../register.php');
    }


}