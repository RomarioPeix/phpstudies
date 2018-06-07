<?php include './server-info.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">  
  <title>System Info</title>
</head>
<body>
  <div class="container">
    <br>
    <h1 class="page-header"> 
      Server & File Info
    </h1>
    
    <?php if($server): ?>

    <ul class="list-group">
      <?php foreach($server as $key => $value): ?>
        <li class="list-group-item">
          <strong><?php echo $key ?>:</strong>
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <?php endif; ?>

    <hr>

    <h1 class="page-header"> 
      Client Info
    </h1>
    
    <?php if($client): ?>

    <ul class="list-group">
      <?php foreach($client as $key => $value): ?>
        <li class="list-group-item">
          <strong><?php echo $key ?>:</strong>
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <?php endif; ?>


  </div>
</body>
</html>