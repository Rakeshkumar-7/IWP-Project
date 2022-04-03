<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - User</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="./signup.css">
    <link rel="stylesheet" href="../nav.css">
</head>
<body>
    <nav class="navbar">
        <div class="title"><a class="black" href="../index.php">⬅ Go Back</a></div>
    </nav>

    <div class="form">
        <h1 class="title">Sign Up as Gym Trainer</h1>
        <form action="" method="post">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required>
            <label for="age">Age: </label>
            <input type="number" name="age" min="14" step="1" id="age" required>
            <label for="experience">Experience(in years) - Min. is 1 yr: </label>
            <input type="number" name="experience" min="1" step="1" id="experience" required>
            <label for="identity">Upload Identity proof: </label>
            <input type="file" name="identity" id="identity" required>
            <button class="btn-primary btn-center">Sign Up</button>
        </form>
    </div>
</body>
</html>