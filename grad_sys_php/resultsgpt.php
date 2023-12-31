<?php

// Connect to MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from students table
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {

    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"]. " - Age: " . $row["age"]. " - Grade: " . $row["grade"]. "<br>";
    }
} else {
    echo "No results found";
}

// Close database connection
mysqli_close($conn);

?>
