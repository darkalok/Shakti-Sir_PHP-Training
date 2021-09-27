<?php
 session_start();
 if($_REQUEST['act'] == 'p_data'){
    $_SESSION['u_name'] = $_REQUEST['u_name'];
    $_SESSION['co'] = $_REQUEST['co'];
    header("location:qualification.php");
 }elseif($_REQUEST['act'] == 'q_data'){
    $_SESSION['course'] = $_REQUEST['course'];
    $_SESSION['duriation'] = $_REQUEST['duriation'];
    header("location:address.php");
 }else{
   $_SESSION['city'] = $_REQUEST['city'];
   $_SESSION['state'] = $_REQUEST['state'];

   echo "Name : $_SESSION[u_name]<br />";
   echo "C/O : $_SESSION[co]<br />";
   echo "Course : $_SESSION[course]<br />";
   echo "Duriation : $_SESSION[duriation]<br />";
   echo "City : $_SESSION[city]<br />";
   echo "State : $_SESSION[state]<br />";
   session_destroy();
 }
?>