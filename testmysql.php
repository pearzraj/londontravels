<?php 
$link = mysql_connect('localhost','cl41-stratdb','St@123'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
echo 'Connection OK'; mysql_close($link); 
?> 