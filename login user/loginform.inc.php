<?php
  
if(isset ($_POST['username']) && isset ($_POST['password'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $password_md5= md5($password); // thorugh md5 password is dcrpted and not be encrypted back
    
    if(!empty($username)&&!empty($password)){
       
        $query ="SELECT 'username' ,'password' FROM 'users' WHERE 'username'= '$username' AND 'passowrd'='$password_md5' ";
    
        if($query_run =mysql_query($query)){
            
            $query_num_rows = mysql_num_rows($query_run);
            
            if($query_num_rows=0){                                       //no data return from mysql
                
                echo'invalid username and password';
            
            }else if($query_num_rows=1)  {                           //if  $query_num_rows=1 we can say that mysql is returing something value
                
                $user_id =mysql_result($query_run,0,'id');             // everything is fine till now 
                $_SESSION['user_id']=$user_id;
                header('Location: index.php');
            }
        }   
      }
    else{
        echo 'you must supply username and password ';
    }
     
}

?>


<form action ="<?php echo $current_file; ?> " method="POST">
 
    Username:<input type ="text" name ="username"> Password : <input type ="password" name ="password">

    <input type ="submit" value="login in ">

</form>  