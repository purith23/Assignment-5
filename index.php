<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form for Assignment5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="form-title">Login Form</h2>
        <form action="login.php" method="post" autocomplete="off">
            <input type="text" name="username" placeholder="Username" autocomplete="off" required>
            <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>