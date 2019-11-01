<?php

    session_start();
    
    $_SESSION["userid"] = "";
    $_SESSION["password"] = "";
    header('location: login.php');
?>
