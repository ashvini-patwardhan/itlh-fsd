<?php


    $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','');
   

    //$statement1 = $pdo->prepare("update participants set mobile = 9833124567 where email = 'xyz@gmail.com'");
  //  $successQry1 = $statement1->execute();
    //$result1 = $statement1->fetchAll();
    //var_dump($result1);
        
 //  $statement2 = $pdo->prepare("insert into participants values('Ameya', 'ac@gmail.com', 'private', 774567328, 'male', 'Bandra Mumbai')");
//    $successQry2 = $statement2->execute();

          
 //   $statement2 = $pdo->prepare("delete from participants where email='ac@gmail.com'");
 //   $successQry2 = $statement2->execute();

    $statement = $pdo->prepare("select * from participants  where email = 'ac@gmail.com'");
    $successQry = $statement->execute();
    $result = $statement->fetchAll();
    var_dump($result);

?>
