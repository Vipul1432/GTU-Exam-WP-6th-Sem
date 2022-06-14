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

$sql = "CREATE TABLE newDB.Employee (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL, department VARCHAR(20) NOT NULL, designation VARCHAR(20) NOT NULL, reg_date TIMESTAMP)";

if($conn->query($sql)=== TRUE)
{
    echo"Table created successfully<br><br>";
}
else {
    echo"Error creating table : " . $conn->error;
}

$conn->close();

?>