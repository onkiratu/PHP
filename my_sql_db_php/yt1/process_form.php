<?php
//print_r($_POST);

$name = $_POST["name"];
$message = $_POST["message"];

//$priority = $_POST["priority"];  changed to filter input type int  
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);

//$type = $_POST["type"];
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);

//$terms = $_POST["type"];  changed to filter input type boolean
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOLEAN);

if(!$terms){
    die("Terms must be acccepted.");
}

if (isset($_POST["name"])) {
    $name = $_POST["name"];

} else {
    $name = ""; // or whatever default value you want to use
}

if (isset($_POST["message"])) {
    $message = $_POST["message"];
} else {
    $message = ""; // or whatever default value you want to use
}


$host = "localhost";
$dbname = "message_db";
$username = "root";
$password ="";

$conn = mysqli_connect(
    hostname: $host, 
    username: $username,
    database: $dbname,
    password: $password);

    if(mysqli_connect_errno()){
        die("Connection error:".mysqli_connect_error());
    }

$sql = "INSERT INTO message(name, body, priority, type)
        VALUES (?,?,?,?)"; 

$stmt = mysqli_stmt_init($conn); 



        if(!mysqli_stmt_prepare($stmt, $sql)) {
            die(mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "ssii",
                                $name,
                                $message,
                                $priority,
                                $type);

        mysqli_stmt_execute($stmt); 

    echo "Record saved."; 

    //echo "Conection Successful"; 
    //var_dump($name, $message, $priority, $type, $terms);

?>