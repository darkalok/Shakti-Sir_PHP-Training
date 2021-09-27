<?php
  # indexed array
  $arr1 = array(101,"Sameer","BCA");
   print_r($arr1);
  print "<br/>";
   #Associative Array
  $arr2 = array("id"=>101,"name"=>"Sameer");
  print("<b>Associative Array</b><br/><br />");
  print_r($arr2);
  print "<br/>";
  foreach($arr2 as $k=>$v){
     echo $k." ".$v."<br />";
  }
  #Dymansial Array
  $arr = array(
    array(10,20,30),
    array(40,50,60),
    array(70,80,90)
  );
  print("<b>Dymansial Array</b><br /><br />");
  print_r($arr);
  for($i=0;$i<=2;$i++){
    for($j=0;$j<=2;$j++){
      echo $arr[$i][$j]." ";
    }
    echo "<br />";
  }
  foreach($arr as $newA){
    foreach($newA as $v){
      echo $v." ";
    }
    echo "<br />";
  }
?>