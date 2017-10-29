<?php
session_start();
$array=array(5239512517733016);
if($_POST["captcha"]==$_SESSION['vercode'])
{
	echo "Verification successful"."<br>";
	//echo $_POST['cno'];
	if($_POST['cno']!=$array['0'])
	{
		echo "Transaction is successful.Thanks for payment"."<br>";
		//echo "<a href='logout.php'>Logout</a>";
		header("Location:http://localhost/pickdeal/logout.php");

	}
	else
	{
		echo "Invalid Card Number";
	}
}	
else
{
	echo "Invalid code";
}
?>