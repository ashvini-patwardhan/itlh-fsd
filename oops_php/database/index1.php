<?php 

    require 'database/Connection.php';

    require 'database/QueryBuilder.php';   

    $pdo = Connection::make();

    $query = new QueryBuilder($pdo);
    
    $participants = $query->selectAll('participants');
    
    var_dump($participants);
    //var_dump($participants[0]->name);

?>
