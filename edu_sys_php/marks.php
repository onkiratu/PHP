<?php
// Assume $student_id is the ID of the currently logged-in student
$servername = "localhost";
$username = "sc/001";
$password = "sc001@";
$dbname = "exams_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT * FROM `students` WHERE `id` = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

// Print the results
while ($row = $result->fetch_assoc()) {
    echo "Total: " . $row["total"] . ", Pass or Fail: " . $row["pass_or_fail"] . "<br>";
}

// Close the database connection
$stmt->close();
$conn->close();
?>
