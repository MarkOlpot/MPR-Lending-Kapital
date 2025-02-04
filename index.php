<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">

    <!-- SweetAlert2 -->
     <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <title>Log-in</title>
</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <img src="images/logo2.png" class="logo">
        </div>
        <div class="form-container">
        <h1>Log-in</h1>
        <form action="" method="post" class="login-form">
            <label for="email" class="strong">Email</label>
            <br>
            <input type="text" name="email" id="email" placeholder="Please enter your email" required><br><br>
            <label for="password" class="strong">Password</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Please enter your password" required>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <p>Don't have an account? <a href="#">Signup!</a></p>
            <input type="submit" value="Log-in">
        </div>
        </form>
    </div>
</body>
</html>