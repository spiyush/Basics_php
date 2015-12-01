<?php

    $mysql_host = 'localhost';
    $mysql_user ='root';
    $mysql_pass ='';
    
    $mysql_db = 'ajx';

    class ServerException extends Exception {}
    class DatabaseException extends Exception {}

        
    try{
        
       if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)){
           
           throw new ServerException('could not connect to serxvxver');
           
       }else if(!@mysql_select_db($mysql_db)){
           
           throw new  DatabaseException('could not select to database');
       }else{
		   
		   echo 'connected';
	   }
        
    }   catch(ServerException $ex){
        
        echo 'Error:'.$ex->getMessage();
        
    } catch(DatabaseException $ex){
        
        echo 'Error:'.$ex->getMessage();
    }
        
?>