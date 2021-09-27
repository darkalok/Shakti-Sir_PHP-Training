<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
  if(isset($_REQUEST['msg'])){
     echo "$_REQUEST[msg]";
  }
?>
<form action="server.php" method="post">
   <!-- <label for="u_name">UserName</label> -->
   <input type="text" name="u_name" required />
   <br />
   <!-- <label for="u_pass">Password</label> -->
   <input type="password" name="u_pass" required />
   <br />
   <input type="submit" value="login" />
</form>
</body>
</html>
