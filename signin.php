<?php

session_start();
include './connect.inc.php';
$username=$_POST["username"];
$password=$_POST["password"];
$query="SELECT * FROM `student_details` WHERE `username`='$username' AND `password`='$password'";
$query_exec=mysql_query($query);
if(mysql_num_rows($query_exec)==1)
{
if($result=mysql_fetch_assoc($query_exec))
{
	$_SESSION["user_id"]=$result["id"];
	header("Location:./profile/index.php");
}
}

?>
