<?php
    include "../api.php";

    //get id
    $id = isset($_GET["id"]) ? $_GET["id"] : null;

    //syntax
    $sql = "DELETE FROM `pengumuman` WHERE `pengumuman`.`id` = '".$id."'";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "pengumuman berhasil terhapus";
    } else{
        $msg = "pengumuman gagal dihapus";
    };

    $response = array(
        'status' => 'okee',
        'msg' => $msg
    );

    echo json_encode($response);
?>