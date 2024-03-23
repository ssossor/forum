<?php

session_start();
define('ROOT', '/lesdetraques/');

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=(isset($stylepath)) ? $stylepath : ROOT."css/style.css"?>">
        <title>Les Détraqués</title>
        <meta name="description" content="Le super site des détraqués de Erwan, Dario et Youssef il est vraiment trop bien serieux le site est trop cooool https://www.paypal.com/donate/?hosted_button_id=4Z7E7RP5MRPSW voici le paypal pour l'aide svp monsieur on est malade sa serait vraiment gentil :)">
    </head>
    <body>
        <header>
            <a href="<?=ROOT?>index.php">
                <img src="<?=ROOT?>pictures/kanar2.png" alt="SEO">
            </a>
        </header>

        <nav>
            <div class="left">
                <a href="<?=ROOT?>index.php">Accueil</a>
                <a href="<?=ROOT?>pages/news.php">Toute l'actualité</a>

                <?php
                    if (isset($_SESSION["account"])) {
                        echo "<a href='".ROOT."pages/newsubject.php'>Nouveau sujet</a>";
                    }
                ?>
            </div>

            <div class="right">
                <?php
                    if (isset($_SESSION["account"])) {
                        echo "<a href='".ROOT."pages/profile.php'>".$_SESSION['account']."</a>";
                        echo "<a href='".ROOT."processing/pdeconnection.php'>Deconnexion</a>";
                    }
                    else {
                        echo "<a href='".ROOT."pages/registration.php'>Inscription</a>";
                        echo "<a href='".ROOT."pages/connection.php'>Connexion</a>";
                    }
                ?>
            </div>
        </nav>

        <?php
            if (isset($_SESSION["message"])) {
                echo "<aside><article>".$_SESSION['message']."</article></aside>";
                unset($_SESSION["message"]);
            }
        ?>