<?php
$login=@$_REQUEST['admin'];
//echo $login."<br>";
$pwd=@$_REQUEST['pwd'];
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
	$sql="SELECT * from admin where name='$login' and pwd='$pwd'";
	$result=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
	//echo $rowcount;
	if($rowcount>0)
	{
			$row=mysqli_fetch_array($result);
			//echo $row['name'].' '.$row['pwd'].'<br>';
			
				echo "Verified admin login";
				header("Location:http://localhost/pickdeal/AddProduct.html");//call addproduct.html
	}		
			else{
				echo "Not verified admin";
				include("admin_login.html");
			}
			
	
}
?>