<?php

$stylepath = "/lesdetraques/css/newsubject.css";
include("../includes/top.inc");
include("../includes/checkiflogged.inc");

?>
        <main>
            <article>
                <h1>Creation de sujet</h1>
                <br>
                <form action="<?=ROOT?>processing/pnewsubject.php" method="post">
                    Titre
                    <br>
                    <input type="text" name="title" id="title" required value="TitreTest" required>
                    <br>

                    Description
                    <br>
                    <input type="text" name="description" id="description" value="Un exemple de description d'un sujet." required>
                    <br>

                    <input type="submit" value="Valider">

                </form>
            </article>
        </main>
        <footer>
            <article>
                &copy; Copyright
            </article>
        </footer>
    </div>
</body>
</html>