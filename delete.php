<?php
include 'connect.php';

$query = "DELETE FROM tblguest WHERE guestID = '" . $_GET['deleteid'] . "'";
$result = mysqli_query($con, $query);

header("Location: dashboard.php");
