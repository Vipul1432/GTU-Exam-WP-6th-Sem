<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}

$sql = "DELETE FROM newDB.Employees WHERE name = 'Vipul Kumar'";

if ($conn->query($sql)=== TRUE) {
    echo"Record Delete Successfully";
} 
else {
    "Error in deleting record : " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>