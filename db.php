<?php
$servername = "localhost";
$username = "root";
$password = "kali";
$dbName = "my_database_name";

$link = mysqli_connect($servername, $username, $password);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if (!mysqli_query($link, $sql)) {
    echo "Database creation failed: " . mysqli_error($link);
}

mysqli_select_db($link, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

if (!mysqli_query($link, $sql)) {
    echo "Failed to create Users table: " . mysqli_error($link);
}

mysqli_close($link);
?>