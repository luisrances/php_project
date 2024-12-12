<?php
// Start session
session_start();

// Log out user and clear cookie
setcookie('user_name', '', time() - 3600, "/"); // Expire the cookie

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

echo "<script>alert('You have been logged out.'); window.location.href = 'index.php';</script>";
?>
