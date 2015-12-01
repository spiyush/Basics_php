<?php

  //program 1 such poragrams is usefull in capcha efor form filing
  
  $string = 'abcdefghijklmnopqrstuvwxyz134567890';// 
  
  $string_shuffled = str_shuffle($string);
  
  $half = substr ($string_shuffled, 0, strlen($string)/5); //can use in this way also
  
  //$half = substr ($string_shuffled, 0, 5);
  
  echo $half;

  //$string_reversed = strrev($string);   for sting reverse
  //echo $string_reversed;
  
  
?>