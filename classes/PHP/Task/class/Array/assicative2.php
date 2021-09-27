<?php
  $arr = array(
     "sameer"=>array("id"=>101,"name"=>"sameer"),
     "yashi"=>array("id"=>102,"name"=>"yashi")
  );
  foreach($arr as $a=>$newA){
     foreach($newA as $k => $v){
        echo $k."=".$v." ";
     }
     echo "<br />";
  }
?>