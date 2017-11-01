<!Doctype HTML>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<script src="jquery.js"></script> <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(window).ready(function(){
    $( "#modal1" ).click(function() {
        setTimeout(function() {
            //if ( !$('#myModal').hasClass('in') ) { //Check if the modal is already showing
                $('#myModal').modal('show');
           
        }, 1000); // milliseconds
    });
}); 
</script>
<style type="text/css">
  body {
    padding-left: 11em;
    font-family: respective, "Times New Roman",
          Times, serif;
    color: black;
    background-color:white }
  ul.navbar {
    list-style-type: none;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 2em;
    left: 1em;
    width: 9em }
</style>
<body style="background: url('uploads/whi.jpg');background-repeat: no-repeat;background-size:cover; ">
<nav class="navbar navbar-inverse navbar-fixed-top navbar-collapse" style="margin-bottom: 50px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">PICKnDEALS</a>
    </div>

    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li><a href="mycart.php">MyCart</a></li>
      
    
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Product<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.php">Cameras</a></li>
          <li><a href="index.php">Mobile</a></li>
          <li><a href="index.php">Accessories</a></li>
        </ul>
      </li>
      <li><a href="about.xml">About us</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
  </div>
</nav>













<h2>CLICK FOR OFFERS</h2> <!-- Trigger the modal with a button --> 
          <button type="button" id ="modal1" class="btn btn-info btn-lg"  >LIMITED PERIOD OFFERS!!! </button> 
          <!-- Modal --> <div class="modal fade" id="myModal" role="dialog"> 
          <div class="modal-dialog modal-sm">
           <div class="modal-content"> 
           <div class="modal-header"> 
           <button type="button" class="close" data-dismiss="modal">&times;</button> 
           <h4 class="modal-title">OFFERS HURRY UP!!!!!!!</h4> 
           </div> 
           <div class="modal-body"><p><img src="uploads/sale1.jpg"></p> 
           </div>
            <div class="modal-footer"> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
              </div>
                </div> 
                </div>
                <hr>













</body>
</html>
<?php
//$product_id=$_POST['product_id'];
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
$sql="SELECT * from mycart";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
$count=0;
if($rowcount>0)
{		$list=0;
  while($count<$rowcount)
  {
  $row=mysqli_fetch_array($result);
				//echo "<form action='addtocart.php' method='post'>"."<br>";
				//echo "<input type='hidden' name='product_id' value='".$row['product_id']."'/>";
  			echo "Product name:".$row['product_name']."<br>";
				echo "Product type:".$row['product_type']."<br>";
				echo "Brand type:".$row['brand_type']."<br>";
				echo "Product description:".$row['product_desc']."<br>";
				echo "Price:Rs.".$row['cost']."<br>";
				echo "<img src='uploads/".$row['image']."'/>"."<br>";
				//echo '<input type="submit" value="Add to cart">'.'<br>';
        
        echo "<a href='remove.php?product_id=".$row['product_id']."'/>";
        echo "REMOVE ".$row['product_name']."</div>";
        echo "</a>";
        echo "<hr>";

       // echo "<form action='remove.php' name='form1' method='POST'>"."<br>";
       // echo "<input type='hidden' name='product_id' value='".$row['product_id']."'/>";
       // echo "<input type='submit' value='Remove from cart'>"."<br>";
       // echo "</form>";
  
				//echo '</form>';
$count++;
}

echo "<form action='online_pay.php' name='form2' method='POST'>"."<br>";
echo "<input type='hidden' name='product_id' value='".$row['product_id']."'/>";
echo "<input type='submit' value='Proceed to payment'>"."<br>";
echo "</form>";

}

?>