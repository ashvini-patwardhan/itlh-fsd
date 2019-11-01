<?php 

   $id = $_POST['id1'];
  
  $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','');
  $statement = $pdo->prepare("delete from participants where id=$id");
  $successQry = $statement->execute();
  
  //header("location:viewData.php");
  
    echo $id;
?>
