<?php
session_start();
include('include/config.php');
$output='';
// $val= $_POST['value'];
// $ret = mysqli_query($con, 'select username from doctorlogin where specialization='.$_POST['value'].'');
$ret = mysqli_query($con, "select username from doctorlogin where specialization='".$_POST['specilizationid']."'");
$output='<option value="" selected="selected">Select Doctor</option>';
while ($row = mysqli_fetch_array($ret)){
    $output.='<option value=" '.$row['username'].' ">'.$row['username'].'</option>';
} 
echo $output;
?>