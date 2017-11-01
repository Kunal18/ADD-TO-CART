<!Doctype HTML>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<script src="jquery.js"></script> <script src="js/bootstrap.min.js"></script>
<body style="background: url('uploads/whi.jpg');background-repeat: no-repeat;background-size:cover; text-align: center;">

<div>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 50px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">PICKnDEALS</a>
    </div>

    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li class="active"><a href="mycart.php">MyCart</a></li>
      
    
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Product<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cameras</a></li>
          <li><a href="#">Mobile</a></li>
          <li><a href="#">Accessories</a></li>
        </ul>
      </li>
      <li><a href="#">About us</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
     
    </ul>
  </div>
</nav>


</div>
<div style="margin-top: 100px;">
<?php
$product_id=$_GET['product_id'];
//echo $product_id;
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
	//echo "Connected successfully";
	$sql="SELECT * from cart where product_id='$product_id'; ";
	$result=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
	
	if($rowcount>0)
	{
			$row=mysqli_fetch_array($result);
			
			{
				echo '<form action="addtocart.php" method="post">'.'<br>';
				echo "<input type='hidden' name='product_id' value='".$row['product_id']."'/>";
				echo "Product name:".$row['product_name']."<br>";
				echo "Product type:".$row['product_type']."<br>";
				echo "Brand type:".$row['brand_type']."<br>";
				echo "Product description:".$row['product_desc']."<br>";
				echo "Price:Rs.".$row['cost']."<br>";
				echo "<img src='uploads/".$row['image']."'/>"."<br>";
				echo '<button class="btn btn-success" type="submit" value="Add to cart">'.'ADD TO CART</button>'.'<br>';
				echo '</form>';
				
			}
		
	}
}
?>
</div>
</body>
</head>
</html>
