<?php

    $mysql_host = 'localhost';
    $mysql_user ='root';
    $mysql_pass ='';
    
    $mysql_db = 'ajx';

    class ServerException extends Exception {
		public function showSpecific (){
			
			return 'Error on line'.$this->getLine().'in'.$this->getFile(); //getFile and getLine are the method within Exception   
		}
	}
    class DatabaseException extends Exception {}
		public function showSpecific (){
			
			return 'Error on line'.$this->getLine().'in'.$this->getFile();
		}
        
    try{
        
       if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)){
           
           throw new ServerException();
           
       }else if(!@mysql_select_db($mysql_db)){
           
           throw new  DatabaseException();
       }else{
		   
		   echo 'connected';
	   }
        
    }   catch(ServerException $ex){
        
        echo 'Error:'.$ex->showSpecific();
        
    } catch(DatabaseException $ex){
        
        echo 'Error:'.$ex->showSpecific();
    }
        
?>