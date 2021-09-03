<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password, confirm_password) VALUES (:email, :password, :confirm_password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $password = password_hash($_POST['confirm_password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':confirm_password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito';
    } else {
      $message = 'Lo sentimos, debe haber un problema al crear su cuenta.';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Regístrate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Regístrate</h1>
    <span>o <a href="login.php">Inicia Sesión</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="email" placeholder="Enter your email"required>
      <input name="password" type="password" id="password"onclick="mostrarContrasenaone()"placeholder="Enter your Password"required>
       <input type="bottom" value="Verificar contraseñas"onclick="validarContraseña()" >
       <input name="confirm_password" type="password" id="confirm_password"onclick="mostrarContrasena()"placeholder="Confirm Password"required>
     
      <input type="submit" value="Registrarse"onclick="validarContraseña()" >
    </form>
 
    <div id="form" onkeypress="enterEnviar(event);">
   <div id="resultado"></div>  
 </div>
 
   <script>
     //función para ahorrar codigo [document.getElementById() = __()];
 function __(id){
   return document.getElementById(id);
 }
 
 //Validar contraseña
 function validarContraseña() {
   var pass = __('password').value,
       pass2 = __('confirm_password').value;
   if(pass != '' && pass2 != ''){
     if(pass != pass2){
       //si las contraseñas no coinciden
       __('resultado').innerHTML = '<p class="error"><strong>Error: </strong>¡Las contraseñas no coinciden!</p>';
     } else {
       //Si todo esta correcto 
       __('form').innerHTML = '<p class="correcto"><strong>✓ Correcto: </strong>Las contraseñas son correctas</p>';
     }
   } else {
     //si los campos o uno, este vacio
     __('resultado').innerHTML = '<p class="error"><strong>Error: </strong>¡Los campos no deben estar vacios!</p>';
   } 
 }
 
 //enviar formulario con la tecla ENTER
 function enterEnviar(event){
     if(event.keyCode == 13){
       validarContraseña()
     }
 }
 
   </script>
 </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
  <script>
  function mostrarContrasenaone(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>
<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("confirm_password");
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
