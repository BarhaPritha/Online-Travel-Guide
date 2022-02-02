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
$sql = "CREATE TABLE Train(
ID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Train_No INT(3) NOT NULL,
Name VARCHAR(50) NOT NULL,
Departure_Station VARCHAR(50) NOT NULL,
Departure_Time TIME NOT NULL,
Arrival_Station VARCHAR(50) NOT NULL,
Arrival_Time TIME NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Division created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (701, 'Subar na Express', 'Chittagong', '07:00', 'Dhaka', '12:10');";
$sql .= "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (702, 'Subar na Express', 'Dhaka', '15:00', 'Chittagong', '13:20');";
$sql .= "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (709, 'Parabat Express', 'Dhaka', '06:35', 'Sylhet', '21:55');";
$sql .= "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (710, 'Parabat Express', 'Sylhet', '15:00', 'Dhaka', '21:55');";
$sql = "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (719, 'Paharika Express', 'Chittagong', '09:00', 'Sylhet', '7:50');";
$sql .= "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (720, 'Paharika Express', 'Sylhet', '10:15', 'Chittagong', '19:45');";
$sql .= "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (771, 'Rangpur Express', 'Dhaka', '09:00', 'Rangpur', '19:00');";
$sql .= "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (772, 'Rangpur Express', 'Rangpur', '20:00', 'Dhaka', '06:05');";
$sql .= "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (785, 'Bijoy Express', 'Chittagong', '07:20', 'Mymensingh', '15:45');";
$sql .= "INSERT INTO Train (Train_No, Name, Departure_Station, Departure_Time, Arrival_Station, Arrival_Time)
VALUES (786, 'Bijoy Express', 'Mymensingh', '20:00', 'Chittagong', '04:50');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>