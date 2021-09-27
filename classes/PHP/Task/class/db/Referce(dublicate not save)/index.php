<?php
  if(isset($_POST['submit'])){
     $e_name = $_POST['e_name'];
     $e_city = $_POST['e_name'];
     $e_comp = $_POST['e_comp'];

     $con = mysqli_connect("localhost","root","","empdb");
     $sql = "INSERT INTO emp_info (e_name,e_city,e_comp) VALUES ('$e_name','$e_city','$e_comp')";

     if(mysqli_query($con,$sql)){
        echo "<script>alert('Data Saved')</script>";
     }else{
        echo "Record not saved";
     }
  }
?>

<form action="#" method="post">
   name <input type="text" name="e_name" /> <br />
   city <input type="text" name="e_city" /> <br />
   compney <input type="text" name="e_comp" /> <br />
   <input type="submit" value="submit" name="submit" />
</form>