<?php
session_start();
unset($_SESSION['username']);

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: ../index.php");
exit();

?>