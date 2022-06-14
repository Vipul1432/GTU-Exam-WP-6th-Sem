<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}

$sql = "INSERT INTO newDB.Employees (name, department, designation) VALUES ('Vipul Kuamr', 'Computer Engineering', 'Web Developer')";

if ($conn->query($sql)=== TRUE) {
    echo"New Record Inserted Successfully";
} 
else {
    "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>