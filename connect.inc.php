<?php

$ip="localhost";
$username="root";
$password="A!1Ghj00";
$db_name="University";
	
	if(!@mysql_connect($ip,$username,$password) || !@mysql_select_db($db_name))
	{
		die("Error!Unable to communicate with server.Sorry for the inconvienience");
		
		ob_flush();
	}
?>
