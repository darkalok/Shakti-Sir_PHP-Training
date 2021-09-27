<?php
   $a = 10;
   echo $a."<br />";
   unset($a);
   if(isset($a)){
      echo "Variable available";
   }else{
      echo "Variable not available";
   }
   echo $a;
?>