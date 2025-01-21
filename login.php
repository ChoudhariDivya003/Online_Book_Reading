<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="" href="Book.php">
</head>
<body>



<?php
    // Database credentials
    $host = "localhost";
    $email = "root";
    $password= "";
    $database = "sign_db";

    // Create a database connection
    $conn = new mysqli($host, $email, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve the username and password from the form
      $email = $_POST['email'];
      $password = $_POST['password'];
  
      // Prepare the SQL statement to check if the user exists
      $sql = "SELECT * FROM sign_table WHERE email = '$email' AND password = '$password'";
  
      // Execute the query
      $result = $conn->query($sql);
  
      // Check if a row was returned
      if ($result->num_rows == 1) {
          // User credentials are valid
          $_SESSION['email'] = $email;
           // Store username in the session for future use
          echo "Login successful. Welcome...!!! " . $email;
      } else {
          // Invalid credentials
          echo "Sorry....!!!Invalid email or password ".$email;
      }
  }
  ?>





  <div class="container">
    <form method="POST">
      <h2>Login</h2>
      <label for="username">Username:</label>
      <input type="name" id="name" name="name" placeholder="Enter your username">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password">
      <input type="submit" value="Login">
      <div class="sign-up link">
        Not A Member, <a href="file:///C:/xampp/htdocs/webdev/signup.html">Sign up Now</a>
      </div>
    </form>
  </div>


  <style>
     hr{
            color: blueviolet;
            margin-top: 300px;
        }
        .About{
            font-size: 24px;
            text-align: center;
            padding: 20px;
            margin-top: 100px;
            font-family: 'serif';
        }
  </style>
</body>
</html>

