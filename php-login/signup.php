<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['username']) && !empty($_POST['age'])) {
    $sql = "INSERT INTO users (email, password, username, age) VALUES (:email, :password, :username, :age)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':age', $_POST['age']);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

    <div class="login-box">
      <img src="img/31.jpg" class="avatar" alt="Avatar Image">
      <h1>SignUp Here</h1>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <form action="signup.php" method="POST">
      <input name="username" type="text" placeholder="Enter your username">
      <input name="age" type="text" placeholder="Enter your age">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
     
      <input type="submit" value="SignUp">
     
      <a href="login.php">Already have an account?</a>
      
    </form>

  </body>
</html>