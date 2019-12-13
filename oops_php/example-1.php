<?php
    class Fruit{
        public $name;
        public $color;
        
        function set_name($name){
            $this->name = $name;        
        }
        
        function get_name(){
            return $this->name;
        }
        
        function set_color($color){
            $this->color = $color;            
        }
        
        function get_color(){
            return $this->color;
        }
    }

    $apple = new Fruit();
    $apple->name = "Apple";
    var_dump($apple instanceof Fruit);
    echo "<br>";

    $orange = new Fruit();

   // $apple->set_name('Apple');
    
    $orange -> set_name('Orange');
     
    $apple->set_color('Red');
    $orange->set_color('Orange');

   // echo $apple->get_name();
    echo $apple->name;
    echo "<br>";
    echo $orange->get_name();

    echo "<br>";
    echo $apple->get_color();
    echo "<br>";
    echo $orange->get_color();

?>
