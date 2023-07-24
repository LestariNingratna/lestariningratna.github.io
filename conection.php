<?php
$server       = "localhost";
$user         = "baharii1_fc";
$password     = "face12_fc1";
$database     = "baharii1_fc";

$dbconnect = mysqli_connect($server, $user, $password, $database);

if(!$dbconnect){
    die('Koneksi ke database gagal');
}
?>