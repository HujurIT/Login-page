<?php 
/* BD store */
$ues = "tamim@gmail.com";
$ups = "1234a";

//input email and password
$ue = $_REQUEST['email'];
$up = $_REQUEST['pass'];

//check in user 
if($ues == $ue && $ups == $up){
    echo "<font color='green'>Login success.</font>";
}else echo "<font color='red'>Login failed!</font>";
?>