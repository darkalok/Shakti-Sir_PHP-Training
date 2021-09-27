<?php
  session_start();
  if(isset($_SESSION['u'])){
     echo "Welcome $_SESSION[u] ";
     echo "<a href='logout.php'>logout</a>";
  }else{
     header("location:index.php?msg=Please Login First before profile");
  }
?>