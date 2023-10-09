<?php
    include 'conection.php';

    if(isset($_GET["token"]) && isset($_GET["kondisi"])){

        $token = $_GET["token"];
        $kondisi = $_GET["kondisi"];

        mysqli_query($dbconnect, "UPDATE sm_kontrol SET kondisi='$kondisi' WHERE token = '$token'");
    }

    if(isset($_GET["status"])){

        $status = $_GET["status"];

        mysqli_query($dbconnect, "UPDATE sm_kontrol SET status='".$status."' WHERE token = 1004");
    }
    
?>
