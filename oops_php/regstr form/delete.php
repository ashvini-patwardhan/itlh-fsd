<?php 
  require_once "config.php";
  $id = $_POST['id1'];  
  
  $statement = $pdo->prepare("delete from participants where id=$id");
  $successQry = $statement->execute();
  
  //header("location:viewData.php");
  
    //echo $id;

    echo "deleted";
?>
