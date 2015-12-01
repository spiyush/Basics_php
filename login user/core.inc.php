<?php

ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = $_SERVER['HTTP_REFERER'];// this going to tell the from where we come 

function loggedin(){
    if(isset($_SESSION['user_id'])&&!empty($SESSION['user_id'])){
        
        return true;
    }else
       {
            
           return false;
       }
}

?>