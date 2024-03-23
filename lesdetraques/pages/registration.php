<?php

//$stylepath = '/lesdetraques/css/form.css';
include("../includes/top.inc");

?>
        <main>
            <article>
                <h1>Formulaire d'inscription</h1>
                <br>
                <form action="<?=ROOT?>processing/pregistration.php" method="post">
                    Pseudo
                    <br>
                    <input type="text" name="username" id="username" required value="Ssor">
                    <br>

                    Email
                    <br>
                    <input type="email" name="email" id="email" required value="ssor@gmail.com">
                    <br>

                    Password
                    <br>
                    <input type="password" name="password" id="password" required value="hiddenpassword">
                    <br>

                    <input type="submit" value="S'inscrire">

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