<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recovery</title>
    <link rel="stylesheet" href="recovery2.css">
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
    <h2>Enter Security Code</h2>
    <p> Please check your SMS for a message with your code. Your code is 8 numbers long. </p>
    <div class="button-container">
        <h5>
            We sent your code to:<br>
            (phone no. of the user)
        </h5>
        <input type="text" id="cd" name="cd" placeholder="Enter code" required>
        <br>
        <div class="additional-links">
        <span style="font-size: 13px; font-weight: bold;"><a href="recovery3.php" style="text-decoration: underline; color: black;">Didn't get a code?</a></span>
        </div>
        <input type="cnc" value="Cancel" onclick="window.location.href='login.php';">
        <input type="cont" value="Continue" onclick="window.location.href='recovery3.php';">
    </div>
</form>

</body>
</html>
