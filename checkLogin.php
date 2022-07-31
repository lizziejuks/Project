<?php
session_start();
include("config.php");
$username  = $_POST['username'];
$password  = $_POST['password'];


$selectLoginQuery = "select * from mstr_login where username = '".$username."' and password = '".$password."' ";
 
$rs = mysqli_query($conn, $selectLoginQuery) or die(mysqli_error());
$c=mysqli_num_rows($rs);
$row = mysqli_fetch_array($rs);
if($c==1)
{
	$_SESSION['username'] = $username;
	$_SESSION['type'] = $row[type];	
	header("location:home.php?msg=Logged in Successfully!");
}
else
{
	header("location:login.php?msg=Sorry!...Invalid User");
}
?>