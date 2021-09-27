<?php
  if(isset($_REQUEST['EMSG'])){
     echo "<font color='red'> $_REQUEST[EMSG] </font>";
  }
?>

<form action="server.php" method="post">
 UserName <input type="text" name="u_name" />
 Password <input type="password" name="u_password" />
 <br />
 <input type="submit" value="Submit" />
</form>