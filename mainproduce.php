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
$address=$_POST['addr'];
if(!empty($postal) && !empty($name) && !empty($mobile) && !empty($quantity) && !empty($address))
{
$sql = "SELECT pquantity FROM mainproducetable WHERE ppostalcode='$postal'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
		if($row["pquantity"]>$quantity)
		{
			$q2="INSERT INTO maincustomertable(postalcode,name,mobile,quantity,address) VALUES('$postal','$name','$mobile','$quantity','$address')";
			if($conn->query($q2)==TRUE)
			{
				echo "<center><h1>You hav successfully ordered your products.</h1></center>.<br>";
			}
			else
			{
				echo "connection failed";
			}
			$sq5 = "UPDATE mainproducetable SET pquantity=pquantity-'$quantity' WHERE ppostalcode='$postal'";
			if (mysqli_query($conn, $sq5)) {
				echo "<center><h1>Thank You.</h1></center>";
			}
		}
		else
		{
			echo "<center><h1>Sorry! we do not have that much quantity. We have only<b> ".$row["pquantity"]." kgs left.</h1></center>";
		}
	}
} else {
    echo "<center><h1>Please enter valid postalcode of your products.</h1></center>";
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