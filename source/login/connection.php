<?php
$dsn = "mysql:dbname=geschenkportal;host=localhost";
$username = "root";
$password = "";

$con = new PDO($dsn, $username, $password);

if (!$con) {
    echo "Connection Failed";
}
?>
