<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'sessionparactical');
$pass = $_POST['password'];
$q ="select * from login where password = '$pass' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num == 1){
  header('location:home.php');
}
else{
	echo "Incorrect Password";
	header('location:index.php');
}
?>