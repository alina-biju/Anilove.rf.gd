<?php  

$sname = "sql304.epizy.com";
$uname = "epiz_31006318";
$password = "fl1maR47Te7";
$db_name = "epiz_31006318_images";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (!$conn) {
	echo "failed!";
	exit();
}