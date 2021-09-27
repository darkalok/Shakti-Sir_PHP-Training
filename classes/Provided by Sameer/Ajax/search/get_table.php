<?php
  $num = $_REQUEST['n'];
  for($i=1;$i<=10;$i++){
     $t=$num*$i;
     $str.="".$t."<br/>";
  }
  echo $str;
?>