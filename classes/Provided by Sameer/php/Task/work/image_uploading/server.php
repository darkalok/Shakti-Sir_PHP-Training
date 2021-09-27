<?php
//   print_r($_FILES['file']);

# check file jpeg or not
if($_FILES['file']['type'] == 'image/jpeg'){
   #check file size less then  or equal 1mb
   if($_FILES['file']['size'] > 1048596 ){
      header("location:index.php?e_msg=<b><font color='red'>Wrong! Please Choose size less than 1mb(1024kb)</font></b>");
   }else{
      header("location:index.php?e_msg=<font color='green'><b>Correct file</b><font>");
   }
   }else{
   header("location:index.php?e_msg=<b><font color='red'>please choose only jpg/jpeg file</font></b>");
}
?>