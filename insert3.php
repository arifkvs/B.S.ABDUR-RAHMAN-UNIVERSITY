<!DOCTYPE HTML>
<html>
<head>
<title>Alloy Jacket Website | Home </title>
</head>
<body>
<?php
$nm=$_GET["name"];
$cardno=$_GET["password"];
mysql_connect("localhost","root","");
mysql_select_db("sum");
mysql_query("insert into login values('$nm','$cardno')");

?>
</body>
</html>
