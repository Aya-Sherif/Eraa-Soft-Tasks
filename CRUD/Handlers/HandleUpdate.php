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



    if (empty($errors)) {
        $id = $_POST['id'];
        if ($password) {

            if (requiredInput($password)) {
                $errors[] = 'Please write  password';
            } elseif (MineInput($password, 6)) {

                $errors[] = 'password must be at lest 6 caracters ';

            } elseif (MaxInput($password, 30)) {

                $errors[] = ' password must be Shorter than 30 ';


            }

            $password = santInput($password);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "UPDATE `users` SET `User_name`='$name',`User_Email`='$email',`User_password`='$hashed_password'
        WHERE `User_ID`='$id'";
        } else {
            $sql = "UPDATE `users` SET `User_name`='$name',`User_Email`='$email'
        WHERE `User_ID`='$id'";
        }

        $result = mysqli_query($conn, $sql);

        if ($result) {
            $Updatedsuccess = "Updated Successfully ❤️";
            setSession('Updatedsuccess', $Updatedsuccess);
            Redirect('../index.php');
        }
    }
    else{
        setSession('Updatederror', $errors);
        Redirect("../edit.php?id=$id");
        

    }



}
?>






