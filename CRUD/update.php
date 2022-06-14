<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}

$sql = "UPDATE newDB.Employees SET designation = 'Software Developer' WHERE name = 'Vipul Kumar'";

if ($conn->query($sql)=== TRUE) {
    echo"Record Updated Successfully";
} 
else {
    "Error in Updating record : " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>