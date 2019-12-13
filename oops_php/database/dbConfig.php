<?php 

try{
  
  $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
  $pdo = new PDO('mysql:host=127.0.0.1; dbname=itlh_db', 'root','', $options);
  
}catch(PDOException $e){
  //die("Could not connect.");
  die($e->getMessage());
}
  
$statement = $pdo->prepare("select * from participants");

$statement->execute();
//var_dump($statement->fetchAll())

$results = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results[0]->name);

//
//class DB_Conn{
//    public $options;
//    public $pdo;
//  
//  public function __construct($options, $pdo) {
//     $this->optionsv = $options;
//     $this->pdo = $pdo;
//  }
//}

  
?>
