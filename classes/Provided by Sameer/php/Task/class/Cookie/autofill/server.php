<?php
 $username =$_REQUEST['uname'];
 $password =$_REQUEST['upwd'];

if($_REQUEST['chk']=="yes"){
  setcookie("username",$username,time()+3600);
  setcookie("password",$password,time()+3600);
}
header("location:login.php");
?>