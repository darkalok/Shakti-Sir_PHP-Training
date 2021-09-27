<?php
  require("db_connect.php");
  if(isset($_REQUEST['submit'])){
     $user_first_name = $_REQUEST["user_first_name"];
     $user_last_name = $_REQUEST["user_last_name"];
     $user_email = $_REQUEST["user_email"];
     $user_password = $_REQUEST["user_password"];

     $sql = "SELECT user_email FROM login_info WHERE user_email = '$user_email'";
     $rs = mysqli_query($con,$sql);
     $data = mysqli_fetch_assoc($rs);
     if($data['user_email']){
        echo "<script>alert('Email already Exists')</script>";
     }else{
        $sql = "INSERT INTO login_info(user_first_name,user_last_name,user_email,user_password) VALUES ('$user_first_name','$user_last_name','$user_email','$user_password')";
        if(mysqli_query($con,$sql)){
           echo "<script>alert('Recard saved')</script>";
        }else{
           echo "<script>alert('Record not saved')</script>";
        }
      }
   }
?>
<form action="#" method="POST">
  First Name
    <input type="text" name="user_first_name" />
    <br />

  Last name
    <input type="text" name="user_last_name" />
    <br />

  Email 
    <input type="email" name="user_email" />
    <br />  

  Password 
    <input type="password" name="user_password" />
    <br />

     <input type="submit" name="submit" value="SignUp" /> 
</form>