<?php
$count=0;
  $img_length = count($_FILES['file']['name']);
  for($i=0;$i<$img_length;$i++){
   //   echo $_FILES['file']['name'][$i]."<br />";
   //   echo $_FILES['file']['type'][$i]."<br /><hr />";

   $n = $_FILES['file']['name'][$i];
   $t = $_FILES['file']['tmp_name'][$i];

   if(move_uploaded_file($t,'upload/'.$n)){
      $count++;
   }
  }
  if($count!=0){
     echo "file uploaded";
  }else{
     echo "file not uploaded";
  }
?>