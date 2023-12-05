<?php

include_once '../../config.php';
include_once '../../controllers/PemasukanController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])){
    $id=$_GET['id'];

    $PemasukanController=new PemasukanController($db);
    $result=$PemasukanController->deletePemasukan($id);

    if ($result){
        header("location:pemasukan");
    }else {
        echo "Gagal menghapus data";
    }
}