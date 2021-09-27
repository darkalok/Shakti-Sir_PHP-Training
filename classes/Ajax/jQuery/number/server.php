<?php
  $num = $_REQUEST['n'];
  $op="";
  for($i=1;$i<=10;$i++){
     $t=$num*$i;
     $op.=$t."<br/>";
  }
  echo $op;
?>