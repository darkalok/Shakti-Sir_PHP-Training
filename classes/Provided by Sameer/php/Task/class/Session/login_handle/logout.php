<?php
  session_start();
  if(isset($_SESSION['u'])){
     session_destroy();
     header("location:index.php?msg=<font color='green'>logout Success</font>");
  }else{
     header("location: index.php?msg= Please Login First before logout");
  }
?>