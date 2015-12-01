<?php

	require 'conf.inc.php';
	
	echo $ip_address;

	foreach($ip_blocked as $ip){
		if($ip==$ip_address){
	
	die('your IP Address ,'.$ip_address.'has been blocked ');
	
	}
	
	}
?>