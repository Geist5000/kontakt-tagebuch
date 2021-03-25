<?php

if(
    session_status() == PHP_SESSION_NONE or
    session_status() == PHP_SESSION_DISABLED or
    (!isset($_SESSION["fname"])) or
    empty($_SESSION["fname"])){
    redirect();
}

function redirect(){
    header("HTTP/1.1 403 Forbidden");
    header('Location: /login.php');
}
