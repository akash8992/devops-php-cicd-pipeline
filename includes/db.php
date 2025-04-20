<?php
$host = 'mysql'; // this must match the service name in docker-compose
$user = 'todo_user';
$password = 'todo_pass';
$database = 'todo_list';

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

