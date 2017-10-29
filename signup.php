<?php
$login=$_REQUEST['newuser'];
//echo $login."<br>";
$pwd=$_REQUEST['pwd'];
//echo $pwd."<br>";
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
else
{
	echo "Connected successfully";
	$sql="Insert into user(user_name,password) values('$login','$pwd')";
	mysqli_query($conn,$sql);
	echo "ur registerd succesfully";
	header("Location:http://localhost/pickdeal/index.php");
}
?>