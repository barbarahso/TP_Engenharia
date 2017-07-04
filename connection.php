<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$host = "127.0.0.1";
$user = "root";
$pass = "1234";
$database="informasabara";

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$connection = mysql_connect($host,$user, $pass) or die(mysql_error());
mysql_select_db($database) or die (mysql_error());
?>

</body>
</html>