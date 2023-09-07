<!DOCTYPE html>
<html>
<body style="background-color:pink; border:5px solid green;">
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
if(isset($_POST['submit']))
{
$postal=$_POST['pos'];
$name=$_POST['name'];
$mobile=$_POST['mob'];
$quantity=$_POST['quan'];
if(!empty($postal) && !empty($name) && !empty($mobile) && !empty($quantity))
{
$sql = "SELECT pquantity FROM addcarttable WHERE postalcode='$postal'";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
		if($row["pquantity"]>$quantity)
		{
			$q2="INSERT INTO addcarttable(name,postalcode,mobile,pquantity) VALUES('$name','$postal','$mobile','$quantity')";
			if($conn->query($q2)==TRUE)
			{
				echo "<center><h1>You hav successfully ordered your products.</h1></center>.<br>";
			}
			else
			{
				echo "connection failed";
			}
		}
		else
		{
			echo "<center><h1>Sorry! we do not have that much quantity. We have only<b> ".$row["pquantity"]." kgs left.</h1></center>";
		}
	}
}
else
{
	echo "<center><h1>Please fill all the details. All are required.</h1></center>";
}
}
mysqli_close($conn);
?>
</center>
</body>
</html>