<?php

     $id = $_GET['id'];

     
     $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    
     $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','', $options);


     $name = $_POST['name'];
    
     $email = $_POST["email"];

     $occupation = $_POST["occupation"];

     $mobile = $_POST["mobile"];

     $gender = $_POST["gender"]; 

     $address = $_POST["address"];   

     $statement = $pdo->prepare("update participants set name='$name', email='$email', occupation = '$occupation', mobile='$mobile', gender='$gender', address='$address' where id=$id");
    //update particiapnts set email='sjp@gmail.com' where email='abc@gmail.com';
     $successQry2 = $statement->execute();

      //echo ("update particiapnts set name='$name', email='$email', occupation = '$occupation', mobile='$mobile', gender='$gender', address='$address' where id=$id");


     header("location:viewData.php");

?>
