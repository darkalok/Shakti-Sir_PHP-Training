<?php
  include("db_connect.php");
  $sql = "SELECT * FROM emp_info";
  $rs = mysqli_query($con,$sql);
  echo "<table border='1'>";
  while($data=mysqli_fetch_assoc($rs)){
   //   print_r($data);
     $id = $data['e_id'];
     echo "<tr>";
     echo "<td> $data[e_name]</td>";
     echo "<td> $data[e_city]</td>";
     echo "<td> $data[e_comp]</td>";
     echo "<td><a href='index.php?e_id=$id'>Edit</a> |";
     echo "<a href='employee_delete.php?e_id=$id'>Delete</a></td>";
     echo "</tr>";
  }
  echo "</table>";
?>