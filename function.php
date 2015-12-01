<?php
	//function myname(){echo 'piyush';}  //basicfunction
    //echo'myname is'; myname();
	 
	//$n1 =1;$n2 =2;function add($n1 ,$n2){       //function with argumnets
	//echo $n1 + $n12;} add($n1, $n2);
	 
	 //function displaydate($day,$date,$year){
	 //echo $day.'  '.$date.'  '.$year; }				//funaction with argumnewt 2
	 //displaydate('monday',31,2011);
	 
	//function  add($n1,$n2){  $r=$n1+$n2;  return $r;}
	//function div($n1,$n2){$r=$n1/$n2;  return $r;}		// function with a return value
	//$s = div(add(10,10),add(5,5));
	//echo $s;
	
	$user_ip =$_SERVER['REMOTE_ADDR'];
	
	function echo_ip(){ global $user_ip; 							//global variables and functions
	$string ='your IP address is:' .$user_ip;  echo $string; }
	
	echo_ip();
	
?>