<?php
  $arr  = array(10,20,20,10,30);
  #PUSH
  array_push($arr,40,50,60);
  print_r($arr);
  echo "<br />";

  #POP
  echo array_pop($arr); //60
  echo "<br />";
  print_r($arr);
  echo "<br />";

  #Shift
  echo array_shift($arr);
  echo "<br />";
  print_r($arr);
  echo "<br />";

   #Unshift
   array_unshift($arr,10);
   print_r($arr);
   echo "<br />";

   #unique
   $c = array_unique($arr);
   print_r($c);
   echo "<br />";

   #reverse
   $c = array_reverse($arr);
   print_r($c);
?>