<?php

// Connect to MySQL database
$servername = "localhost";
$username = "1415";
$password = "1415";
$dbname = "exams_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Authenticate the user
// if (!isset($_SESSION['id'])) {
//     // If the student ID is not set in the session, redirect to the login page
//     header('Location: loginform.php');
//     exit();
// } else {
//     // If the student ID is set in the session, fetch data for the student
//     $id = $_SESSION['id'];
//     echo "Session ID: " . $_SESSION['id'] . "<br>";
//     echo "SQL query: " . $sql . "<br>";
// }

// Fetch data from students table
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {

    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Total: " . $row["total"]. " - Grade: " . $row["overall_grade"]. "<br>";
    }
} else {
    echo "No results found";
}

// Close database connection
mysqli_close($conn);

?>
