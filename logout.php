<?php
session_start();
unset($_SESSION['user_name']);

session_destroy();

echo "Thank you your order has been placed"."<br>";
include('index.php');
//echo "<a href='index.php'/>TO continue shopping click here!!!</a>";
?>