<?php
# == or === 
  $a = 1;
  $b = '1';
  echo gettype($a)."<br/>".gettype($b)."<br />";
  echo ($a == $b);  //1
  echo ($a === $b); //0 (not show)
?>