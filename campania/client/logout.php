<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /campania/client/src/php-login-simple-master');
?>



