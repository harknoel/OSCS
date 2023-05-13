<?php
    $mysqli = new mysqli('localhost', 'root', '', 'dbf2bontilaohark') or die(mysqli_error($mysqli));

    if(isset($_POST['btnAdd'])) {
        $uname = $_POST['txtusername'];
        $pwd = $_POST['txtpassword'];
        $fname = $_POST['txtfirstname'];
        $lname = $_POST['txtlastname'];
    
        $mysqli->query("INSERT INTO tbluseraccount (username, password, firstname, lastname) VALUES('$uname', '$pwd', '$fname', '$lname')") or die($mysqli->error);
        header("Location: index.php");
    }
?>