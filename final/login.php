<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        
form {
    width: 300px;
    margin: 150px auto;
    margin-left: 29%;
    background-color: rgba(255, 255, 255, 0.10); /* Set background color to transparent */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    position: relative;
}
    </style>
</head>
<body>
    <div class="background-container">
        <img src="clouds.png" alt="Background Image" class="clouds-image">
        <img src="plane.png" alt="Plane Image" class="plane-image">
        <div class="paragraphs">
            <p class ="big">Fly high.</p>
            <p class ="big">Above the sky</p>
            <p class ="small">comfortable. secure, your way</p>
        </div>
    </div>
    <form action="login_process.php" method="post">
        <h2>Login</h2>
        <input type="text" id="email_phone" name="email_phone" placeholder="Email/Phone no." required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <div class="additional-links">
            <a href="forgotpass.php" id="fp" style="font-size: 12px; font-weight: bold; text-decoration: none; color: black;">Forgot Password?</a>
        </div>
        <br>
        <input type="submit" value="Login" onclick="window.location.href='home.php';">
        <div class="additional-links" style="text-align: center;">
            <br>
            <span style="font-size: 12px; font-weight: bold;">Don't have an account? <a href="signup.php" style="text-decoration: underline; color: black;">Sign up here</a></span>
        </div>
    </form>
</body>
</html>
