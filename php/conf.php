<?php
	$hostname='localhost';
	$user = 'root';
	$password = ' ';
	$mysql_database = 'swing';
	$db = mysql_connect($hostname, $user, $password,$mysql_database);
	mysql_select_db("user", $db);
?>