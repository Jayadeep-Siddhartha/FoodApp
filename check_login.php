<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];

// 🚨 VULNERABLE SQL QUERY! (Easily hackable)
$sql = "SELECT * FROM userss WHERE username='$user' AND password='$pass'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $user;

    // Here, capture and print the results
    echo "<h3>User Details</h3>";
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row['username'] . "<br>";
        echo "Password: " . $row['password'] . "<br>";
        // Display other user data here, such as email or phone if applicable
    }

    // Redirect to main.php
    echo "<script>
    alert('Login Successful! Welcome " . $_SESSION['username'] . " Redirecting...');
    setTimeout(function() {
        window.location='main.php';
    }, 1000);
</script>";


} else {
    echo "<script>alert('Invalid credentials! Try again.'); window.location='login.php';</script>";
}
?>
