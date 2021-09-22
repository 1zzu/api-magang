<?php
    include "../api.php";

    $id            = isset($_POST["id"]) ? $_POST["id"] : "";
    $subjek     = isset($_POST["subjek"]) ? $_POST["subjek"] : "";
    $deskSingkat     = isset($_POST["deskSingkat"]) ? $_POST["deskSingkat"] : "";
    $deskripsi     = isset($_POST["deskripsi"]) ? $_POST["deskripsi"] : "";

    // $baseUrl        = "http://192.168.43.87/api-magang/pengumuman/";
    // $target_dir     = "uploads/";
    // $target_file    = $target_dir . str_replace(' ', '-', trim(addslashes($_FILES["foto"]["name"])));

    // $imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // $check          = $_FILES["foto"]["tmp_name"];

    // if($check !== false) {
    //   $foto         = $baseUrl . $target_file;
    //   move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    // } else{
    //   $foto         = '';
    // }

    $sql = "INSERT INTO `pengumuman` (`id`, `subjek`, `deskSingkat`, `deskripsi`) 
    VALUES ('".$id."', '".$subjek."', '".$deskSingkat."', '".$deskripsi."')";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "pengumuman berhasil disimpan";
    } else{
        $msg = "pengumuman gagal";
    }

    $response = array(
        'status' => "oke mantap",
        'msg' => $msg 
    );

    echo json_encode($response);

?>
