<?php

session_start();

$pseudo = htmlspecialchars(filter_input(INPUT_POST, "username"));
$email = htmlspecialchars(filter_input(INPUT_POST, "email"));
$password = hash('sha256', htmlspecialchars(filter_input(INPUT_POST, "password")));
$isadmin = 0;

require_once "../includes/key.php";
$data = $key->query("SELECT * FROM accounts WHERE username = '$pseudo';");

if ($data->rowCount() == 0) {
    require_once "../includes/key.php";
    $requete=$key->prepare("INSERT INTO accounts (username, email, password, isadmin) VALUES (:username, :email, :password, :isadmin)");

    $requete->bindParam(":username", $pseudo);
    $requete->bindParam(":email", $email);
    $requete->bindParam(":password", $password);
    $requete->bindParam(":isadmin", $isadmin);

    if ($requete->execute()) {
        $_SESSION["message"] = "Compte créé ! Vous pouvez maintenant vous connecter.";
        header("Location:../index.php");
    }
    else {
        $_SESSION["message"] = "Cela n'a pas fonctionné. Veuillez réessayer.";
        header("Location:../pages/registration.php");
    }
}

else {
    $_SESSION["message"] = "Pseudo déjà utilisé.";
    header("Location:../pages/registration.php");
}

?>