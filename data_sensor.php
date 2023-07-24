<?php
    include 'conection.php';

    $suhu = $_GET["suhu"];
    $lembab = $_GET["lembab"];

    mysqli_query($dbconnect, "UPDATE sm_sensor SET suhu='$suhu', lembab='$lembab' WHERE id = 1");
?>