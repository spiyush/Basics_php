<?php

$age =21;
try{
    if($age>18){
        
        echo 'old enough to drink';
    }else{
        
        throw new Exception ('not old enough');
    }
    
} catch (Exception $ex){
    echo 'Error:'.$ex->getMessage();
    
}

?>