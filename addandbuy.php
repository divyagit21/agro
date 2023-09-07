<html>
<head>
<title>Add and Buy Products</title>
<style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>
</head>
<body style="border:5px solid black; float:center; padding:50px; background-image: url('addbuybackground.png'); background-repeat: no-repeat; background-size: cover;">
<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<h1 style="color:black">1 . If you are a farmer than click on add products .  </h1>
<h1 style="color:black">2.If you are a customer than click on buy products.</h1>

<a href="addingproducts.php" style="font-size:300%;">Add Products</a><br><br><br>
<a href="http://localhost/category.php" style="font-size:300%;">Buy Products</a><br><br>
<a href="logouts.php" style="font-size:300%;">Logout</a><br>
</center>
</body>
</html>