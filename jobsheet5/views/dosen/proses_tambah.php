<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database= new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $nip=$_POST['nip'];
    $alamat=$_POST['alamat'];


    $dosenController=new DosenController($db);
    $result = $dosenController->createdosen($nama,$nip,$alamat);

    if($result){
        header("location:dosen");
    }else{
        header("location:tambah.php");
    }
}
?>