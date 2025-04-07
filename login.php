<?php

if (isset($_GET['PHPSESSID'])) {
    session_id($_GET['PHPSESSID']);
}
// echo "Current Session ID: " . session_id();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnerable Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="check_login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <a href="signup.php" class="signup-link">Don't have an account? Signup</a>
</div>

<!-- <div class="login-container">
    <h2>Login</h2>
    <form action="check_login.php" method="POST" onsubmit="return validateForm()">
        <input 
            type="text" 
            name="username" 
            id="username"
            placeholder="Username" 
            pattern="^[a-zA-Z0-9_]{3,15}$" 
            title="Username must be 3-15 characters. Letters, numbers, underscores only."
            required
        >

        <input 
            type="password" 
            name="password" 
            id="password"
            placeholder="Password" 
            minlength="6" 
            maxlength="20"
            required
        >

        <button type="submit">Login</button>
    </form>

    <a href="signup.php" class="signup-link">Don't have an account? Signup</a>
</div>

<script>
function validateForm() {
    const username = document.getElementById("username").value;
    const pattern = /^[a-zA-Z0-9_]{3,15}$/;

    if (!pattern.test(username)) {
        alert("Invalid username! Use 3-15 letters, numbers, or underscores only.");
        return false;
    }

    return true;
}
</script> -->

</body>
</html>
