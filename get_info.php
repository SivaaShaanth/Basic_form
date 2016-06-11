<?php
session_start();
$_SESSION["username"]=$_POST["r"];
$_SESSION["pass1"]=$_POST["s"];
$_SESSION["pass2"]=$_POST["t"];
$_SESSION["mail"]=$_POST["u"];
?>
