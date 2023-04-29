<?php
    $mysqli = new mysqli('localhost', 'root', '', 'dbf2bontilaohark') or die(mysqli_error($mysqli));

    if(isset($_POST['btnAdd'])) {
        $guestName = $_POST['guestName'];
        $country = $_POST['country'];
    
        $mysqli->query("INSERT INTO tblguest (guestName, country) VALUES('$guestName', '$country')") or die($mysqli->error);
        header("Location: dashboard.php");
    }
?>