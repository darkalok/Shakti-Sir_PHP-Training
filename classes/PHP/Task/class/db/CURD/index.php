<?php
  include("db_connect.php");
  error_reporting(0);

  if(isset($_REQUEST['e_id'])){
     $id = $_REQUEST['e_id'];
     $sql = "SELECT *FROM emp_info WHERE e_id=$id";
     $rs = mysqli_query($con,$sql);
     $data = mysqli_fetch_assoc($rs);
  }

  if(isset($_REQUEST['submit'])){
     $e_name = $_REQUEST['e_name'];
     $e_city = $_REQUEST['e_city'];
     $e_comp = $_REQUEST['e_comp'];

     if($_REQUEST['current_emp_id']!=""){
        $id=$_REQUEST['current_emp_id'];
        $sql = "UPDATE emp_info SET e_name='$e_name',e_city='$e_city',e_comp='$e_comp' WHERE e_id= $id";
     }else{
        $sql = "INSERT INTO emp_info(e_name,e_city,e_comp) VALUES('$e_name','$e_city','$e_comp')";
     }
     if(mysqli_query($con,$sql)){
        header("location:employee_show.php");
     }
  }
?>

<form action="#" method="post">
Name <input type="text" name="e_name" value="<?=$data['e_name']?>" />
<br />
City
<input type="text" name="e_city" value="<?=$data['e_city']?>" />
<br />
Compney
<input type="text" name="e_comp" value="<?=$data['e_comp']?>" />
<br />
<input type="hidden" name="current_emp_id" value="<?=$data['e_id']?>" />
<input type="submit" name="submit" value="<?=$data['e_id']?'update':'Submit'?>" />
</form>