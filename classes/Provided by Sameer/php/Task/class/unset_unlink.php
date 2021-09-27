<?php
# create variable
  $a = 10;
  # use unset delete variable
  unset($a);
  # use isset variable exist or not
  if(isset($a)){
     echo "Variablle Available<br />";
  }else{
     echo "Variable Not Available <br />";
  }
  # use unlink delete file 
  if(unlink("a.jpg")){
     echo "File Delete";
  }else{
     echo "File not Delete";
  }
?>