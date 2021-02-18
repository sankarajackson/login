<?php
session_start();
?>
<?php
//$user=$_POST['us'];
//$pass=$_POST['pas'];
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','abcd') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM booker WHERE email='". $_POST["user"] . "' and password = '". $_POST["pass"]."'");
//$result = mysqli_query($con,"SELECT * FROM sudent WHERE username='$user' and password = '$pass'");
$row=mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["names"] = $row['names'];
}
else echo"Access denied!";
}
if(isset($_SESSION["id"])){
header("Location:index.php");
}
?>
<html>
<head>
<head>
 <title>
 </title>
 <link rel="stylesheet" href="login.css">
</head>
 <body>
 <div id="navbar">
  <a href="menu.php">HOME</a>
  <a href="aboutus.php">ABOUT</a>
  <a href="contactus.php">CONTACT</a>
  <a href="registermodel.php">REGISTER AS MODEL</a>
  <a href="book.php">BOOK WITH US</a>
  </div>
<body>
<center>
<form name="" method="POST" action="">
 <fieldset style="width:285px;height:300px;border-radius:13px;margin-top:230px;
transition: .5s;
box-shadow: 0 10px 36px #30a2bc;">
 <img src="avatar2.jpg" style="width:100px;height:100px;border-radius:50%;position:absolute;top:160px;margin-left:-48px;"><br>
 <h3>Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user" placeholder="..Username" title="this is required field" style="border-radius:12px;width:200px;height:25px;background:transparent">
 <br>
 Password:<br>
<input type="password" name="pass" placeholder="..password" title="this is required field" style="border-radius:12px;width:200px;height:25px">
<br><br>
<input type="submit" name="submit" value="Login" style="border-radius:13px;width:200px;height:35px;border:2px solid #000080;"><br><br>
<a href="#forgot" style="text-decoration:none;font-size:12px;margin-bottom:10px">FORGOT YOUR PASSWORD?</a><br><br>
<a href="book.php"style="text-decoration:none;font-size:14px;">DON'T HAVE AN ACCOUNT?</a><br><br>
</form>
</center>
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-120px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

 </body>
  <footer>&copy 2018-2020,All copyright reserved</footer>
</html>
<?php
$a=mysql_connect("localhost","root","");
$b=mysql_select_db("abcd");
$c=$_POST['names'];
$d=$_POST['Email'];
$e=$_POST['password'];
$insert=mysql_query("insert into booker values('','$c','$d','$e')");
if($insert)
{

}
else{
	echo"fail";
}
?>