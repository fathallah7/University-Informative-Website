<?php

$host = 'localhost';
$user = 'abdullah';
$password = '1234';
$db = 'university';
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    echo "Failed to connect DB" . $conn->connect_error;
}
