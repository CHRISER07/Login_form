<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Hardcoded credentials (Extracted from pcap)
$correct_user = "admin";
$correct_pass = "Test";

if ($username === $correct_user && $password === $correct_pass) {
    echo "<h2>Congratulations! Here is your flag:</h2>";
    echo "<code>FLAG{Wireshark_Capture_Success}</code>";
} else {
    echo "<h2>Incorrect Username or Password</h2>";
}
?>
