<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gen = $_POST['gen'];
$phone = $_POST['phone'];
$email = $_POST['mail'];
$pass = $_POST['pass'];


// database connection

$conn = new mysqli('localhost','root','','sign');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    echo "Error deleting record: " . $conn−>error;
           
}
?>