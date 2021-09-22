<?php 

    include "../api.php";

    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    if($id){
        $sql = "SELECT * FROM absen WHERE id = '".$id."'";
        $query = mysqli_query($conn, $sql);
        $fetch = mysqli_fetch_assoc($query);
        echo json_encode([
            'status' => 'oke mantap',
            'result' => $fetch
        ]);
    } else{
        $sql = "SELECT * FROM absen";
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