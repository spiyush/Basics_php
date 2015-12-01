<?php
	
	class databaseconnect{
		
		public function __construct($dbhost, $dbusername, $dbpassword){
			
			if(!@$this->Connect ($dbhost, $dbusername, $dbpassword)){
			
			echo  'connection failed';
		}else{
			
			echo 'connected';
		}
	}
	
	public function Connect ($dbhost, $dbusername, $dbpassword){
		
		//$dbhost='localhost';
		
		//$dbusername='root';
		
		//$dbpassword='';
	}
?>