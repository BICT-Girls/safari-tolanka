<?php


session_start();
header('location:login.php');

$con =mysqli_connect('localhost', 'root','');

mysqli_select_db($con,'useraccountnew');

$firstname   = $_POST['firstname'];
$lastname    = $_POST['lastname'];
$email       = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password    = $_POST['password'];


$s = "select * from details where firstname = '$firstname'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "Username already taken";
	# code...
}else{
	$reg = "INSERT INTO details(firstname , lastname , email , phonenumber , password) VALUES('$firstname' , '$lastname' , '$email' , '$phonenumber' , '$password')";
	mysqli_query($con, $reg);

	echo "Registration Successfull";
}

?>