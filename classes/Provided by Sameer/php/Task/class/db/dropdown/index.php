<?php
  require("db_connect.php");
  function get_dropdown_list(){
     $opt = "<select>";
     global $con;
     $sql = "SELECT *FROM course_info";
     $rs = mysqli_query($con,$sql);
     while($data = mysqli_fetch_assoc($rs)){
        $opt.="<option value=$data[c_id]>$data[c_name]</option>";
     }
     $opt.="</select>";
     return $opt;
  }
?>
<html>
  <body>
   <?=get_dropdown_list();?>
  </body>
</html>