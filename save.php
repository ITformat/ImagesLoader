<?php
// Require connection file
require_once 'app/connection.php';

$json = file_get_contents('php://input');

$data = json_decode($json);

foreach($data AS $key => $val){
    // Set new name image file
    $explode_filename = explode('.', $val->FileName);
    $new_filename = current($explode_filename).'_'.date('YmdHis').'.'.end($explode_filename);

    // Upload file from Base64
    file_put_contents('img/upload/'.$new_filename, base64_decode($val->Base64));

    // Insert image name to DB

}
echo json_encode( array('status' => 'completed') );