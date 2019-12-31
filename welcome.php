<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1 align="center">
<?php
  session_start();
   if(isset($_SESSION['uname'])){
	   echo "Welcome ".$_SESSION['uname'];
	   
	   }
 else
 { echo "You are not login";
 exit;}


?>
</h1>
<h2 align="center"><a href="logout.php">Logout</a></h2>
</body>
</html>