<?php

require_once 'Config.php';
$conn = new Config();
$qry = $conn->executeQry('select * from participants');

var_dump($qry);
