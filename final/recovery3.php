<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recovery</title>
    <link rel="stylesheet" href="recovery3.css">
</head>
<body>
    <div class="background-container">
        <img src="clouds.png" alt="Background Image" class="clouds-image">
        <img src="plane.png" alt="Plane Image" class="plane-image">
        <div class="paragraphs">
            <p class ="big">Secure &</p>
            <p class ="big">Restore</p>
            <p class ="small">fast. secure, simple</p>
        </div>
    </div>
    <form action="forgot_password.php" method="post">
    <h2>We'll send a code to your email</h2>
    <p> 
        we can send a login code to <br>
        (email of the user)
    </p>
    <div class="button-container">
    <input type="text" id="cd" name="cd" placeholder="Enter code" required>
    <br>
    <div class="additional-links">
        <span style="font-size: 13px; font-weight: bold;"><a href="recovery3.php" style="text-decoration: underline; color: black;">Didn't get a code?</a></span>
        <span id="nyou" style="font-size: 13px; font-weight: bold;"><a href="forgotpass.php" style="text-decoration: underline; color: black;">Not you?</a></span>
    </div>
    <input type="cnc" value="Cancel" onclick="window.location.href='login.php';">
    <input type="cont" value="Continue" onclick="window.location.href='login.php';">
    <img src="user.png" alt="User Image" class="user-image">
</div>
</form>

</body>
</html>
