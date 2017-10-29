<?php
$pid=@$_REQUEST['product_id'];
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
	$sql="DELETE from mycart where product_id='$pid';";
	mysqli_query($conn,$sql);
	echo "Product removed from your cart";
	include("mycart.php");
}
?>