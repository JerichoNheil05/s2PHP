<?php
session_start();
// Clear the login cookies
setcookie('username', '', time() - 3600, "/");
setcookie('password', '', time() - 3600, "/");

// Destroy the session
session_destroy();

// Redirect to index.php
header("Location: index.php");
exit();
