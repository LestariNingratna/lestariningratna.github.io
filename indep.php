<?php

  include 'conection.php';

    $sql = "SELECT * FROM sm_kontrol";
    $query = mysqli_query($dbconnect, $sql);

    $kondisi = array();
    while ($data = mysqli_fetch_assoc($query)) {
        $kondisi[] = $data["kondisi"];
    }
        
?> 

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script type="text/javascript" src="js\jquery.min.js"></script>
        <title>Smart Home</title>
       <script type="text/javascript">
            $(document).ready(function(){
                setInterval(function(){
                    $("#sensor").load('sensor.php');
                }, 1000);
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand text-center" href="#">SMART HOME</a>
        </nav>
        <div class="container">
            <h2 class="text-center" style="color:blue;">Suhu Ruangan</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center mt-4" style="color:red"><span id="sensor">Suhu = 0 Kelembaban = 0%</span></h1>
                </div>
            </div>
            <div class="card text-center mt-5">
                <div class="card-header">
                   Kontrol Lampu Lantai 2
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php 
                        echo "Lampu ".$kondisi[0]; 
                    ?></h5>
                    <a href="aksi.php?channel=1&state=1" class="btn btn-success">ON</a>
                    <a href="aksi.php?channel=1&state=0" class="btn btn-danger">OFF</a>
                </div>
                <div class="card-footer text-muted">    
                </div>
            </div>
            <div class="card text-center mt-3">
                <div class="card-header">
                   Kontrol Lampu Lantai Bawah
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php 
                        echo "Lampu ".$kondisi[1]; 
                    ?></h5>
                    <a href="aksi.php?channel=2&state=1" class="btn btn-success">ON</a>
                    <a href="aksi.php?channel=2&state=0" class="btn btn-danger">OFF</a>
                </div>
                <div class="card-footer text-muted">  
                </div>
            </div>
            <div class="card text-center mt-3">
                <div class="card-header">
                   Kontrol Lampu Teras
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php
                        echo "Lampu ".$kondisi[2]; 
                    ?></h5>
                    <a href="aksi.php?channel=3&state=1" class="btn btn-success">ON</a>
                    <a href="aksi.php?channel=3&state=0" class="btn btn-danger">OFF</a>
                </div>
                <div class="card-footer text-muted">  
                </div>
            </div>
            <div class="card text-center mt-5">
                <div class="card-header">
                   Kontrol Gerbang
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php
                        echo "Gerbang ".$kondisi[3]; 
                    ?></h5>
                    <a href="aksi.php?channel=4&state=1" class="btn btn-success">OPEN</a>
                    <a href="aksi.php?channel=4&state=0" class="btn btn-danger">CLOSE</a>
                </div>
                <div class="card-footer text-muted">    
                </div>
            </div>
        </div>   
    </body>
</html>