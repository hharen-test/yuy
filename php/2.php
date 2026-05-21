<?php
// SQL Injection — user input concatenated directly into query
$username = $_GET['username'];
$query = "SELECT * FROM users WHERE username = '" . $username . "'";
$result = mysqli_query($conn, $query);

// trigger an AI findings scan
// trigger again
// and again
// another PR merged
// setting enabled
?>
