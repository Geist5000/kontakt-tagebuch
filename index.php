<?php
session_start();
if (isset($_SESSION["fname"]) or
    (!empty($_SESSION["fname"]))) {
    header("Location: ./menu.php");
}else{
    header("Location: ./login.php");
}
