<?php

?>
<?php
if(isset ($_POST['submitButton'])) {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
  
    // Check if the username and password match a record in the database
    $sql = "SELECT no FROM login WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
  
    if ($result->num_rows == 1) {
      // The username and password are correct, so log the user in
      session_start();
      $_SESSION["username"] = $username;
      header("Location: home.html");
    } else {
      // The username and password are incorrect, so display an error message
      $error = "Invalid username or password";
    }
  }
  ?>


?>