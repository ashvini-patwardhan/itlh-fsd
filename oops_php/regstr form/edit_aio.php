<?php
require_once "config.php";
  $id = $_GET['id1'];
  $statement1 = $pdo->prepare("Select * from participants where id=$id");
  $successQry1 = $statement1->execute();
  $result = $statement1->fetchAll();
  //var_dump ($result) ;
 // $php_gender = $result[0]['gender'];
 // $php_occupation = $result[0]['occupation']; 
    
  echo json_encode($result);

?>
