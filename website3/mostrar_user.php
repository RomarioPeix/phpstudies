<?php


  $name = [
    "Romario",
    "Laravel",
    "Leão"
  ];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<h1>Usuários e perfis</h1>
<ul>
  <?php foreach($name as $person => $nome): ?>
    <li><a href="mostrar_user.php?name=<?php echo $nome ?>"><?php echo $nome ?></a></li>
  <?php endforeach; ?>
</ul>

  <?php
  if(isset($name) && isset($_GET['name'])){
    foreach ($name as $person => $nome):
      if ($nome == $_GET['name']){
        echo "<h1>Perfil do {$nome}</h1>";
      }
    endforeach;
  } else{
    echo "Escolha um perfil";
  }

  ?>


</body>
</html>
