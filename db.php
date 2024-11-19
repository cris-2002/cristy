<?php
$host = 'localhost';
$user = 'cristy';
$password = 'gocong';
$database = 'crud';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}
?>
