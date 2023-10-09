<?php
$server       = "https://ep-snowy-pine-71687776-pooler.us-east-1.postgres.vercel-storage.com";
$user         = "default";
$password     = "Pt5IYczg3dkR";
$database     = "verceldb";

$dbconnect = mysqli_connect($server, $user, $password, $database);

if(!$dbconnect){
    die('Koneksi ke database gagal');
}
?>
