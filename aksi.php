<?php 
 if(isset($_GET['channel']) && isset($_GET['state'])){
     include 'conection.php';
     $state = $_GET['state'];
     $channel = $_GET['channel'];

     if($channel == '1'){
         mysqli_query($dbconnect, "UPDATE sm_kontrol SET status='$state' WHERE token = 1001 ");
     }elseif ($channel == '2'){
        mysqli_query($dbconnect, "UPDATE sm_kontrol SET status='$state' WHERE token = 1002 ");
     }elseif ($channel == '3'){
        mysqli_query($dbconnect, "UPDATE sm_kontrol SET status='$state' WHERE token = 1003 ");
     }elseif ($channel == '4'){
        mysqli_query($dbconnect, "UPDATE sm_kontrol SET status='$state' WHERE token = 1004");
     }
     header('location: index.php');
     exit;
 }
 ?>