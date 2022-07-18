<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="css2/main3.css">
  </head>
  <body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="login-box">
      <img src="img/31.jpg" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
      
      <form action="login.php" method="POST">

      <label for="email">Email</label>
      <input name="email" type="text" placeholder="Enter your email">
      <label for="password">Password</label>
      <input name="password" type="password" placeholder="Enter your Password">
     
        <input type="submit" value="Log In">
        <a href="signup.php">Don't have An account?</a>
      </form>
    </div>
  </body>
</html>