<?php 

    include "../api.php";

    $id = isset($_POST["id"]) ? $_POST["id"] : ""; 
    $staff_id = isset($_POST["staff_id"]) ? $_POST["staff_id"] : ""; 
    $perihal = isset($_POST["perihal"]) ? $_POST["perihal"] : "";
    $hingga = isset($_POST["hingga"]) ? $_POST["hingga"] : "";
    
    $sql = "INSERT INTO `lembur` (`id`, `staff_id`, `perihal`, `hingga`) 
    VALUES ('".$id."', '".$staff_id."', '".$perihal."', '".$hingga."')";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "absen lembur telah direkam";
    } else{
        $msg = "absen lembur gagal";
    }

    $response = array(
        'status' => "oke mantap",
        'msg' => $msg 
    );

    echo json_encode($response);
    
?>