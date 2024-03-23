<?php

session_start();
define('ROOT', '/lesdetraques/');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="
    <?=(isset($stylepath)) ? $stylepath : ROOT."css/style.css"?>  
    ">
    <title>Les Détraqués</title>
</head>
<body>
    <div class="therealbody">
        <header>
            <a href="<?=ROOT?>index.php">
                <img src="<?=ROOT?>pictures/kanar2.png" alt="SEO ON SEN FOUT">
            </a>
            
            <div class="boutontop">

                <?php

                if (isset($_SESSION["compte"])) {
                    echo "<a href='".ROOT."pages/registration.php'>".$_SESSION['compte']."</a>";
                    echo "<a href='".ROOT."processing/pdeconnection.php'>Deconnexion</a>";
                }

                else {
                    echo "<a href='".ROOT."pages/registration.php'>Inscription</a>";
                    echo "<a href='".ROOT."pages/connection.php'>Connexion</a>";
                }

                ?>
            </div>

        </header>