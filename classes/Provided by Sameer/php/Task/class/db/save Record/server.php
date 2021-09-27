<?php
  #store user value
  $e_name = $_REQUEST['e_name'];
  $e_city = $_REQUEST['e_city'];
  $e_comp = $_REQUEST['e_comp'];
  
  #connect db
  $con = mysqli_connect("localhost","root","","empdb");
  if($con){    #connect db
     #insert record
     $sql = "INSERT INTO emp_info (e_name,e_city,e_comp) VALUES ('$e_name','$e_city','$e_comp')";
     if(mysqli_query($con,$sql)){  # save record
        echo "<script>alert('Record save')</script>";
     }else{  #not save record
        echo "Record  not saved";
     }
  }else{    #not connect db
     echo "connection error";
  }
?>