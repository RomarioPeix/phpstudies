<?php
 $host = 'localhost', 
 $user = 'root', 
 $password = '123456',
 $dbname = 'pdo'
   
 // Set DSN DATE SOURCE NAME
 $dsn = 'mysql:host='.$host.';dbname='.$dbname;

   
 // Create a PDO instance
 $pdo = new PDO($dsn, $user, $password);

 // Set the dafault fetch format to obj
 $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

 # PDO QUERY 
 $statement = $pdo->query('SELECT * FROM posts');
 // we can override the default fetch like thid
 //fetch(PDO::ASSOC)
 while($row = $statement->fetch()) 
 {
   //for an array 
   echo $row['title']. '<br>'
     // For a Object
     // $row->title.'<br>'
 }
?>