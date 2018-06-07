<!-- header -->
<?php require_once('./includes/header.php'); ?>
<!-- endheader -->

<!-- PHP Submit LOGIC -->
  <?php
    // Message Vars
    $msg = '';
    $msgClass = '';

    // procurar Submit
    if(filter_has_var(INPUT_POST, 'submit')){
      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $message = $_REQUEST['message'];

      // check required fields
      if (!empty($email) && !empty($name) && !empty($message)) {
        // Check Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
          $msgClass = 'alert alert-danger';
          $msg = 'Digite um email válido';
        } else {
          // passed
          $toEmail = 'jromariop@hotmail.com';
          $subject = 'Contact Request From {$name}';
          $body = '<h2> Contact Request </h2>
            <h4>Name</h4>: <p>'.$name.'</p>
            <h4>Email</h4>: <p>'.$email.'</p>
            <h4>Message</h4>: <p>'.$message.'</p>';

          // email Header
          $headers = "MIME-Version: 1.0" ."\r\n";
          $headers .= "Content Type:text/html;charset=utf-8"."\r\n";
          $headers .= "From: ".$name. "<".$email.">"."\r\n";

          if (mail($toEmail, $subject, $body, $headers)) {
            $msgClass = 'alert alert-success';
            $msg = 'Email enviado!!';
          } else {
            $msgClass = 'alert alert-danger';
            $msg = 'Não foi possível enviar seu email no momento. Tente novamente mais tarde.';
          }
        }
      } else {
        $msgClass = 'alert alert-danger';
        $msg = 'Todos os campos são obrigatórios!!!';
      }

    }
   ?>
<!-- endPhP -->

<!-- corpo -->
<br>
<h1 class="page-header">Form de Contato</h1>
<div class="container">
  <?php if($msg): ?>
    <div class='<?php echo $msgClass ?>'>
      <?php echo $msg ?>
    </div>
  <?php endif; ?>

  <form class="" action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
      <label>Nome: </label>
      <input type="text" name="name" class="form-control" placeholder="Nome"
      value="<?php echo isset($_REQUEST['name']) ? $name : ''; ?>" />
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" placeholder="Email"
      value="<?php echo isset($_REQUEST['email']) ? $email : ''; ?>" />
    </div>
    <div class="form-group">
      <label>Mensagem</label>
      <textarea name="message" class="form-control" placeholder="Digite aqui a mensagem"><?php echo isset($_REQUEST['message']) ? $message : ''; ?>
      </textarea>
    </div>

    <button type="submit" class="btn btn-primary bgn-md" name="submit">Enviar</button>
  </form>
</div>

<!-- endcorpo -->

<!-- footer -->
<?php require_once('./includes/footer.php'); ?><!-- endfooter -->
