<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="background-container">
        <img src="clouds.png" alt="Background Image" class="clouds-image">
        <img src="plane.png" alt="Plane Image" class="plane-image">
        <div class="paragraphs">
            <p class ="big">Explore &</p>
            <p class ="big">Experience</p>
            <p class ="small">simple. secure. quick</p>
        </div>
    </div>
    <form action="signup_process.php" method="post">
        <h2>Sign Up</h2>
        <div class="input-group">
            <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
        </div>
        <input type="text" id="email_phone" name="email_phone" placeholder="Email/Phone no." required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" value="Sign Up" onclick="window.location.href='login.php';">
        <div class="additional-links" style="text-align: center;">
    <br>
    <span id ="sup" style="font-size: 12px; font-weight: bold;">Already have an account? <a href="login.php" id="id" style="text-decoration: underline; color: black;">Login here</a></span>
</div>

    </form>
</body>
</html>
