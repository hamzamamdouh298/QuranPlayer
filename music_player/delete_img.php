<?php
require_once('db_connect.php');
extract($_GET);
$query = $conn->query("SELECT * FROM music_list where id = '{$id}'");
if($query->num_rows > 0){
    $res = $query->fetch_array();
    $delete = $conn->query("DELETE FROM `music_list` where id = '{$id}'");
    if($delete){
        if(!empty($res['image_path']) && is_file(explode("?",$res['image_path'])[0]))
        unlink(explode("?",$res['image_path'])[0]);
        
        if(!empty($res['audio_path']) && is_file(explode("?",$res['audio_path'])[0]))
        unlink(explode("?",$res['audio_path'])[0]);
        
        echo '<script>alert("Audio Data successfully deleted."); location.replace("index.php")</script>';
    }else{
        echo '<script>alert("Unable to Delete the audio data."); location.replace("index.php)</script>';
    }
    
}else{
    echo '<script>alert("Unknown Audio Data ID."); location.replace("index.php")</script>';
}
