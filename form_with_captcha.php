<html>
<head>
<title>Contact form</title>
<style type="text/css">
.textbox
{
width:210px;
border:1px solid black;
height:25px;
padding:3px;
}
td{
margin:5px;
}
</style>
</head>
<body>
<CENTER>
<div class="form" style="margin-top:50px">
<form method="post" action="submit.php">
Please enter following details<br><br>
<table>
<tr><td>Name</td><td><input class="textbox" type="text" name="name"></td></tr>
<tr><td>Gender</td><td> Male <input type="radio" name="gender" id="male"> Female <input type="radio" name="gender" id="female"></td></tr>
<tr><td>Address</td><td><textarea style="resize:none" class="textbox" rows="2" cols="20"></textarea></td></tr>
<tr><td>Contact Number</td><td><input class="textbox" type="text" name="number"></td></tr>
<tr><td><img src="captcha.php"></td><td><input class="textbox" type="text" name="code"></td></tr>
<tr><td><input type="submit" value="submit"></td><td><input type="reset" value="reset"></td></tr>
</table>
</form>
</div>
</CENTER>
</body>
</html>