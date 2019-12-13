<?php

     error_reporting(0);

     $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    
     $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','', $options);

       
     $statement = $pdo->prepare("select * from participants");
     $successQry = $statement->execute();
     $result = $statement->fetchAll();
  
     //var_dump ($result[0] ['name']) ;

    echo json_encode($result);
   
?>
