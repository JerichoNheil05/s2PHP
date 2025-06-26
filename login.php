<?php
session_start();
require_once 'db.php';

$message = "";
$username = $_SESSION['username'] ?? '';
$user_info = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $conn->real_escape_string($_POST['username'] ?? '');
    $inputPassword = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    if (!empty($inputUsername) && !empty($inputPassword)) {
$sql = "SELECT * FROM users WHERE username = '$inputUsername'";
        $result = $conn->query($sql);
        if ($result && $result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($inputPassword, $row['password'])) {
                $_SESSION['username'] = $row['username'];
                $username = $row['username'];
                $user_info = $row;
                if ($remember) {
                    setcookie('username', $row['username'], time() + (86400 * 30), "/"); // 30 days
                } else {
                    setcookie('username', '', time() - 3600, "/");
                }
                $message = "<div class='result'>Login successful. Welcome, " . htmlspecialchars($row['username']) . "!</div>";
            } else {
                $message = "<div class='error'>Invalid password.</div>";
            }
        } else {
            $message = "<div class='error'>Username not found.</div>";
        }
    } else {
        $message = "<div class='error'>Please enter username and password.</div>";
    }
} elseif (!empty($username)) {
    // Fetch user info for logged in user
$sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows == 1) {
        $user_info = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Form</title>
    <link rel="stylesheet" href="registration.css" />
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <?php if (!empty($username)) : ?>
            <div class="user-info" style="margin-bottom: 20px;">
                <h3>User Information</h3>
                <?php if ($user_info): ?>
                    <p><strong>First Name:</strong> <?php echo htmlspecialchars($user_info['firstname']); ?></p>
                    <p><strong>Middle Name:</strong> <?php echo htmlspecialchars($user_info['middlename']); ?></p>
                    <p><strong>Last Name:</strong> <?php echo htmlspecialchars($user_info['lastname']); ?></p>
                    <p><strong>Username:</strong> <?php echo htmlspecialchars($user_info['username']); ?></p>
                    <p><strong>Birthday:</strong> <?php echo htmlspecialchars($user_info['birthday']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($user_info['email']); ?></p>
                    <p><strong>Contact:</strong> <?php echo htmlspecialchars($user_info['contact']); ?></p>
                <?php else: ?>
                    <p>No user information available.</p>
                <?php endif; ?>
            </div>
            <div class="form-group-full" style="text-align: center; margin-top: 20px;">
                <a href="resetpassword.php"><button class="submit-btn">Reset Password</button></a>
                <a href="logout.php"><button class="submit-btn">Logout</button></a>
            </div>
        <?php else : ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required value="<?php echo htmlspecialchars($username); ?>" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>
                <div class="form-group-full">
                    <label>
                        <input type="checkbox" name="remember" <?php if (!empty($username)) echo "checked"; ?> />
                        Remember Me
                    </label>
                </div>
                <div class="form-group-full">
                    <button type="submit" class="submit-btn">Login</button>
                </div>
            </form>
        <?php endif; ?>
        <?php echo $message; ?>
    </div>
</body>
</html>
