<?php
include_once '../../config.php';
include_once '../../controllers/DaftarController.php';

$database= new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    $daftarController=new DaftarController($db);
    $result = $daftarController->createDaftar($nama,$username, $password,$level);

    if($result){
        header("location:daftar");
    }else{
        header("location:tambah.php");
    }
}
?>