<?php

include('../include.php');

$utils = new UtilsClass();
$config = $utils->getFullConfig();

$dsn = "mysql:dbname=" . $config['db_name'] . ";host=" . $config['db_host'] . "";
$username = $config['db_user'];
$password = $config['db_password'];

$con = new PDO($dsn, $username, $password);

if (!$con) {
    echo "Connection Failed";
}
?>
