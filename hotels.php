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

sql to create table
$sql = "CREATE TABLE Hotels(
ID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(50) NOT NULL,
City VARCHAR(20) NOT NULL,
Breakfast VARCHAR(5) NOT NULL,
Wifi VARCHAR(5) NOT NULL,
Pool VARCHAR(5) NOT NULL,
Parking VARCHAR(5) NOT NULL,
Restaurant VARCHAR(5) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Division created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Royal Park Residence', 'Dhaka', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Lakeshore Banani', 'Dhaka', 'Yes', 'Yes', 'No', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Dhaka Regency Hotel & Resort', 'Dhaka', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Royal Park Residence', 'Dhaka', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Four Points by Sheraton', 'Dhaka', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Radisson Blu Dhaka Water Garden', 'Dhaka', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Le Meridien Dhaka', 'Dhaka', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('The Westin', 'Dhaka', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('The Peninsula', 'Chittagong', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Foys Lake Resort', 'Chittagong', 'Yes', 'Yes', 'No', 'Yes', 'No');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Rose View Hotel', 'Sylhet', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Britannia Hotel', 'Sylhet', 'Yes', 'Yes', 'No', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Hotel Castle Salam', 'Khulna', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Hotel Green City', 'Rajshahi', 'Yes', 'Yes', 'No', 'Yes', 'Yes');";
$sql .= "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Grand Palace Hotel', 'Rangpur', 'Yes', 'Yes', 'No', 'Yes', 'Yes');";
$sql = "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Hotel Grand Park', 'Barishal', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";
$sql = "INSERT INTO Hotels (Name, City, Breakfast, Wifi, Pool, Parking, Restaurant)
VALUES ('Hotel Le Marian', 'Mymensingh', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>