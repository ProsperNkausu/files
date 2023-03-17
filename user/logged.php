<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit();
}

// Display logged-in content here
echo 'Welcome, user ' . $_SESSION['username'];
