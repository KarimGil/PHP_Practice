<center>
<?php
session_start();
 if(isset($_SESSION['uname'])){
	 echo "<h1> You are already logged in</h1>";
	 exit();
	 }


?>
</center>
<html>
<head>
<title>Example of post method</title>
</head>
<body>
<center>
<form method="post" >

<table align="center" style="margin-top:150px">

<tr>
<td> Username : </td>
<td> <input type="text" name="username" placeholder="Enter User Name or Email Address"></td>
</tr>
<tr>
<td> Password : </td>
<td> <input type="password" name="password" placeholder="Enter Password"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit">  </td>
</tr>
</table>

</form>
</center>
</body>
</html>
<?php

 if(isset($_POST['submit'])){
 $_SESSION['uname']= $_POST['username'];
	header('location:welcome.php');
 }
?>



