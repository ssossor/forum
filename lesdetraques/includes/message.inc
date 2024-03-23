<?php

if (isset($_SESSION["message"])) {
    echo "<aside>".$_SESSION['message']."</aside>";
    unset($_SESSION["message"]);
}

?>