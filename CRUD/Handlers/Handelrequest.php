<?php
session_start();
require_once "../core/request.php";
require_once "../core/Validation.php";
require_once "../core/sessions.php";
require_once "../core/functions.php";
require_once "../inc/db.php";


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


    }


    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`User_name`, `User_Email`, `User_password`)
                VALUES ('$name', '$email', '$hashed_password')";
        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            $success = "Added Successfully ❤️";
            setSession('Success', $success);
            Redirect('../add.php');
        }
    }
    

    else {
        setSession('errors', $errors);
        //echo "Back";
        //  Redirect("../Aya.php ");

        Redirect('../add.php');
    }

}
?>
