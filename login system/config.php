<?php
// session_start();
$conn = mysqli_connect("localhost", "root", "", "music");

// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
