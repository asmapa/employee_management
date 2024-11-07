<?php
$servername = "localhost";
$username = "root";
$password = ""; // Empty password
$dbname = "employee_management"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the email and password from the form submission
$email_address = $_POST['email'];
$password = $_POST['password'];

// Sanitize inputs to prevent SQL injection
$email_address = $conn->real_escape_string($email_address);
$password = $conn->real_escape_string($password);

// Query to check if the email and password exist in the database
$sql = "SELECT * FROM registration WHERE email_address = '$email_address' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, login successful
    echo "Login successful! Welcome!";
    // You can also start a session or redirect to a dashboard page here
    session_start();
    $_SESSION['user_email'] = $email_address;
    header("Location: emp_dashBoard.html"); // Redirect to a dashboard page
    exit();
} else {
    header("Location: login.html?error=1");
    exit();
}

$conn->close();
?>
