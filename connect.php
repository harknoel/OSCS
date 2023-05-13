<?php
    $con = new mysqli('localhost', 'root', '', 'dbf2bontilaohark');

    if(!$con) {
        die(mysqli_error($mysqli));
    }
?>