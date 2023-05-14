<?php
    include 'session.php';
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
            $_SESSION['register-message'] = "<div class='fail'>Username already exist. Try again.</div>";
            header("Location: register.php");
        } 
        else {
            $insertQuery = "INSERT INTO tbluseraccount (username, password, firstname, lastname) 
                            VALUES ('$uname', '$pwd', '$fname', '$lname')";
            $insertResult = mysqli_query($con, $insertQuery);
            $_SESSION['register-message'] = "<div class='success'>Successfully registered.</div>";
            header("Location: register.php");
        }
    }
?>