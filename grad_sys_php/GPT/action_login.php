<?php
//1
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
?>


<?php
//2
// Start the session
session_start();

// Check if the login form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to the database
    $servername = "localhost";
    $username = "yourusername";
    $password = "yourpassword";
    $dbname = "yourdatabasename";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the submitted student ID and password
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];

    // Check if the student ID and password are correct
    $sql = "SELECT * FROM students WHERE id = $student_id AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // If the student ID and password are correct, set the student ID in the session
        $_SESSION['student_id'] = $student_id;
    }
}
?>

<?php
//3
// <!DOCTYPE html>
// <html>
// <head>
// 	<title>Login</title>
// </head>
// <body>
// 	<h2>Login</h2>
// 	<form method="post" action="login.php">
// 		<label for="student_id">Student ID:</label>
// 		<input type="text" id="student_id" name="student_id"><br><br>
// 		<label for="password">Password:</label>
// 		<input type="password" id="password" name="password"><br><br>
// 		<input type="submit" value="Login">
// 	</form>
// </body>
// </html>

?>
