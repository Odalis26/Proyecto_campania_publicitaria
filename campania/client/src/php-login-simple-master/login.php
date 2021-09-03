<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /campania/client/src/php-login-simple-master');
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
      header("Location: /campania/client/src/php-login-simple-master");
    } else {
      $message = 'Lo siento, esas credenciales no coinciden';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia Sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Inicia Sesión</h1>
    <span>o <a href="signup.php">Regístrate</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="email" placeholder="Enter your email" required>
      <input name="password" type="password" id="password"onclick="mostrarContrasena()"placeholder="Enter your Password" required>
      <input type="submit" value="Submit">
    </form>
    <script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>
<script>
   var resultado = window.confirm('Con un click puede mostrar y ocultar la contraseña');

</script>
  </body>
</html>
