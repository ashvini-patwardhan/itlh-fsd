<?php

    class QueryBuilder{
        protected $pdo;
        
        public function __construct($pdo){
            $this->pdo = $pdo;
        }
        
        public function selectAll($tablenm){
            $statement = $this->pdo->prepare("select * from {$tablenm}");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS);   
        }
    }
