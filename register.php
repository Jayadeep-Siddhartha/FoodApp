<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Connect to the database (No security applied)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // No input validation, allowing SQL Injection & XSS
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Storing passwords in plaintext!

    // Direct SQL query, allowing SQL Injection
    $sql = "INSERT INTO userss (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Account created! <a href='login.php'>Login Now</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
