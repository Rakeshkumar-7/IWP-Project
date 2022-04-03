<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Gym</title>

    <!-- Importing the css -->
    <link rel="stylesheet" href="./global.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./nav.css">
</head>
<body>
    <nav class="navbar">
        <div class="title"><a class="black" href="./index.php">ABC Gym</a></div>
        <ul class="links">
            <li>
                Login
                <div class="sub-menu">
                    <ul>
                        <li><a href="./login/user.php">User</a></li>
                        <li><a href="./login/trainer.php">Trainer</a></li>
                    </ul>
                </div>
            </li>
            <li>
                Sign Up
                <div class="sub-menu">
                    <ul>
                        <li><a href="./signup/user.php">User</a></li>
                        <li><a href="./signup/trainer.php">Trainer</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./aboutus.php">About Us</a></li>
        </ul>
    </nav>

    <section class="landing">
        <div class="title-box">
            <h1 class="title">ABC Gym</h1>
            <h2 class="sub-title">A Modern Gym</h2>
            <div class="line"></div>
            <a href="./login/user.php" class="btn-primary">User Login</a>
            <a href="./login/trainer.php" class="btn-primary">Trainer Login</a>
            <div class="line"></div>
            <a href="./signup/user.php" class="btn-secondary">User Signup</a>
            <a href="./signup/trainer.php" class="btn-secondary">Trainer Signup</a>
        </div>
    </div>
</body>
</html>