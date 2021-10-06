<?php  

$sname = "sql6.freemysqlhosting.net";
$uname = "sql6441805";
$password = "TZBiNSNInH";

$db_name = "sql6441805";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}