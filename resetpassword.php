<?php
session_start();
require_once 'db.php';

$message = "";

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (empty($new_password) || empty($confirm_password)) {
        $message = "<div class='error'>Please fill in all fields.</div>";
    } elseif ($new_password !== $confirm_password) {
        $message = "<div class='error'>New password and confirm password do not match.</div>";
    } else {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
$sql = "UPDATE users SET password = '$hashed_password' WHERE username = '$username'";
        if ($conn->query($sql) === TRUE) {
            $message = "<div class='result'>Password has been successfully reset.</div>";
        } else {
            $message = "<div class='error'>Error updating password: " . $conn->error . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reset Password</title>
    <link rel="stylesheet" href="registration.css" />
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>
        <?php echo $message; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" required />
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm New Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required />
            </div>
            <div class="form-group-full">
                <button type="submit" class="submit-btn">Reset Password</button>
            </div>
        </form>
        <div style="margin-top: 20px;">
            <a href="login.php" class="submit-btn" style="display: inline-block; text-align: center; text-decoration: none;">Back to Login</a>
        </div>
    </div>
</body>
</html>
