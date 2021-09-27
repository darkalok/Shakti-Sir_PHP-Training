<?php
  $path = "upload/".$_FILES['f1']['name'];
  move_uploaded_file($_FILES['f1']['tmp_name'],$path);
  echo "<img src='$path' height='100' width='100' />";
?>