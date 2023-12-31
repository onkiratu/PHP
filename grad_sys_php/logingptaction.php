<?php
// Start the session
session_start();

// Connect to the database
$servername = "localhost";
$username = "sc/001";
$password = "sc001@";
$dbname = "exams_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Authenticate the user
if (!isset($_SESSION['id'])) {
    // If the student ID is not set in the session, redirect to the login page
    header('Location: loginform.php');
    exit();
} else {
    // If the student ID is set in the session, fetch data for the student
    $id = $_SESSION['id'];
    echo "Session ID: " . $_SESSION['id'] . "<br>";
    echo "SQL query: " . $sql . "<br>";

    $sql = "SELECT * FROM students WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Display the data for the student
        $row = $result->fetch_assoc();
        echo "Student ID: " . $row["id"] . "<br>";
        echo "Total: " . $row["total"] . "<br>";
        echo "Overall Grade: " . $row["overall_grade"] . "<br>";
        echo "Pass or Fail: " . $row["pass_or_fail"] . "<br>";
    } else {
        echo "No data found for student ID: " . $id;
    }
}

// Close the database connection
$conn->close();
exit();
?>
