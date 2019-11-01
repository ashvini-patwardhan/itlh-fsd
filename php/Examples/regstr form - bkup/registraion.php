<?php


     
     $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    
     $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','', $options);


     $name = $_POST["name"];
    
     $email = $_POST["email"];

     $occupation = $_POST["occupation"];

     $mobile = $_POST["mobile"];

     $gender = $_POST["gender"]; 

     $address = $_POST["address"];  
 
  
   
     $statement2 = $pdo->prepare("insert into participants values('$name', '$email', '$occupation', '$mobile', '$gender', '$address')");

     $successQry2 = $statement2->execute();

     header("location:viewData.php");
  
    
     //echo $successQry;

    
    


?>
