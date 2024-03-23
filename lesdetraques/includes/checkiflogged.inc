<?php

if (!isset($_SESSION["account"])) {
    $_SESSION["message"] = "Veuillez vous authentifier.";
    header("Location:../index.php");
}

?>