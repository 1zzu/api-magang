<?php
    include "../api.php";

    //get id
    $id = $_GET['id'];

    //syntax
    $sql = "DELETE FROM `absen` WHERE `absen`.`id` = '".$id."';";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "data absen berhasil terhapus";
    } else{
        $msg = "data absen gagal dihapus";
    }

    $response = array(
        'status' => 'okee',
        'msg' => $msg
    );

    echo json_encode($response);
?>