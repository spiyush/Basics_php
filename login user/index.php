<?php


require 'core.inc.php';
require 'connect.inc.php';

if(loggedin()){
    
    echo 'you logged in.<a href ="logout.php"> Logout </a>';
    
}else{
    
    include 'loginform.inc.php';

    }
?>