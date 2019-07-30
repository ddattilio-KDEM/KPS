<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","devscott","DevDom@#01");
mysql_select_db("EOP",$conn);
$result = mysql_query("SELECT * FROM USERS WHERE user_name ='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_id"] = $row[user_id];
$_SESSION["user_name"] = $row[user_name];

} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_id"])) {
header("Location:forms.php");
}
?>
<html>
<head>
<title>Please login</title>
<link href="login.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

<p></p>

<section id="loginBox">
<center>
<h3>Kansas EOP Assessment Tool Login</h3>
</center>
&nbsp;

<div id="login">
<div id="triangle"></div>

<center>
<form name="frmUser" method="post" action="">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<br />
Username:
<input type="text" required="" name="user_name" />
<br />
Password:
<input type="password" required="" name="password" />
<br />
<br />
<input type="submit" name="submit" value="Login" />

</center>
<br />



</form>

</div>



</section>
</body>
</html>