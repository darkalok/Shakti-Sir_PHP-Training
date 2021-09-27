<?php
  require("db_connect.php");
  if(isset($_REQUEST['page'])){
    $page = ($_REQUEST['page']-1)*2;
  }else{
    $page = 0;
  }
  $sql = "SELECT *FROM student_info LIMIT $page,2";
  $rs = mysqli_query($con,$sql);
  while($data = mysqli_fetch_assoc($rs)){
    echo $data['s_name']." ".$data['s_city']." ".$data['s_course']."<br />";
  }

  $sql1 = "SELECT *FROM student_info";
  $count = mysqli_num_rows(mysqli_query($con,$sql1));
  $perpage = ceil($count/2);
  for($i=1;$i<=$perpage;$i++){
    echo "<a href='index.php?page=$i'>$i</a>";
  }
?>