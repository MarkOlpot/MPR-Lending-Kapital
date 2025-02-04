<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="styles/signup.css">
    <!-- Google Fonts -->
     <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    <title>Sign-Up</title>
</head>
<body>

    <div class="signup-container">
        <div class="signup-logo-container">
            <img src="images/logo2.png" alt="">
        </div>
        <div class="signup-form-container">
            <h1 class="signup-header">Sign-up</h1>
            <form action="" method="post" class="signup-form">
                <label for="name" class="strong">Full Name</label>
                <br>
                <input type="text" name="name" id="name" placeholder="Please enter your name" required>
                <br>
                <label for="email" class="strong">Email</label>
                <br>
                <input type="text" name="email" id="email" placeholder="Please enter your email" required>
                <br>
                <label for="password" class="strong">Password</label>
                <br>
                <input type="password" name="password" id="password" placeholder="Please enter your password" required>
                <br>
                <label for="confirm-password" class="strong">Confirm Password</label>
                <br>
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Please re-enter your password" required>
                <br>
                <div class="signup-button-container">
                <input type="submit" value="Sign-up" class="signup-button">
                </div>
                <div class="login-container">
                <p>Already have an account? <a href="index.php">Log-in</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>