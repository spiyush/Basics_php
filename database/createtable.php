<?php

	$con = mysql_connect("localhost","root","");
	
	
	if(!$con){
	
	die('could not connect'. mysql_error());	
	}
	 mysql_select_db("company",$con);
	 $sql = "CREATE TABLE users
	 {
		'username' varchar(100) NOT NULL,
		'password' varchar(100)	NOT NULL,
	}";
	
mysql_query($sql,$con);
mysql_close($con);


?>