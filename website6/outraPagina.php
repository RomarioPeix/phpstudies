<?php
  session_start();

  $name =  isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Guest';
 ?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Session não-autenticada</title>
  </head>
  <body>
    <h1>Olá.</h1>
    <h2>Seja bem vindo, <?php echo $name; ?></h2>
  </body>
</html>
