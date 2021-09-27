<?php
   # const variable
   define("HOST","localhost");
   define("USERNAME","root");
   define("PASSWORD","");
   define("DB","empdb");
   #connect db
  $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
  #check database connect or not?
  if($con){   #connect
     echo "database connected";  
  }else{    #not connect
     echo "database not connected";  
  }
?>