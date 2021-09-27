<?php
  require("db_connect.php");
  $sql = "SELECT *FROM  course_info";
  $rs = mysqli_query($con,$sql);
  while($data = mysqli_fetch_array($rs)){
     echo $data[0]." ".$data[1]."<br/>";
  }

  $sql2 = "SELECT *FROM course_info";
  $rs2= mysqli_query($con,$sql2);
  while($data2 = mysqli_fetch_assoc($rs2)){
     echo $data2['c_id']." ".$data2['c_name']."<br/>";
  }
?>