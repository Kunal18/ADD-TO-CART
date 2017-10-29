<?php
$login=$_REQUEST['user'];
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
	$sql="SELECT * from user where user_name='$login' And password='$pwd';";
	$result=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
	//echo $rowcount;
	
			$row=mysqli_fetch_array($result);
			//echo $row['name'].' '.$row['pwd'].'<br>';
			if($rowcount>0)
			{
				echo "Verified user login";
				//echo '<a href="mycart.php">My cart</a>';
				session_start();
				$_SESSION['user_name']=$login;
				header("Location:http://localhost/pickdeal/index.php");
			}
			else{
				echo "If you are a new user PLEASE SIGN UP!"."<br>";
				echo '<a href="signup.html">Click here to signup</a>';
			}
			
}
?>
