<?php
session_start();
if($_POST["code"]==$_SESSION['vercode'])
{
	echo "Verification successful";
}
else
{
	echo "Invalid code";
}
?>