<?php
//using oop, create at least 5 new instances of a class fruit to describe the different example of fruits we have 
    class Fruits {

        public $name = 'Mango';
        public $color = 'Green';
        public $taste = 'sweet';
        public $season = 'rainy';




        // public function __construct() {

        // }

        public function __construct($name, $color, $taste,$season,)
        {
            echo 'The name of my favourite is '.$name.', it is mostly '.$color. ', it has a '.$taste.' taste, it is been sold cheaper during '.$season.'season';
            echo '</br>';
           
        }
       

        $mango = new Fruits('mango',);
        
    }
    


?>