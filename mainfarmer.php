<!DOCTYPE html>
<html>
<<body style="border:5px solid black; float:center; padding:50px; background-color:pink;">>
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
$name=$_POST['name'];
$mobile=$_POST['phn'];
$email=$_POST['email'];
$postal=$_POST['postalcode'];
$pname=$_POST['pname'];
$quantity=$_POST['pquantity'];
$price=$_POST['price'];
$address=$_POST['addr'];
if(!empty($name) && !empty($mobile) && !empty($email) && !empty($postal) && !empty($pname) && !empty($quantity) && !empty($price) && !empty($address))
{
$sql = "SELECT pquantity FROM mainproducetable WHERE ppostalcode='$postal'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
			$q2="INSERT INTO mainfarmertable(fname,fmobile,femail,fpostalcode,fproductname,fquantity,fprice,faddress) VALUES('$name','$mobile','$email','$postal','$pname','$quantity','$price','$address')";
			if($conn->query($q2)==TRUE)
			{
				echo "<center><h1>You hav successfully booked your products.</h1></center>.<br>";
				echo "<center><h1>Our team will contact you soon.</h1></center>.<br>";
			}
			else
			{
				echo "connection failed";
			}
			$sq5 = "UPDATE mainproducetable SET pquantity=pquantity+'$quantity' WHERE ppostalcode='$postal'";
			if (mysqli_query($conn, $sq5)) {
				echo "<center><h1>Thank You.</h1></center>";
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