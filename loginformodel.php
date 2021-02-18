<?php
session_start();
?>
<?php
//$user=$_POST['us'];
//$pass=$_POST['pas'];
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','abcd') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM registration WHERE email='". $_POST["user"] . "' and password = '". $_POST["pass"]."'");
//$result = mysqli_query($con,"SELECT * FROM sudent WHERE username='$user' and password = '$pass'");
$row=mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["names"] = $row['names'];
}
else echo"Access denied!";
}
if(isset($_SESSION["id"])){
header("Location:indexformodel.php");
}
?>
<html>
<head>
<head>
 <title>
 </title>
 <link rel="stylesheet" href="ldmuhura.css">
</head>
 <body>
 <UL>
  <li><a href="menu.php">HOME</a></li>
  <li><a href="aboutus.php">ABOUT</a></li>
  <li><a href="contactus.php">CONTACT</a></li>
  <li><a href="registermodel.php">REGISTER AS MODEL</a></li>
  <li><a href="book.php">BOOK WITH US</a></li>
  </UL>
<body>
<center>
<form name="" method="POST" action="">
 <fieldset style="width:285px;height:280px;border-radius:13px;margin-top:100px;
transition: .5s;
box-shadow: 0 10px 36px #30a2bc;">
 <legend><h3>Model,Enter Login Details</h3></legend><br>
 Username:<br>
 <input type="text" name="user" placeholder="..Username" title="this is required field" style="border-radius:12px;width:200px;height:25px">
 <br>
 Password:<br>
<input type="password" name="pass" placeholder="..password" title="this is required field" style="border-radius:12px;width:200px;height:25px">
<br><br>
<a href="#forgot" style="text-decoration:none;font-size:12px;">FORGOT YOUR PASSWORD?</a><br><br>
<a href="book.php"style="text-decoration:none;font-size:14px;">DON'T HAVE AN ACCOUNT?</a><br><br>
<input type="submit" name="submit" value="Login" style="border-radius:13px;margin-right:32px;">
<input type="reset" style="border-radius:13px;margin-left:32px;"><br>
</form>
</center>
 </body>
  <footer>&copy 2018-2020,All copyright reserved</footer>
</html>