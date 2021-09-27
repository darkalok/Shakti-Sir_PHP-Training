<?php
  $arr1= array("b"=>30,"c"=>10,"a"=>20);
  #flip
  $r = array_flip($arr1);
  print_r($r);
  echo "<br />";

  $arr1= array("b"=>30,"c"=>10,"a"=>20);
  #array_key_exists
  if(array_key_exists("c",$arr1)){
     echo "Aviable";
  }else{
     echo "not aviable";
  }
  echo "<br />";

  $arr1= array("b"=>30,"c"=>10,"a"=>20);
  #in_array
  $r = array_flip($arr1);
  if(in_array(10,$arr1)){
     echo "avaiable";
  }else{
     echo "not avaiable";
  }
  echo "<br />";

  $arr1 = array("a","b");
  $arr2 = array(10,20);
  #array_combine
  $arr3 = array_combine($arr1,$arr2);
  print_r($arr3);
  echo "<br />";

  $arr1 = array(10,20,30,40);
  $arr2 = array_chunk($arr1,2);
  print_r($arr2);  
?>