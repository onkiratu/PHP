/*
<?php
//echo "Hello World!";
//?>
 
//#php
//php

//<?php
//$txt = " Potterhouse  ";
//echo "<p> I love $txt </p> ";
//?>

<?php
//$x = 5;
//$y = 4;
//echo $x + $y;
//?>

//<?php
//function myTest() {
//  $x = 5; // local scope
  // echo "<p>Variable x inside function is: $x</p>";
//}
//myTest();

// using x outside the function will generate an error
//echo "<p>Variable x outside function is: $x</p>";
//?>

//<?php
//$x = 5;
//$y = 10;
//$z;

//function myTest2() {
  //global $x, $y, $z, $h;
  //$y = $x + $y;
  //$z = $x * $y;
  //$h = $z / $x;
//}

//myTest2();
//echo "<p> $z </p>";
//echo "\n $y "; // outputs 15
//echo "<p> $z </p>";
//echo "<p> $h </p>";
//?>

//<?php
//function myTest4() {
  //static $x = 0;
  //echo $x;
  //$x++;
//}

//myTest4();
//myTest4();
//myTest4();
//?>

//<?php
//$x = "Hello world!";
//$y = 'Hello world!';
//$z = 'Hello world!';

//echo"<br>";
//echo $x;
//echo "<br>";
//echo $y; 
//echo "<br>";
//echo $z;
//?>

//<?php
//$x = 5985;
//echo "<br>";
//echo "<br>";
//var_dump($x);
//echo "<br>";
//var_dump($z);
//?>

//<?php
//class Car {
//  public $color;
 // public $model;
  //public function __construct($color, $model) {
   // $this->color = $color;
    //$this->model = $model;
  //}
  //public function message() {
   // return "My car is a " . $this->color . " " . $this->model . "!";
  //}
//}

//echo "<br>";
//$myCar = new Car("black", "Volvo");
//echo $myCar -> message();
//echo "<br>";
//$myCar = new Car("red", "Toyota");
//echo $myCar -> message();
//?>

//<?php
//echo "<br>";
//echo strlen("Hello world!"); // outputs 12
//?>

//<?php
//echo "<br>";
//echo str_word_count("Hello world!"); // outputs 2
//?>

//<?php
//echo "<br>";
//echo strrev("Hello world!"); // outputs !dlrow olleH
//?>

//<?php
//echo "<br>";
//echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
//?>

//<?php
//$x = 5985;
//echo "<br>";
//var_dump(is_int($x));

//$x = 59.85;
//echo "<br>";
//var_dump(is_int($x));
//?>

//<?php
// Cast float to int
//echo "<br>";
//$x = 23465.768;
//$int_cast = (int)$x;
//echo $int_cast;

//echo "<br>";

// Cast string to int
//$x = "23465.768";
//$int_cast = (int)$x;
//echo $int_cast;
//?>

//<?php
//echo "<br>";
//echo(pi()); // returns 3.1415926535898
//echo "<br>";
//echo pi(); // returns 3.1415926535898
//?>

//<?php
//echo "<br>";
//echo(min(0, 150, 30, 20, -8, -200));  // returns -200
//echo "<br>";
//echo(max(0, 150, 30, 20, -8, -200));  // returns 150
//?>

//<?php
//echo "<br>";
//echo min(0, 150, 30, 20, -8, -200);  // returns -200
//echo "<br>";
//echo max(0, 150, 30, 20, -8, -200);  // returns 150
//?>

//<?php
//echo "<br>";
//echo(abs(-6.7));  // returns 6.7
//?>

//<?php
//echo "<br>";
//echo(rand(10, 100));
//?>

//<?php
//echo "<br>";
//echo(rand());
//?>

//<?php
//echo "<br>";
//echo(rand());
//?>

//<!DOCTYPE html>
//<html>
//<body>

//<?php
//echo "<br>";
//$txt1 = "Hello";
//$txt2 = " world!";
//echo $txt1 . $txt2;
//echo "<br>";
//echo $txt1 .= $txt2;
//echo "<br>";
//?>  

//</body>
//</html>
//*/

<?php 
// print_r([1,2,3,4]); 

// echo "<br>";
// $name = 'Kiratu';
// $age = 37;
// echo $name;
// echo "<br>";
// var_dump($name);
// echo "<br>";
// //echo $name. ' is '. $age. ' years old'; 
// echo "$name  is  $age ' years old"; 
// //echo $name. ' is '. $age. ' years old'; 
// echo "<br>";

// $numbers = [1,2,3,4];
// $fruits = array('mangoes', 'apples', 'pineapples', 'oranges');
// print_r($numbers);
// echo "<br>";
// print_r($fruits);
// echo "<br>";
// var_dump($numbers);
// echo "<br>";
// echo $fruits[2];
// echo "<br>";
// $numbers = range(1,20);
// print_r($numbers  );

//php string functions

/*
echo "<br>";
echo "<br>";
$string = 'Hello World' ;

echo $string ;
echo "<br>";
echo strlen($string);
echo "<br>";
echo strpos($string, 'o');
echo "<br>";
echo strrpos($string, 'o');

var_dump($_SERVER);
?>
/*

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

*/
?>

<?php 
echo "<br>";

if(isset($_POST['submit'])){
  $name = htmlspecialchars($_POST['name']) ;
  $age = htmlspecialchars($_POST['age']) ;

  echo $name;
}
?>

<?php
//or
?>

<?php 
echo "<br>";

if(isset($_POST['submit'])){
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

  echo $name;
  echo $age; 
}
?>

<?php
setcookie('name','Brad', time() + 86400 * 30); 

if(isset($_COOKIE['name'])){
  echo $_COOKIE['name'];
}

// remoce a cookie, see below 
 //setcookie('name', '', time() - 86400);
 
?> 

<a href="<?php echo $_SERVER ['PHP_SELF']; ?>?name=John&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
<div>
<label for="name">Name: </label>
<input type="text" name="name">
</div>
<div>
<label for="age">Age: </label>
<input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">
</form>


<a href="<?php echo $_SERVER ['PHP_SELF']; ?>?name=John&age=30">Click</a>


<!-- <?php
//session_start();
//if (isset($_SESSION['username'])) {
//echo '<h1> Welcome . $_SESSION ['username'] . '</h1>';
//} else {
//echo '<h1>Welcome Guest</h1>';
//}
//?> -->


<?php 
echo "<br>";

if(isset($_POST['submit'])){
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  
    $password = $_POST['password']; 

  if ($username == 'john' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-crash/extras/dashboard.php');
    } else {
    echo 'Incorrect Login';
    }
}
?>


<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method = "POST">
<div>
<label for="username">Username: </label>
<input type="text" name="username">
</div>
<div>
<label for="password">Password: </label>
<input type="password" name="passowrd">
</div>
<input type="submit" value="Submit" name="submit">
</form>

<?php 
$file = 'php_learn/users.txt';

if(file_exists($file)){
  echo readfile($file);
}



