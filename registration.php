<?php
session_start();
require_once 'db.php';

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $conn->real_escape_string(trim($_POST["firstname"] ?? ""));
    $middlename = $conn->real_escape_string(trim($_POST["middlename"] ?? ""));
    $lastname = $conn->real_escape_string(trim($_POST["lastname"] ?? ""));
    $username = $conn->real_escape_string(trim($_POST["username"] ?? ""));
    $password = $_POST["password"] ?? "";
    $confirmpassword = $_POST["confirmpassword"] ?? "";
    $birthday = $conn->real_escape_string(trim($_POST["birthday"] ?? ""));
    $email = $conn->real_escape_string(trim($_POST["email"] ?? ""));
    $contact = $conn->real_escape_string(trim($_POST["contact"] ?? ""));

    if ($password !== $confirmpassword) {
        $result = '<div class="error">Password and Confirm Password are not the same.</div>';
    } else {
        // Hash the password before storing
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if username already exists
        $check_sql = "SELECT id FROM users WHERE username = '$username'";
        $check_result = $conn->query($check_sql);
        if ($check_result && $check_result->num_rows > 0) {
            $result = '<div class="error">Username already exists. Please choose another.</div>';
        } else {
            $sql = "INSERT INTO users (firstname, middlename, lastname, username, password, birthday, email, contact) VALUES ('$firstname', '$middlename', '$lastname', '$username', '$hashed_password', '$birthday', '$email', '$contact')";
            if ($conn->query($sql) === TRUE) {
                $result = '<div class="result"><h3>Successfully Registered</h3></div>';
            } else {
                $result = '<div class="error">Error: ' . $conn->error . '</div>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration.css" />
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <?php echo $result; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <input type="text" id="firstname" name="firstname" required placeholder="First Name" />
            </div>
            <div class="form-group">
                <input type="text" id="middlename" name="middlename" placeholder="Middle Name" />
            </div>
            <div class="form-group">
                <input type="text" id="lastname" name="lastname" required placeholder="Last Name" />
            </div>
            <div class="form-group">
                <input type="text" id="username" name="username" required placeholder="Username" />
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required placeholder="Password" />
            </div>
            <div class="form-group">
                <input type="password" id="confirmpassword" name="confirmpassword" required placeholder="Confirm Password" />
            </div>
            <div class="form-group">
                <input type="date" id="birthday" name="birthday" required placeholder="Birthday" />
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" required placeholder="Email" />
            </div>
            <div class="form-group">
                <input type="tel" id="contact" name="contact" required pattern="[0-9]{10,15}" title="Enter a valid contact number" placeholder="Contact Number" />
            </div>
            <div class="form-group-full" style="display:flex; flex-direction: column; gap: 10px;">
                <a href="login.php" class="submit-btn" style="background-color: #28a745; padding: 12px 20px; text-align: center; text-decoration: none; color: white; border-radius: 6px; font-weight: bold; border: 1px solid #ffffff;">Proceed to Login</a>
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
