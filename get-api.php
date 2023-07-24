<?php
     include "conection.php";
     
    $sql = "SELECT * FROM sm_kontrol";
    $query = mysqli_query($dbconnect, $sql);

    while($data = mysqli_fetch_array($query)){


        $item[] = array(
            'token'=>$data["token"],
            'status'=>$data["status"], 
        );       
    } 

    echo json_encode($item);
?>