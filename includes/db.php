<?php

require_once('config.php');

// Establish database connection
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check if connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
