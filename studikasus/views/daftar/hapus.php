<?php

include_once '../../config.php';
include_once '../../controllers/DaftarController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id=$_GET['id'];

    $DaftarController=new DaftarController($db);
    $result=$DaftarController->deleteDaftar($id);

    if ($result){
        header("location:daftar");
    }else {
        echo "Gagal menghapus data";
    }
}