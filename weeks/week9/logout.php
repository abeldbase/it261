<?php
// Initialize the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the index.php page after logout
header("location: index.php");
exit; // Ensure that no further code is executed after redirection
?>



