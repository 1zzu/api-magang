<?php
    include "../api.php";

    //get id
    $id = $_GET['id'];

    //syntax
    $sql = "DELETE FROM `lembur` WHERE `lembur`.`id` = '".$id."';";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "data lembur berhasil terhapus";
    } else{
        $msg = "data lembur gagal dihapus";
    }

    $response = array(
        'status' => 'okee',
        'msg' => $msg
    );

    echo json_encode($response);
?>