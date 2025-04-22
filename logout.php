<?php
// Start the session
session_start();

// Destroy all session data
session_unset();
session_destroy();

// Redirect to the login page
header("Location: login.php"); // You can change this to wherever you want to redirect after logout
exit();
?>
