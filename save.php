<?php
// Require connection file
require_once 'app/connection.php';

$json = file_get_contents('php://input');

$data = json_decode($json);

$i = 0;

foreach($data AS $key => $val){
    // Set new name image file
    $explode_filename = explode('.', $val->FileName);
    $new_filename = current($explode_filename).'_'.date('YmdHis').'.'.end($explode_filename);

    // Upload file from Base64
    file_put_contents('img/upload/'.$new_filename, base64_decode($val->Base64));

    $arraydata["imagename"][$i] =  $new_filename;
    $i++;
}
// Insert image name to DB
$insert = $connect->prepare( 
    "INSERT INTO (
        image1,
        image3,
        image4,
        image5,
        image6,
        image7,
        image8,
        image9,
        image10,
        image11,
        image12,
        image13,
        image14,
        image15,
        image16)
    VALUES (
        :image1,
        :image3,
        :image4,
        :image5,
        :image6,
        :image7,
        :image8,
        :image9,
        :image10,
        :image11,
        :image12,
        :image13,
        :image14,
        :image15,
        :image16)"
);
$insert->execute(
    array(
        ":image1" => $arraydata["imagename"][0],
        ":image2" => $arraydata["imagename"][1],
        ":image3" => $arraydata["imagename"][2],
        ":image4" => $arraydata["imagename"][3],
        ":image5" => $arraydata["imagename"][4],
        ":image6" => $arraydata["imagename"][5],
        ":image7" => $arraydata["imagename"][6],
        ":image8" => $arraydata["imagename"][7],
        ":image9" => $arraydata["imagename"][8],
        ":image10" => $arraydata["imagename"][9],
        ":image11" => $arraydata["imagename"][10],
        ":image12" => $arraydata["imagename"][11],
        ":image13" => $arraydata["imagename"][12],
        ":image14" => $arraydata["imagename"][13],
        ":image15" => $arraydata["imagename"][14],
        ":image16" => $arraydata["imagename"][15],

    );
);
echo json_encode( array('status' => 'completed') );