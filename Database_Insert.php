<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}

$sql = "CREATE DATABASE newDB";

if($conn ->query($sql)=== TRUE)
{
    echo "Database created successfully <br><br>";
}
else {
    echo"Error creating database : " . $conn->error;
}

$sql = "CREATE TABLE newDB.User (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, user_name VARCHAR(15) NOT NULL, address VARCHAR(100) NOT NULL, DOB DATE NOT NULL, age INT NOT NULL, pancard VARCHAR(9) NOT NULL, gender VARCHAR(6) NOT NULL, reg_date TIMESTAMP)";

if($conn->query($sql)=== TRUE)
{
    echo"Table created successfully<br><br>";
}
else {
    echo"Error creating table : " . $conn->error;
}

$sql = "INSERT INTO newDB.Users (user_name, address, DOB, age, pancard, gender) VALUES ('Vipul Kumar', 'Marwadi University,Rajkot', '07-07-2001', 'ABCD1234F', 'male'";

if ($conn->query($sql)=== TRUE) {
    echo"New Record Inserted Successfully";
} 
else {
    "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>