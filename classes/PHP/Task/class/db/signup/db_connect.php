<!-- connect database -->
<?php

  define("HOST","localhost");
  define("USERNAME","root");
  define("PASSWORD","");
  define("DB","empdb");

  $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
?>