<?php
#Create array
 $arr = array(101,"Sameer","BCA");
/* Printing method */
print "<center> <h3>1st Way</h3> </center>";
echo $arr[0]." ".$arr[1]." ".$arr[2];

print "<center><h3>2nd Way</h3></center>";
// print_r function only use for array
print_r($arr);

print "<center><h3>3rd Way</h3></center>";
for($i=0;$i<count($arr);$i++){
   echo $arr[$i]." ";
}

print "<center><h3>4th Way</h3></center>";
foreach($arr as $a){
   echo $a." ";
}
?>