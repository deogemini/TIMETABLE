<?php
$server="localhost";
$user="root";
$password="";
$database="registration";

$connect= @mysqli_connect($server, $user, $password, $database);
if(!$connect){
	die('Fail to connect'. msqli_connect_error());
}

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
	// username and password sent from form
	$reg_no=$_POST['text'];
	$pword=$_POST['password'];

	$sql="SELECT reg_no FROM timetable WHERE reg_no='$reg_no' and password ='$pword'";
	$result=mysqli_query($connect,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	$count=mysqli_num_rows($result);
	// if result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		$_SESSION['login_user']=$regno;

		header("location: home-03.html");
		echo"you are supposed to fill all the fields";

	}
	else{
		echo"your login number or password is invalid";
	}
}
?>