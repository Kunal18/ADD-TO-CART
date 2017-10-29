<html>
<head><title>online_pay.php</title></head>
<body style="background: url('uploads/12.jpg');background-repeat: no-repeat;background-size:cover; ">
<h1 style="text-align:center;color:red">WELCOME TO MY BANK PAYMENT GATEWAY</h1>
<form action="pay.php" method="POST">
Card Type<select name="ctype" id="ctype">
<option value="">Select</option>
<option value="Credit Card">Credit Card</option>
<option value="Debit Card">Debit Card</option>
</select><br><br>
Enter Card Number<input type="text" id="cno" name="cno"><br><br>
Enter Cardholder`s Name<input type="text" id="chname" name="chname"><br><br>
Enter Expiry Date<select name="edate" id="edate">
<option value="">Select</option>
<option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>
<select name="edate" id="edate">
<option value="Select">Select</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
</select><br><br>
Enter CVV Number<input type="text" id="cvv" name="cvv"><br><br>
Enter Captcha Code<input type="text" id="captcha" name="captcha"><br><img src="captcha.php"><br><br>
Pay Now<input type="submit" value="Pay Now">
</form>
</body>
</html>
