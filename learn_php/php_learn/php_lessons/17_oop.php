<?php 

class User{
    //properties - attributes that belong to a class
    public $name;
    public $email;
    public $password; 

    //Constructor - a method that runs when an object is created
    function __construct($name, $email, $password){
        $this ->name = $name; 
        $this ->email = $email; 
        $this ->password = $password; 
    }

    //Method - a function that belongs to a class
        function set_name($name){
        $this -> name = $name; 
    }

    function get_name(){
        return $this -> name;  
    }
}

//Instantiate a new object 
    $user1 = new User ('Brad', 'brad@gmail.com', '234t#');
    $user2 = new User ('Jane','jane@outlook.com','rt45@');         

    echo $user1 -> email;
    echo "<br>";

    //var_dump($user1);

    echo $user2 -> name;
    echo "<br>";
    
    //Inheritance - 

    class Employee extends User {

        public function __construct($name, $email, $passowrd, $title)

    {
        parent:: __construct($name, $email, $passowrd);
        $this -> title = $title;  
    }

    public function getTitle(){
        return $this -> title; 
    }
    }

    $employee1 = new Employee ('Sara', 'sara@yandex.com','sze234','Manager');  
    
echo $employee1 -> getTitle(); 

    ?>