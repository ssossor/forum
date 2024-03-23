<?php

//$stylepath = '/lesdetraques/css/form.css';
include("../includes/top.inc");

?>
        <main>
            <article>
                <h1>Formulaire de connexion</h1>
                <br>
                <form action="<?=ROOT?>processing/pconnection.php" method="post">
                    Pseudo
                    <br>
                    <input type="text" name="username" id="username" required value="Ssor">
                    <br>

                    Password
                    <br>
                    <input type="password" name="password" id="password" required value="hiddenpassword">
                    <br>

                    <input type="submit" value="Se connecter">

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