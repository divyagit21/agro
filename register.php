<!doctype html>  

<html>  

<head>  

<title>Register</title>  

    <style>  

        body{  

   

    background-color: azure ;  

    color: palevioletred;  

    font-family: verdana;  

    font-size: 100%  

     

        }  

            h1 {  

    color: indigo;  

    font-family: verdana;  

    font-size: 100%;  

}  

         h2 {  

    color: indigo;  

    font-family: verdana;  

    font-size: 100%;  

         }

         fieldset{

 line-height:2.8;

 width:450px;

 background color: #008000;

 border-radius: 25px;

 box-shadow: 0 0 10px #666;

 margin-top:30px;

}

.design{

 background-image:url("back13.jpg");

 background-repeat:no-repeat;

 background-position:center;

 background-size:cover;

 position:relative;

 overflow-x:hidden;

 height:100vh;

 width:100%

}

.a{

margin-top:20px;

}

</style>  

</head>  

<body>  

<div class="design">
    <center><h1 style="color:black;padding-bottom:50px;font-size:30px">LOGIN OR REGISTRATION FOR E-AGROMART</h1></center>  

   <center><i><b><p style="margin-top:100px;color:black"><a href="register.php" style="color:black;font-size:20px">Register</a> | <a href="login.php" style="color:black;font-size:20px">Login</a></b></i></p> </center>
     
<form action="" method="POST">  

<center>

    <legend>  

    <fieldset>  

        <center><h2 style="color:black">Registration Form</h2></center>  
Name:     <input type="text" name="name"><br />

Username: <input type="text" name="user"><br />  

Password: <input type="password" name="pass"><br />  
Mobile:   <input type="text" name="phn"><br />
Address: <textarea name="addr" rows="5" cols="50"></textarea><br />

<input type="submit" value="Register" name="submit" />  

 

             

        </fieldset>  

        </legend>  

 

  <?php  

if(isset($_POST["submit"])){  

if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
	
	$name=$_POST['name'];
    $user=$_POST['user'];  

    $pass=$_POST['pass'];  
	$mobile=$_POST['phn'];
	$address=$_POST['addr'];

    $con=mysqli_connect('localhost','root','','mydb') or die(mysql_error());  

    mysqli_select_db($con,'mydb') or die("cannot select DB");  

 

    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");  

    $numrows=mysqli_num_rows($query);  

    if($numrows==0)  

    {  

    $sql="INSERT INTO login(name,username,password,mobile,address) VALUES('$name','$user','$pass','$mobile','$address')";  
    $result=mysqli_query($con,$sql);  

        if($result){  

    echo "<p style='color:black;font-size:20px'><b>Account Successfully Created</b></p>";

    } else {  

    echo "<p style='color:black;font-size:20px'><b>Failure!";  
    }  

    } else {  

    echo "<p style='color:black;font-size:20px'><b>That username already exists! Please try again with another.</b></p>";  
	} 

} else {  

    echo "<p style='color:black;font-size:20px'><b>All fields are required!</b></p>";

   

}  

}  

?>  

 </center>

</form>  

 

</div>

 

</body>  

</html>