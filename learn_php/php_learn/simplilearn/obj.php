<html>
 <body>

 <h1> Fruit Program </h1>

<?php

    class Fruit {    //class name

        //class properties
        public $name;
        public $color;

        //methods 
        //setter
        function set_name($name) {
            $this->name = $name;
}
        // getter 
        function get_name() {
        return $this->name;
}
}

//object
$apple = new Fruit(); 
$banana = new Fruit();

$apple -> set_name('Apple'); 
$banana -> set_name('Banana'); 

 echo $apple -> get_name();
 echo"<br>";
 echo $banana -> get_name() ;
 
?> 

</body>
</html>
