<?php
  if(isset($_REQUEST['e_msg'])){
     echo "$_REQUEST[e_msg]";
  }
?>

<form action="server.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" value="Upload" />
</form>