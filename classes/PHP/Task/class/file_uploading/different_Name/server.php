<?php

  $name = $_FILES['file']['name'];
  $img = explode(".",$name);
//   echo $img[0]." ".$img[1];

  $new_name="IMG".time().".".$img[1];

  $tmp = $_FILES['file']['tmp_name'];
  $path = 'upload/'.$new_name;

  if(move_uploaded_file($tmp,$path)){
     echo "file uploaded";
  }else{
     echo "file not uploaded";
  }
?>