<?php
$output="";
  $con = mysqli_connect("localhost","root","","project");
  $name = $_REQUEST['user_name'];
  $sql= "SELECT *FROM user_info WHERE user_name like '$name%'";
  // SELECT *FROM student_info WHERE name like '%a'
$rs = mysqli_query($con,$sql);

if( mysqli_num_rows($rs)==0 ){
   echo "<font color='red'>No Result Found</font>";
}else{
   while($data = mysqli_fetch_assoc($rs)){
      $output.= $data['user_name']."<br />";
   }
   echo $output;
}
?>