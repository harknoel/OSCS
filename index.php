<?php
$title = "Login";
include 'connect.php';

session_start();

if (isset($_POST['btnLogin'])) {
    $uname = $_POST['txtusername'];
    $pwd = $_POST['txtpassword'];

    $sql = "select * from tblaccount where username='" . $uname . "'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    $row = mysqli_fetch_array($result);
    echo $uname;
    echo $pwd;

    if ($count == 0) {
        echo "<script language='javascript'>
            alert('username not existing.');
            </script>";
    } else if ($row[1] != $pwd) {
        echo "<script language='javascript'>
            alert('Incorrect password');
         </script>";
    } else {
        $_SESSION['username'] = $row[0];
        header("location: main.php");
    }
}
?>

<style>
    body {
        background-color: #E7EFE1;
        font-family: Arial, sans-serif;
    }

    .container {
        width: 300px;
        margin: 0 auto;
        margin-top: 100px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .container h2 {
        text-align: center;
    }

    .container input[type="text"],
    .container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        border: none;
        color: #fff;
        cursor: pointer;
        border-radius: 3px;
    }

    .container input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div class="container">
    <h2>Login</h2>
    <form action="index.php" method="POST">
        <input type="text" name="txtusername" placeholder="Username" required>
        <input type="password" name="txtpassword" placeholder="Password" required>
        <input type="submit" name="btnLogin" value="Login">
    </form>
</div>