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
$sql = "CREATE TABLE Package(
ID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(50) NOT NULL,
Division VARCHAR(20) NOT NULL,
Days INT(2) NOT NULL,
Cost Double NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Division created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO Package (Name, Division, Days, Cost)
VALUES ('Coxs Bazar Tour', 'Chittagong', 4, 25000);";
$sql .= "INSERT INTO Package (Name, Division, Days, Cost)
VALUES ('Badarban Tour', 'Chittagong', 3, 20000);";
$sql .= "INSERT INTO Package (Name, Division, Days, Cost)
VALUES ('Kuakata Beach Tour', 'Barishal', 3, 15000);";
$sql .= "INSERT INTO Package (Name, Division, Days, Cost)
VALUES ('Sylhet Tour', 'Sylhet', 4, 20000);";
$sql .= "INSERT INTO Package (Name, Division, Days, Cost)
VALUES ('Sreemangal Tour', 'Sylhet', 2, 10000);";
$sql .= "INSERT INTO Package (Name, Division, Days, Cost)
VALUES ('Sundarban Tour', 'Khulna', 2, 10000);";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>