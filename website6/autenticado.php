<?php
  session_start();

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
 ?>

 <!DOCTYPE html>
 <html lang="pt" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Session autenticada</title>
   </head>
   <body>
      <h1>Parabénsss!!!. </h1>
      <hr>
      <p>Muitoo obrigado <?php echo $name ?> por se increver em nosso programa,
      aguarde mais informações em seu email <?php echo $email ?> logo mais. <br>
      Abraços.</p>

      <a href="outraPagina.php">Seilá o que esse viado quer fazer</a>
   </body>
 </html>
