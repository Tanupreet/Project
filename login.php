<?php
$u=$_POST['email'];
$p=$_POST['password'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("test",$conn);
$s=0;
$q="select * from test";
$i=mysql_query($q);
while($r=mysql_fetch_array($i))
{
	if($u==$r["email"] && $p==$r["password"])
	{
		$s=1;
		$f=$r["name"];
	}
}
if($s==1)
{
	echo"Welcome $f";
}
else
	echo"INVALID EMAIL OR PASSWORD";
?>