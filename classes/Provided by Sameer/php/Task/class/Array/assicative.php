<?php
  $arr = array(
     array("id"=>101,"name"=>"sameer"),
     array("id"=>102,"name"=>"yashi")
  );
  foreach($arr as $a){
     foreach($a as $k => $v){
        echo $k."=".$v." ";
     }
     echo "<br />";
  }
?>