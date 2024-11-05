<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "web";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $db";
if ($con->query($sql) === TRUE) {
    
} else {
    echo "Error creating database: " . $con->error . "<br>";
}

// Select the database
$con->select_db($db);

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS registration (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Email VARCHAR(30) NOT NULL UNIQUE,
    Password VARCHAR(50) NOT NULL,
    Mobile VARCHAR(50)
)";

$sql2 = "CREATE TABLE IF NOT EXISTS address_book (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Mobile VARCHAR(30) NOT NULL UNIQUE,
    User_Address VARCHAR(50)
)";



$con->query($sql2);

if ($con->query($sql) === TRUE) {
   
}
elseif($s2 === TRUE){}

else {
    echo "Error creating table: " . $con->error;
}


?>
