<?php

session_start();

$username = htmlspecialchars(filter_input(INPUT_POST, "username"));
$password = hash('sha256', htmlspecialchars(filter_input(INPUT_POST, "password")));

require_once "../includes/key.php";
$data = $key->query("SELECT * FROM accounts WHERE username = '$username' AND password = '$password';");

if ($data->rowCount() > 0) {
    $_SESSION["account"] = $username;
    $_SESSION["message"] = "Vous êtes désormais connecté !";
    header("Location:../index.php");
}

else {
    $_SESSION["message"] = "Nous n'avons pas trouvé cet utilisateur.";
    header("Location:../pages/connection.php");
}

?>