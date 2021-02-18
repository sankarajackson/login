<?php
session_start();
?>
<?php
if($_SESSION["names"]) {
?>
<style>
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
} 
	</style>
	
	
	<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><?php echo $_SESSION["names"]; ?>,Welcome to our site </center>
</div>
<?php
}
else echo "<h1>Please login first .</h1>";
?>
<html>
<head>
<head>
 <title>
 </title>
 <style>
 @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");
UL{
list-style-type:none;
margin:0;
padding:15px;
overflow:hidden;
background-color:#30a2bc;
font-family:arial,sans;
padding-left:180px;
}
li{
float:left;
padding-right:0;
text-align:left;
}
li a{
display:block;
font-size:20px;
color:white;
text-align:center;
padding:30px;
padding-left:100px;
text-decoration:none;
border-right-style:30px;
}
li a:hover{
background-color:#11c2db;
border-radius:50px;
}
li a:active{
background-color:pink;}
li a:visited{
background-color:red;}
footer{
display:block;
background-color:#30a2bc;
text-align:center;
margin-top:100%;
padding:20px;
}
.navbar{
overflow:hidden;
}
.navbar{
float:left;
font-size:20px;}
 .dropdown{
 float:left;
 overflow:hidden;
 border-radius:50px;
 }
 .dropdown .dropbtn{
 font-size:20px;
 border:none;
 outline:none;
 color:white;
 margin-top:7px;
 padding:24px 23px;
 background-color:inherit;
 font-family:inherit;
 margin:o;

 }
 .dropdown:hover{
 background-color:red;
 }
 .dropdown-content{
 display:none;
 position:absolute;
 background-color:grey;
 min-width:160px;
 box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
 z-index:1;
 }
 .dropdown-content a{
 float:none;
 color:black;
 padding:12px 16px;
 text-decoration:none;
 display:block;
 text-align:left;
 }
 .dropdown-content a:hover{
 background-color:blue;
 }
 .dropdown:hover .dropdown-content{
 display:block;
 }
 .setting{
 margin-top:80%;
 float:left;
 display:block;
 padding:46px;
 }
 .setting a{
 text-decoration:none;
 margin-bottom:13px;
 color:#30a2bc;
 
 }
 
 </style>
</head>
 <body>
 <UL><div class="navbar">
  <li><a href="menu.php">HOME</a></li>
  <div class="dropdown">
  <button class="dropbtn">MODELS
  <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
  <a href="actors.html">actors models</a>
  <a href="actresses.html">actresses models</a>
  </div>
  </div>
  <li><a href="aboutus.php">ABOUT US</a></li>
  <li><a href="contactus.php">CONTACT US</a></li>
  <li><a href="logout.php">LOGIN</a></li>
  </div></UL>
<body>

<h1>welcome models</h1>
dfghjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj<br>
ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
ssssssssssssssssssssssssssssssssssssssssssssss
sssssssssssssssssssssssssssssssssssssssssssssssssssssssss

<div class="setting">

<a href="terms.html">TERMS</a><br><br>

<a href="setting.html">SETTING</a><br><br>

<a href="condition.html">CONDITION</a><br><br>

<a href="logout.php">LogOut(<?php echo $_SESSION['names'];?>)</a><br><br>

<a href="login.php">Log into your account</a>
</div>
 </body>
  <footer>&copy 2018-2020,All copyright reserved</footer>
</html>
