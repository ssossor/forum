<?php

session_start();

include("../includes/checkiflogged.inc");

if (isset($_SESSION) && isset($_POST["message"]) && isset($_POST["subjectid"]) && !empty($_POST["message"]) && !empty($_POST["subjectid"])) {
    $account = $_SESSION['account'];
    require_once "../includes/key.php";
    $data = $key->query("SELECT id FROM accounts WHERE username = '$account';")->fetch();
    $authorid = $data['id'];

    $content = htmlspecialchars(filter_input(INPUT_POST, "message"));
    $subjectid = htmlspecialchars(filter_input(INPUT_POST, "subjectid"));

    require_once "../includes/key.php";
    $requete=$key->prepare("INSERT INTO messages (idauthor, idsubject, content) VALUES (:idauthor, :idsubject, :content)");

    $requete->bindParam(":idauthor", $authorid);
    $requete->bindParam(":idsubject", $subjectid);
    $requete->bindParam(":content", $content);

    if ($requete->execute()) {
        header("Location:../index.php");
        $_SESSION["message"] = "Message envoyé.";
    }
    else {
        $_SESSION["message"] = "Cela n'a pas fonctionné. Veuillez réessayer.";
        header("Location:../index.php");
    }
}

else {
    //$_SESSION["message"] = "Arrête tes bétises.";
    header("Location:../index.php");
}