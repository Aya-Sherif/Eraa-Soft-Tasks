<?php

//this function is used to check if the user input the value or not 
function requiredInput($value)
{
    if (empty($value)) {
        return true;
    }
    return false;
}

//max and mine function used to check if the the input within a specific range or not 
function MineInput($value,$length)
{
    if (!requiredInput($value)) {
        if (strlen($value) < $length) {
            return true;
        } else {
            return false;
        }
    }
}

function MaxInput($value, $length)
{
    if (!requiredInput($value)) {
        if (strlen($value) > $length) {
            return true;
        } else {
            return false;
        }
    }
}
//this function is used to check if the user enter a valid email or not 
function EmailValidation($email)
{
    if (!requiredInput($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }

    }
}
//This function used to check if the two passwords is the same or not 
function passwordConfirmation($password, $confirm)
{
    if ($password === $confirm) {
        return true;
    } else {
        return false;
    }
}
