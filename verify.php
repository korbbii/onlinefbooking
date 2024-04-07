<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="verify.css">
</head>
<body>
    <div class="background-container">
        <img src="clouds.png" alt="Background Image" class="clouds-image">
        <img src="plane.png" alt="Plane Image" class="plane-image">
        <div class="paragraphs">
            <p class="big">Secure &</p>
            <p class="big">Restore</p>
            <p class="small">fast. secure, simple</p>
        </div>
    </div>
    <form action="forgot_password.php" method="post">
        <h2>Reset your password</h2>
        <p> How do you want to get the code to reset your password? </p>
        <div class="radio-container">
            <div>
                <label><input type="radio" name="reset_method" value="email" required onclick="window.location.href='recovery.php';">Send code via email</label>
            </div>
            <br>
            <div>
                <label><input type="radio" name="reset_method" value="phone" onclick="window.location.href='recovery2.php';">Send code via phone number</label>
            </div>
        </div>
        <input type="cnc" value="Cancel" onclick="window.location.href='login.php';">
        <input type="cont" value="Continue" onclick="window.location.href='recovery.php';">
    </form>
</body>
</html>
