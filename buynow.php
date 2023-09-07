<?php
?>
<html>
<head>
<title>Buy Now</title>
</head>
<body style=" background-image:url('addbuybackground.png'); background-size:cover; background-attachment: fixed;">
<center>
<h1 style="color:red">Fill The Details To Buy Your Produce</h1>
<hr>
<form action="mainproduce.php" method="POST">
<label>Enter Postal code of Produce:</label><br>
<input type="text" name="pos"><br>
<label>Enter your name:</label><br>
<input type="text" name="name"><br>
<label>Enter Mobile Number:</label><br>
<input type="text" name="mob"><br>
<label>Enter quantity:</label><br>
<input type="text" name="quan"><br>
<label>Enter your address:</label><br>
<textarea name="addr" rows="7" cols="25"></textarea><br><br>
<input type="submit" name="submit" value="Click here for Payment">
</form>
</center>
</body>
</html>
