<html>
<head><title>index.php</title>
<header>PICKnDEALS</header>
<link rel="stylesheet" href="css/bootstrap.min.css"> 
  <script src="jquery.js"></script> 
  <script src="js/bootstrap.min.js">
  </script>

  <style type="text/css">
  header{
    text-align: center;
    font-size: 30px;
    font-family:  sans-serif;
        color: black;
  }
  body{
    background-color: gainsboro;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}
div div {
  text-align: center;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #111111;
}
  
  #mob{
    float: left;
    
  }
  #cam{
    float:left;
    
  }

  
  </style>
  
</head>
<body style="background: url('uploads/9.jpg');background-repeat: no-repeat;background-size:cover;>
<h1 style="height=400px;width=400px;background-color:gainsboro;text-align:center"><b><i></i><b></style><a href='index.php'></a></h1>
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 50px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PICKnDEALS</a>
    </div>

    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li ><a href="mycart.php">MyCart</a></li>
      
    
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
      <li><a href="admin_login.html"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
      </ul>
  </div>
</nav>


<div class="container-fluid " style="margin-top: 70px;height: auto;margin-left: 100px">
<div class="row">
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
else
{
//echo "Connected successfully"."<br>";
}
$sql="SELECT * from cart";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
$count=0;
if($rowcount>0)
{
  while($count<$rowcount)
  {
  $row=mysqli_fetch_array($result);
//echo "<div style='border:1px solid black;width:40px;height:50px'>";

echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3' style='float:left; margin:2px;'>";
echo "<img src='uploads/".$row['image']."'/>";
echo "<div style='text-align:center;'>";
echo "<a href='desc.php?product_id=".$row['product_id']."'/>";
echo $row['product_name']."</div>";
echo "</a>";
echo "</div>";
//echo "<br>";
$count++;
}
}
/*if(isset($_SESSION['user_name']))
{
  echo "<a href='mycart.php'>"."MyCart"."</a>";
}
*/
?>
  
</div>
</div>



</body>
</html>