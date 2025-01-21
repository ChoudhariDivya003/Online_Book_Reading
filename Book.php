<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get form data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Validate form data
  $errors = array();
  if (empty($username)) {
    $errors[] = "Username is required";
  }
  if (empty($email)) {
    $errors[] = "Email is required";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
  }
  if (empty($password)) {
    $errors[] = "Password is required";
  }
  if ($password != $confirm_password) {
    $errors[] = "Passwords do not match";
  }

  // If there are no errors, create a new user account
  if (empty($errors)) {
    // TODO: Insert user data into database
    echo "User account created successfully";
  } else {
    // Display errors
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo "</ul>";
  }
}
?>
