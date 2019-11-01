<?php

    //echo "<br> Entered Email is: ". $_GET["email"];
     
    //echo "<br> Entered Occupation is: ". $_GET["password"];

    session_start();
    
    $_SESSION["userid"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];

    header("location:registraionForm.php");

//    $entrd_email_id = $_POST["email"];
//
//    $entrd_password = $_POST["password"];
//
//    $email = "ashvini.patwardhan@gmail.com";
//
//    $pswd = "abc123";

   

//    if($email==$entrd_email_id && $pswd==$entrd_password ) // { // header("location:registraionForm.php"); // }
//    else
//    {
//        echo "Wrong Email or Password. Please Try Again.";
//    }
  
   
?>
