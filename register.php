<?php
$f=$_POST['name'];
$u=$_POST['email'];
$p=$_POST['password'];

$conn=mysql_connect("localhost","root","");
mysql_select_db("test",$conn);

$q="insert into test value('$f','$u','$p')";
$i=mysql_query($q);
if($i)
{
	echo "Successfully Registered";
	echo "<a href=login.html>Login</a></h1>";
}
else
{
	echo"Registeration failed";
}
?>