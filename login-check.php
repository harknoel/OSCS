<?php
    if(!isset($_SESSION['username'])) {
        $_SESSION['not-login'] = "<div class='fail'>Unable to access page. Please login.</div>";
        header("location: index.php");
    }
?>