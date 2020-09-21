<?php
session_start();
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
$_SESSION["connected"] = false;
if($_SESSION["password"] = strrev($_SESSION["username"]))
{
    $_SESSION["connected"] = true;
    
}
?>