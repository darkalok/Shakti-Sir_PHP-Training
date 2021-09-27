<?php
# print information of image
//  print_r($_FILES['f']);

$name=$_FILES['f']['name'];
$tmp_name=$_FILES['f']['tmp_name'];
$size=$_FILES['f']['size'];
$type=$_FILES['f']['type'];
$error=$_FILES['f']['error'];

echo "Name: $name <br />";
echo "tmp_Name: $tmp_name <br />";
echo "Size: $size <br />";
echo "type: $type <br />";
echo "error: $error <br />";
?>