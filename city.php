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
$sql = "CREATE TABLE Division(
ID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
City VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Division created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO Division (City)
VALUES ('Dhaka');";
$sql .= "INSERT INTO Division (City)
VALUES ('Chotttogram');";
$sql .= "INSERT INTO Division (City)
VALUES ('Sylhet');";
$sql = "INSERT INTO Division (City)
VALUES ('Khulna');";
$sql .= "INSERT INTO Division (City)
VALUES ('Rajshahi');";
$sql .= "INSERT INTO Division (City)
VALUES ('Barishal');";
$sql .= "INSERT INTO Division (City)
VALUES ('Rangpur');";
$sql .= "INSERT INTO Division (City)
VALUES ('Mymensingh');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>