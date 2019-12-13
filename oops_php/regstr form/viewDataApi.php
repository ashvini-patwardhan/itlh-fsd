<?php

     error_reporting(0);

     require_once "config.php";
       
     $statement = $pdo->prepare("select * from participants");
     $successQry = $statement->execute();
     $result = $statement->fetchAll();
  
     //var_dump ($result[0] ['name']) ;

    echo json_encode($result);
   
?>
