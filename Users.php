<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TravelGuide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Users (
ID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(50),
Userame VARCHAR(50) NOT NULL,
Email VARCHAR(50) NOT NULL,
Password VARCHAR(50) NOT NULL,
Phone VARCHAR(15),
Address VARCHAR(100),
Reg_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>