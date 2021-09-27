<?php
require("db_connect.php");

if (isset($_REQUEST["submit"])) {
   $user_email = $_REQUEST['user_email'];
   $user_password = $_REQUEST['user_password'];
   $sql = "SELECT *FROM auth_info WHERE user_email='$user_email' AND user_password='$user_password'";
   $rs = mysqli_query($con, $sql);   
   $data = mysqli_fetch_assoc($rs);
   if($data['user_id']) {
      header("location:profile.php");
   } else {
      $msg = "Invalid Login";
   }
}
?>

<form method="post" action="#">
   <?php
   echo isset($msg) ? $msg : '';
   ?>
   <br />
   Email
   <input type="email" name="user_email" required />
   <br />
   Password
   <input type="password" name="user_password" required />
   <input type="submit" name="submit" value="Login" />
</form>