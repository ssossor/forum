<?php

$stylepath = "/lesdetraques/css/subject.css";
include("../includes/top.inc");

?>

        <main>
            <article>
                <?php

                $subjectid = htmlspecialchars(filter_input(INPUT_GET, "subjectid"));

                require_once "../includes/key.php";
                $data = $key->query("SELECT * FROM subjects WHERE id = '$subjectid';")->fetch();
                $title = $data['title'];
                $desc = $data['description'];

                echo "<h2>".$title."</h2>";
                echo "<p>".$desc."</p>";


                require_once "../includes/key.php";
                $data = $key->query("SELECT * FROM messages WHERE idsubject = '$subjectid';")->fetchAll();

                foreach ($data as $row) {
                    $idauthor = $row['idauthor'];
                    $content = $row['content'];

                    require_once "../includes/key.php";
                    $data = $key->query("SELECT username FROM accounts WHERE id = '$idauthor';")->fetch();
                    $author = $data['username'];
                    echo "<span>".$author."</span> : ".$content."<br>";
                }

                ?>

                <form action="../processing/pnewmessage.php" method="post">
                    <input type="text" name="message" id="message" placeholder="Envoyer un message...">
                    <?=
                    "<br><input type='hidden' name='subjectid' id='subjectid' value='$subjectid'>"
                    ?>
                    <input type="submit" value="Envoyer mon message">
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