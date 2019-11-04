<?php

  $id = $_GET['id1'];

  $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
  $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','', $options);
  $statement1 = $pdo->prepare("Select * from participants where id=$id");
  $successQry1 = $statement1->execute();
  $result = $statement1->fetchAll();
  //var_dump ($result) ;
  $php_gender = $result[0]['gender'];
  $php_occupation = $result[0]['occupation']; 
    
  echo json_encode($result);

?>
