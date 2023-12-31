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
        //inheritance
                
        class Cherry extends Fruit {

            public function message(){
                echo "Is cherry a fruit or a berry?";
                echo "<br>";
                }
        }

            //object
        $cherry = new Cherry ("Cherry","red", ' '); 
        $cherry -> message(); 
        $cherry -> intro(); 
        
    ?>
    
    </body>
 </html>
 
