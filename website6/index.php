<?php
  if(isset($_REQUEST['submit'])){
    echo "foi alguma coisa cuzao";
    session_start();

    $_SESSION['name'] = htmlentities($_REQUEST['name']);
    $_SESSION['email'] = htmlentities($_REQUEST['email']);

    header('Location: autenticado.php');
  }
?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Sessions</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label>Nome</label>
      <input type="text" name="name" placeholder="Nome" />
      <label>Email</label>
      <input type="text" name="email" placeholder="Email" />
      <button type="submit" name="submit">Enviar</button>
    </form>
  </body>
</html>
