<?php
$hostname = "localhost";
$username = "developer";
$password = "password123";

$dbname = "emply";
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// // echo 'Connected successfully';
// mysqli_close($conn);
?>