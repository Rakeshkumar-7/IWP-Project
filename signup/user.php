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
        <h1 class="title">Sign Up for the Gym membership</h1>
        <form action="" method="post">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required>
            <label for="age">Age: </label>
            <input type="number" name="age" min="14" id="age" required>
            <label for="cur_weight">Current weight: </label>
            <input type="number" min="15" name="cur_weight" id="cur_weight" required>
            <label for="target_weight">Target weight: </label>
            <input type="number" name="target_weight" id="target_weight" required>
            <label for="diseases">Diseases(if any): </label>
            <input type="text" name="diseases" id="diseases">
            <button class="btn-primary btn-center">Sign Up</button>
        </form>
    </div>
</body>
</html>