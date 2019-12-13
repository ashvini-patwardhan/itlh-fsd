<?php 

  $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
  $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','', $options);
  
?>
