<?php
  session_start();

  require '../../../server/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require '../navegation_default/header.php' ?>

    <?php if(!empty($user)):header('Location: ../crud_campania/index.php'); ?>
  
      <a href="../../logout.php">Logout</a>
    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="../php-login-simple-master/login.php">Login</a> or
      <a href="../php-login-simple-master/signup.php">SignUp</a>
    <?php endif; ?>
  </body>
</html>
