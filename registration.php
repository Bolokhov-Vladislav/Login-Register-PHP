<?php 
session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from users where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	$er = "<span>Username Already Taken</span>";
	$_SESSION['error'] = $er;
}else{
	$reg = " insert into users(name , pass) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	$suc = "<span>Registration Successful!</span>";
	$_SESSION['success'] = $suc;
}
?>