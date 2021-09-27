<?php
  $name = $_REQUEST["u_name"];
  $password = $_REQUEST["u_password"];

  if($name == $password){
     header("location:profile.php");
  }else{
     header("location:index.php?EMSG=Somthing went wrong");
  }
//   echo "hi my anme is $name and my age is $age";
?>