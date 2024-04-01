<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Signup Form -->
<div class="signup-form">
    <h2>Sign Up</h2>
    <form id="signup-form" action="sign_up.php" method="post"> <!-- Updated action attribute -->
        <div class="form-content">
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="form-content">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-content">
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-content">
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
        </div>
        <div class="form-content">
        <button type="submit" name="submit">Sign Up</button>

        </div>
    </form>
</div>


</body>
</html>
