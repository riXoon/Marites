<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    // If the user is not logged in, redirect them to the login page
    header("Location: ../marites.php");
    exit();
}

// Clear all session data
session_unset();
session_destroy();

// Prevent caching of the page
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Redirect the user to the login page
header("Location: ../marites.php");
exit();
?>
