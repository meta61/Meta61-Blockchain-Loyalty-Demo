<?php
// Database configuration
define('DB_SERVER', 'mysql-meta61.mysql.database.azure.com');
define('DB_USERNAME', 'mysql_root');
define('DB_PASSWORD', 'Meta61@#');
define('DB_NAME', 'example');

// Attempt to connect to the database
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>