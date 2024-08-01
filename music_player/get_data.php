<?php
require_once('db_connect.php');

extract($_POST);
$query = $conn->query("SELECT * FROM music_list where id = '{$id}'");
if($query->num_rows > 0){
    $resp['status'] = 'success';
    $res = $query->fetch_array();
    if(empty($res['image_path']) || (!empty($res['image_path']) && !is_file(explode("?",$res['image_path'])[0])))
    $res['image_path'] = "../H_IMGAES/logo1.png";
    $resp['data'] = $res;
}else{
    $resp['status'] = 'failed';
    $resp['error'] = 'Unknown Audio ID';
}
echo json_encode($resp);