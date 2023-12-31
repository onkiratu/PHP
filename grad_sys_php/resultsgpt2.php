<?php
// Start the session
session_start();

// Connect to the database
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Authenticate the user
if (!isset($_SESSION['student_id'])) {
    // If the student ID is not set in the session, redirect to the login page
    header('Location: login.php');
    exit();
} else {
    // If the student ID is set in the session, fetch data for the student
    $student_id = $_SESSION['student_id'];
    $sql = "SELECT * FROM students WHERE id = $student_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Display the data for the student
        $row = $result->fetch_assoc();
        echo "Student ID: " . $row["id"] . "<br>";
        echo "Student Name: " . $row["name"] . "<br>";
        echo "Student Age: " . $row["age"] . "<br>";
        echo "Student Gender: " . $row["gender"] . "<br>";
    } else {
        echo "No data found for student ID: " . $student_id;
    }
}

// Close the database connection
$conn->close();


/*In this code, the session is started using the session_start() function. 
Then, the user is authenticated by checking if their student ID is set in the session. 
If the student ID is not set, the code redirects the user to the login page 
(which you would need to create separately). If the student ID is set, 
the code fetches data for that student ID from the "students" table and displays it. 
The code assumes that the student table has columns named "id", "name", "age", and "gender", 
so if your table has different column names, update the code accordingly. */

?>
