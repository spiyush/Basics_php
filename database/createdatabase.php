<?php

	$con = mysql_connect("localhost","root","");
	$db = "company";
	
	if(!$con){
	
	die('could not connect'. mysql_error());	
	}
	if(mysql_query("CREATE DATABASE $db",$con))
{
echo "your create is:$db";
}
else{
echo "error database:".mysql_error();
}

mysql_close($con);


?>