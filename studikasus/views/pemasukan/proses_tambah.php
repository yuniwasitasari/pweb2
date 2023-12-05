<?php
include_once '../../config.php';
include_once '../../controllers/PemasukanController.php';

$database= new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $tanggal=$_POST['tanggal'];
    $anggaran=$_POST['anggaran'];
    $keterangan=$_POST['keterangan'];
    $nominal=$_POST['nominal'];

    $pemasukanController=new PemasukanController($db);
    $result = $pemasukanController->createPemasukan($tanggal,$anggaran, $keterangan,$nominal);

    if($result){
        header("location:pemasukan");
    }else{
        header("location:tambah.php");
    }
}
?>