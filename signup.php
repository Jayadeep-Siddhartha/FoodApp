<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="login.css"> <!-- Reusing the same maroon theme -->
</head>
<body>

<div class="login-container">
    <h2>Sign Up</h2>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="password" name="password" placeholder="Enter Password">
        
        <button type="submit" class="login-btn">Sign Up</button>
    </form>
    <a href="login.php" class="signup-link">Already have an account? Login</a>
</div>

<!-- <div class="login-container">
    <h2>Sign Up</h2>
    <form action="register.php" method="POST" onsubmit="return validateSignupForm()">
        <input 
            type="text" 
            name="username" 
            id="username"
            placeholder="Enter Username" 
            pattern="^[a-zA-Z0-9_]{3,15}$" 
            title="3-15 characters. Letters, numbers, underscores only."
            required
        >

        <input 
            type="email" 
            name="email" 
            id="email"
            placeholder="Enter Email" 
            required
        >

        <input 
            type="password" 
            name="password" 
            id="password"
            placeholder="Enter Password" 
            minlength="6" 
            maxlength="20"
            required
        >

        <button type="submit" class="login-btn">Sign Up</button>
    </form>
    <a href="login.php" class="signup-link">Already have an account? Login</a>
</div>

<script>
function validateSignupForm() {
    const username = document.getElementById("username").value;
    const email    = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const usernamePattern = /^[a-zA-Z0-9_]{3,15}$/;

    if (!usernamePattern.test(username)) {
        alert("Username must be 3-15 characters. Use letters, numbers, or underscores only.");
        return false;
    }

    if (password.length < 6 || password.length > 20) {
        alert("Password must be 6-20 characters.");
        return false;
    }

    // (Optional) You can add extra email pattern checks here if needed
    return true;
}
</script> -->


</body>
</html>
