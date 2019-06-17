<?php
if(isset($_POST['submit']))
{
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="registration";

$conn =new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);

$name=$_POST['name'];
$regno=$_POST['regno'];
$email=$_POST['email'];
$pword=$_POST['password'];
$select=$_POST['dropdown']; 
$radio=$_POST['radio'];

//if(empty($name)||empty($regno)||empty($email)||empty($pword)||empty($select)||empty($radio))
//{ 
//	echo "Insert all fields";
//}
  
 // else {
	// for verification
	//$sql="SELECT * FROM timetable WHERE reg_no='$regno'";
	//$result=mysql_query($conn,$sql);
	//$resultAnswer=mysqli_num_rows($result);

//if($resultAnswer>0){exit();l}
//	else{
		
		
		$sql="INSERT INTO timetable(name,reg_no,email,password,course,year)VALUES('$name','$regno','$email','$pword','$select','$radio')";
		$result=mysqli_query($conn,$sql);
		
//	}
//}

}
?>
