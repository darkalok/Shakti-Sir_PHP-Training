<?php
  $arr1 = array(10,50,30);
  $arr2 = array(40,20,60);
  #Merge
  $c = array_merge($arr1,$arr2);
  print_r($c);

  #sort
  sort($c);
  print_r($c);

  #rsort
  rsort($c);
  print_r($c);
?>