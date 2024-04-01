<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Login Form -->
    <div class="login-form">
        <h2>Login</h2>
        <form id="login-form" action="login_1.php" method="post">
            <div class="form-content">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-content">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-content">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
