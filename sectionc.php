<?php

    class Fruits {

        public $name = 'Mango';
        public $color = 'Green';
        public $taste = 'sweet';
        public $season = 'rainy';




   

        public function __construct($name, $color, $taste,$season,)
        {
            echo 'The name of my favourite is '.$name.', it is mostly '.$color. ', it has a '.$taste.' taste, it is been sold cheaper during '.$season.'season';
            echo '</br>';
           
        }
       

        
        
    }
    
    $mango = new Fruits('mango','green', 'sweet', 'rainy');
    $apple = new Fruits('apple','green', 'sweet', 'rainy');
    $orange = new Fruits('orange','green', 'sweet', 'dry');
    $pineapple = new Fruits('pineaple','green', 'sweet', 'rainy');
    $pawpaw = new Fruits('pawpaw','green', 'sweet', 'dry');

?>