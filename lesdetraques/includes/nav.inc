        <nav>
            <a href="<?=ROOT?>index.php">Accueil</a>
            <div class='boutontop'>

            <?php

            if (isset($_SESSION["compte"])) {
                echo "<a href='".ROOT."pages/newsubject.php'>Nouveau sujet</a>";
            }

            ?>
            
            <a href="<?=ROOT?>pages/news.php">Toute l'actualité</a>
            </div>
        </nav>