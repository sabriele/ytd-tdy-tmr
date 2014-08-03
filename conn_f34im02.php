<?php
$dbcnx=@mysql_connect('localhost','f34im02','f34im02', 'f34im02');
if (!$dbcnx)
	die("Could not connect to mysql");
if (!@mysql_select_db ("f34im02"))
	die("Could not find the database");
?>