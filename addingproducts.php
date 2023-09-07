<html>
</head>
<title>Add Products Details</title>
<style>
body
{
	background-image:url("bacaddingproducts.jpg");
}
</style>
</head>
<body style="background-image:url('th.jpg'); background-size: cover;">
<center>
<h1 style="color:red">Fill the details</h1>
<hr>
<p style="color:red">Note: Before filling the details please check postal code for your products it is available at <a href="category.php">Buy Products</a></p>
<form action="mainfarmer.php" method="POST">
<label>Full Name:</label><br>
<input type="text" name="name"><br><br>
<label>Phone Number:</label><br>
<input type="text" name="phn"><br><br>
<label>Email:</label><br>
<input type="email" name="email"><br><br>
<label>Postal Code:</label><br>
<input type="text" name="postalcode"><br><br>
<label>Product Name:</label><br>
<input type="text" name="pname"><br><br>
<label>Product Quantity:</label><br>
<input type="text" name="pquantity"><br><br>
<label>Price:</label><br>
<input type="text" name="price"><br><br>
<label>Current Address:</label><br>
<textarea name="addr" rows="7" cols="25"></textarea><br><br>
<input type="submit" name="submit" value="Submit">
</center>
</form>
</body>
</html>


