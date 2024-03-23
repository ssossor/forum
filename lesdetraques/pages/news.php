<?php

include("../includes/top.inc");

?>

        <main>
            <article>
                <h1>Toute l'actualité</h1>
                <br>

                <?php

                require_once "../includes/key.php";
                $data = $key->query("SELECT * FROM subjects")->fetchAll();

                foreach ($data as $row) {
                    $subjectid = $row['id'];
                    $title = $row['title'];
                    echo "<form action='subject.php' method='get'>";
                    echo "<input type='hidden' name='subjectid' id='subjectid' value='$subjectid'>";
                    echo "<input type='submit' value='$title'>";
                    echo "</form>";
                    echo "<br>";
                }

                ?>
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