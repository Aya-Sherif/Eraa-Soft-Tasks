<?php


function OpenFile($path)
{
    return fopen($path, "a+");
}
function SaveUser($user_file, $data)
{
    fputcsv($user_file, $data);
}

function handleLogin($user_file, $data)
{
    while (($user = fgetcsv($user_file)) !== false) {
        // Assuming $user is an array with at least three elements (name, email, password)
        if ($user[1] == $data['email'] && $user[2] == $data['password']) {
            setSession('auth', $user);
            return true;
        }
    }
    return false;
}

function Redirect($url)
{
    header("location:$url");
}