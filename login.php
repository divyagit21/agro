<!doctype html>  

<html>  

<head>  

<title>Login</title>  

    <style>  

        body{  

             

     

    background-image:url(back13.jpg)  

    color: palevioletred;  

    font-family: verdana;  

    font-size: 100%  

     

        }  

            h1 {  

    color: indigo;  

    font-family: verdana;  

    font-size: 100%;  

}  

        h3 {  

    color: indigo;  

    font-family: verdana;  

    font-size: 100%;  

}

form{

 text-align:center;

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

    <center><h1 style="color:black;font-size:30px">LOGIN OR REGISTRATION PAGE FOR E-AGROMART</h1></center>  

  <center> <p style="margin-top:120px;color:black"><i><b><a href="register.php" style="color:black;font-size:20px">Register</a> | <a href="login.php" style="color:black;font-size:20px">Login</a></p></b> </i> </center>

<center>

<legend>  

    <fieldset>  

 

<center><h3 style="color:black">Login Form</h3></center>

<form class="a" action="" method="POST">  

Username: <input type="text" name="user"><br /> <br />  

Password: <input type="password" name="pass"><br /><br />    

<input type="submit" value="Login" name="submit" /> <br />  

</form>  

</fieldset>

</legend>  

 

<?php  

if(isset($_POST["submit"])){  

 

if(!empty($_POST['user']) && !empty($_POST['pass'])) {  

    $user=$_POST['user'];  

    $pass=$_POST['pass'];  

 

    $con=mysqli_connect('localhost','root','','mydb') or die(mysql_error());  

    mysqli_select_db($con,'mydb') or die("cannot select DB");  

 

    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  

    $numrows=mysqli_num_rows($query);  

    if($numrows!=0)  

    {  

    header("Location: addandbuy.php");  

    }  


 else {  

    echo "<p style='color:black;font-size:20px'><b>Invalid username or password!</b></p>";

   

    }  

 

} else {  

    echo "<p style='color:black;font-size:20px'><b>All fields are required!</b></p>";  
}  

}  

?>  

   

</center>

</div>

 

</body>  

</html>

 

 

 



 

