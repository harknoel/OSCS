<?php
    include 'connect.php';
    $mysqli = new mysqli('localhost', 'root', '', 'dbf2bontilaohark') or die(mysqli_error($mysqli));

    if(isset($_POST['btnAdd'])) {
        $uname = $_POST['txtusername'];
        $pwd = $_POST['txtpassword'];
        $fname = $_POST['txtfirstname'];
        $lname = $_POST['txtlastname'];
    
        $sql = "select * from tbluseraccount where username='".$uname."'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count > 0) {
            header("Location: index.php");
        } 
        else {
            $insertQuery = "INSERT INTO tbluseraccount (firstname, lastname, username, password) 
                            VALUES ('$firstname', '$lastname', '$username', '$password')";
            $insertResult = mysqli_query($con, $insertQuery);
            header("Location: index.php");
        }
    }
?>