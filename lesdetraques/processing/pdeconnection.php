<?php

session_start();
unset($_SESSION["account"]);
$_SESSION["message"] = "Vous êtes déconnecté.";
header("Location:../index.php");

?>