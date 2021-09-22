<?php 

    include "../api.php";

    $staff_id = isset($_GET["staff_id"]) ? $_GET["staff_id"] : null;
    if($staff_id){
        $sql = "SELECT * FROM lembur WHERE id = '".$staff_id."'";
        $query = mysqli_query($conn, $sql);
        $fetch = mysqli_fetch_assoc($query);
        echo json_encode([
            'status' => 'oke mantap',
            'result' => $fetch
        ]);
    } else{
        $sql = "SELECT * FROM lembur";
        $query = mysqli_query($conn, $sql);
        while($data = mysqli_fetch_assoc($query)){
            $item[] =  $data;
        }

        $response = array(
            'status' => 'oke',
            'data' => $item
        );

        echo json_encode($response);
    }
?>