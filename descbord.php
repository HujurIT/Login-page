<?php

$un = $_POST['name'];
$up = $_POST['pass'];

if($un == "google" && $up =="hello" ){
    header("location:show.php?full=$un <br> $up");//ekhan theke ami post method diye data pass korte cai show.php te.but ekhon ekhane get method use hoy jar phole url e data show hoy.
    
}else echo "Not matching";




// if($un == "google" ){
//     header("location:https://www.google.com");

// } elseif($un == "facebook"){
//      header("location:https://www.facebook.com");
// }else echo "This page not fount.";


?>