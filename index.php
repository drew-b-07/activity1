<?php
    include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form || Mac</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <div class="form-container">
    <h1>SIGN IN</h1>
        <div class="signin-container">
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
            <input type="email" name="email" placeholder="Enter Your Email" required> <br>
            <input type="password" name="password" placeholder="Enter Your Password" required> <br>
            <button type="submit" name="btn-signin">SIGN IN</button>
        </form>
        </div>
        <h1>REGISTRATION</h1>
        <div class="signup-container">
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
            <input type="text" name="username" placeholder="Enter Your Username" required> <br> 
            <input type="email" name="email" placeholder="Enter Your Email" required> <br>
            <input type="password" name="password" placeholder="Enter Your Password" required> <br>
            <button type="submit" name="btn-signup">SIGN UP</button>
        </form>
        </div>
    </div>
</body>
</html>