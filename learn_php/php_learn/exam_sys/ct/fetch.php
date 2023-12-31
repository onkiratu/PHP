<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "school";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all students
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Age: " . $row["age"]. " - Grade Level: " . $row["grade_level"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
