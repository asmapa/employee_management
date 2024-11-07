<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: login.html"); // Redirect to login if not logged in
    exit();
}

$servername = "localhost";
$username = "root";
$password = ""; // or empty if you set no password
$dbname = "employee_management"; // Replace with your actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details based on the email stored in session
$email = $_SESSION['user_email'];
$sql = "SELECT * FROM registration WHERE email_address = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for the user
    $user = $result->fetch_assoc();
    echo "<h2>Welcome, " . htmlspecialchars($user['name']) . "!</h2>";
    echo "<p>Email: " . htmlspecialchars($user['email_address']) . "</p>";
    echo "<p>Phone: " . htmlspecialchars($user['phone']) . "</p>";
    echo "<p>Gender: " . htmlspecialchars($user['gender']) . "</p>";
    echo "<p>Designation: " . htmlspecialchars($user['designation']) . "</p>";
    // Add more fields as necessary
} else {
    echo "<p>No user found.</p>";
}

$conn->close();
?>
