<?php

function getRequestType()
{
    return $_SERVER['REQUEST_METHOD'];
}

function CheckPostMethod()
{
    if (getRequestType() == "POST") {
        return TRUE;
    } else
        return FALSE;
}


function reciveInput($value){
    return trim(htmlentities(htmlspecialchars($value))) ;
}