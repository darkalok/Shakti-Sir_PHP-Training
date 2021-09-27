<?php
  $arr1= array("b"=>10,"c"=>20,"a"=>30);
  #ksort
  ksort($arr1);
  print_r($arr1);
  echo "<br />";

  $arr1= array("b"=>10,"c"=>20,"a"=>30);
  #krsort
  krsort($arr1);
  print_r($arr1);
  echo "<br />";

  $arr1= array("b"=>30,"c"=>10,"a"=>20);
  #asort
  asort($arr1);
  print_r($arr1);
  echo "<br />";

  $arr1= array("b"=>30,"c"=>10,"a"=>20);
  #arsort
  arsort($arr1);
  print_r($arr1);
  echo "<br />";

  $arr1= array("b"=>30,"c"=>10,"a"=>20);
  #array_keys
  print_r(array_keys($arr1));
  foreach(array_keys($arr1) as $k){
     echo "<br />".$k;
  }
  echo "<br />";

  $arr1= array("b"=>30,"c"=>10,"a"=>20);
  #array_values
  print_r(array_values($arr1));
  foreach(array_values($arr1) as $v){
     echo "<br />".$v;
  }
  echo "<br />";
?>