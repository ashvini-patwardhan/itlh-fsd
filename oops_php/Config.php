<?php
 error_reporting(1);
class Config
{
      
// *******************   Other Working Code ************************
//    
    
    protected $host = "localhost";
    protected $dbname = "itlh_db";
    protected $user = "root";
    protected $pass = "";
    protected $DBH;

    function __construct() {

            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);       
    }
    
    
//  ************************ Working Code Ends Here ******************************
    
  
     public function executeQry($query){
            
            $statement = $this->pdo->prepare($query);            
            $statement->execute();
            return $statement->fetchAll();               
        }
}

//$conn = new Config();
//$qry = $conn->executeQry('select * from participants');
//
//var_dump($qry);
