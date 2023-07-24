<?php
// Define the device status and token data
$data = array(
    array('status' => '0', 'token' => 'token1'),
    array('status' => '1', 'token' => 'token2'),
    array('status' => '0', 'token' => 'token3'),
    array('status' => '1', 'token' => 'token4')
);

// Respond with the device status and token data
echo json_encode($data);
?>
