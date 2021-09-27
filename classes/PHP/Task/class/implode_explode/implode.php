<?php
  $arr = array("one","two","three");
  echo gettype($arr);
  $str = implode(" ",$arr);
  echo "<br />",$str."<br />".gettype($str);
?>