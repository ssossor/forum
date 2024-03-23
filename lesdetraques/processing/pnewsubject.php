<?php

session_start();

include("../includes/checkiflogged.inc");

if (isset($_POST["title"]) && isset($_POST["description"]) && !empty($_POST["title"]) && !empty($_POST["description"])) {
    $title = htmlspecialchars(filter_input(INPUT_POST, "title"));
    $desc = htmlspecialchars(filter_input(INPUT_POST, "description"));

    $username = $_SESSION['account'];
    require_once "../includes/key.php";
    $data = $key->query("SELECT id FROM accounts WHERE username = '$username';")->fetch();
    $id = $data['id'];



    require_once "../includes/key.php";
    $data = $key->query("SELECT * FROM subjects WHERE title = '$title';");

    if ($data->rowCount() == 0) {
        require_once "../includes/key.php";
        $requete=$key->prepare("INSERT INTO subjects (idauthor, title, description) VALUES (:idauthor, :title, :description)");

        $requete->bindParam(":idauthor", $id);
        $requete->bindParam(":title", $title);
        $requete->bindParam(":description", $desc);

        if ($requete->execute()) {
            $_SESSION["message"] = "Ce sujet a été créé.";
            header("Location:../index.php");
        }
        else {
            $_SESSION["message"] = "Cela n'a pas fonctionné. Veuillez réessayer.";
            header("Location:../pages/registration.php");
        }
    }

    else {
        $_SESSION["message"] = "Un sujet avec ce titre existe déjà, veuillez en choisir un autre";
        header("Location:../pages/newsubject.php");
    }
}

else {
    //$_SESSION["message"] = "Arrête tes bétises.";
    header("Location:../index.php");
}