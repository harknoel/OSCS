<?php
  $title = "Register";
  include 'createUser.php';
?>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .form-group {
      margin-bottom: 15px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .form-group input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }

    .success {
      color: green;
    }

    .fail {
      color: red;
    }

    .success, .fail {
      padding-bottom: 5px;
      font-size: small;
    }
    p {
      padding-left: 85px;
    }
  </style>

  <div class="container">
    <h2>Registration Form</h2>
    <?php
      if(isset($_SESSION['register-message'])) {
        echo $_SESSION['register-message'];
        unset($_SESSION['register-message']);
      }
    ?>
    <form action="createUser.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="txtusername" required>
      </div>
      <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="txtfirstname" required>
      </div>
      <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="txtlastname" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="txtpassword" required>
      </div>
      <div class="form-group">
        <input type="submit" name="btnAdd" value="Register">
      </div>
      <p>Already have an account? <a href="index.php">Login</a></p>
  </div>