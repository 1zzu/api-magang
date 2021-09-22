<?php 

    include "../api.php";

    $id = isset($_POST["id"]) ? $_POST["id"] : ""; 
    $staff_id = isset($_POST["staff_id"]) ? $_POST["staff_id"] : ""; 
    $status = isset($_POST["status"]) ? $_POST["status"] : "";
    
    $sql = "INSERT INTO `absen` (`id`, `staff_id`, `status`) 
    VALUES ('".$id."', '".$staff_id."', '".$status."')";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "absen telah direkam";
    } else{
        $msg = "absen gagal";
    }

    $response = array(
        'status' => "oke mantap",
        'msg' => $msg 
    );

    echo json_encode($response);
    
?>