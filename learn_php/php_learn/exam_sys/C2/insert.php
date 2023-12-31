<?php
// Connect to the database
$servername = "localhost";
$username = "onk";
$password = "onk_school_db";
$dbname = "school_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert a new student
$name = $_POST["name"];
$age = $_POST["age"];
$grade_level = $_POST["grade_level"];

$sql = "INSERT INTO students (name, age, grade_level) VALUES ('$name', '$age', '$grade_level')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
