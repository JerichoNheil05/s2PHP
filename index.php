<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link rel="stylesheet" href="registration.css" />
</head>
<body>
    <div class="container" style="text-align: center;">
        <h2>Welcome</h2>
        <div style="margin: 20px;">
            <?php if (isset($_SESSION['username'])): ?>
                <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
                <a href="logout.php"><button class="submit-btn">Logout</button></a>
            <?php else: ?>
                <a href="login.php"><button class="submit-btn">Login</button></a>
                <a href="registration.php"><button class="submit-btn">Register</button></a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
