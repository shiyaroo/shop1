
<?php
$username='root';
$pass='usbw';
$localhost='localhost';
$db_name='shop';

$db=mysql_connect($localhost,$username,$pass,$db_name);
if (!$db){die ('No connect'.mysql_error());
}
mysql_select_db($db_name,$db);
if(!mysql_select_db($db_name,$db))
{
	echo('DB '.$db_name.' no connect');
	exit();
	}
?>
