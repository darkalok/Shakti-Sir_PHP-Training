<?php
  $arrayExt = array("jpg","png","jpeg");
  $fileExt = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
  if(in_array($fileExt,$arrayExt)){
     echo "valid";
  }else{
     echo "not valid";
  }
?>