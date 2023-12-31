<html>
    <body>

    <?php

        class Fruit {
            //properties 
            public $name; 
            public $color; 

            function __construct($name, $color){
                $this -> name = $name; 
                $this -> color = $color; 
            }

           public function intro(){

            echo "A {$this -> name} is a fruit and the color of the fruit is {$this -> color}."; 
           }
        }
        //inheritance and polymorphism
                
        class Cherry extends Fruit {

            public $weight; 

            public function __construct($name, $color,$weight){

                $this -> name = $name; 
                $this -> color = $color; 
                $this -> weight = $weight; 
            }
                
            public function message(){
                echo "Is cherry a fruit or a berry?";
                echo "<br>";
                }
            public function intro(){

                echo "A {$this -> name} is a fruit and the color of the fruit is {$this -> color} 
                and its weight is {$this -> weight}."; 
                   }
        }

            //object
        $cherry = new Cherry ("Cherry","red", 20); 
        $cherry -> message(); 
        $cherry -> intro(); 
        
    ?>
    
    </body>
 </html>
 
