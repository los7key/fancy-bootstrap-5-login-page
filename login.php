<!-- login.php -->
<?php
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Retrieve the submitted data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Do something with the data
    // For example, you could check if the username and password are valid
    if ($username === 'admin' && $password === 'password123') {
      // If the credentials are valid, redirect the user to a secure page
      header('Location: secure.php');
      exit();
    } else {
      // If the credentials are invalid, log an error message with the username and password
      error_log("Invalid login attempt. Username: $username, Password: $password");
      // Display an error message to the user
      echo 'Invalid username or password';
    }
  }
?>

