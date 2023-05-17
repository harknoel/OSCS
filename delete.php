<?php
    include 'connect.php';

    $query = "DELETE FROM tblguest where guestID = $deleteid";
    $result = mysqli_query($con, $query);

    header("Location: dashboard.php");
