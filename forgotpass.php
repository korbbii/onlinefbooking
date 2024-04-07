<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgotpass.css">
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
            <p class ="big">Secure &</p>
            <p class ="big">Restore</p>
            <p class ="small">fast. secure, simple</p>
        </div>
    </div>
    <form action="forgot_password.php" method="post">
    <h2>Find your account</h2>
    <p> Please enter your email or mobile number to search for your account. </p>
    <div class="button-container">
        <input type="text" id="email_phone" name="email_phone" placeholder="Email/Phone no." required>
        <input type="cnc" value="Cancel" onclick="window.location.href='login.php';">
        <input type="sr" value="Search" onclick="window.location.href='verify.php';">
    </div>
</form>

</body>
</html>
