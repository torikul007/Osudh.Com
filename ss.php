<?php
$con=mysqli_connect('localhost','root','','sign');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gen = $_POST['gen'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

$sql="insert into signup (fname, lname, gen, phone, mail, pass) values ('$fname','$lname','$gen','$phone','$mail','$pass')";
mysqli_query($con,$sql);
echo "signup done"
?>