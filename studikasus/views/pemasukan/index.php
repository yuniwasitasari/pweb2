<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/PemasukanController.php';
require '../../index.php';
//instansiasi class database 
$database=new database;
$db=$database->getKoneksi();

$pemasukanController = new PemasukanController($db);
$pemasukan =$pemasukanController->getAllPemasukan();
?>


<div class="px-5">
<h3>Data Pemasukan</h3>
<a href="tambahPemasukan"class = "btn btn-primary mb-2 mt-2">Tambah Pemasukan</a>
<table class="table table-striped">  
<tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Anggaran</th>
    <th>keterangan</th>
    <th>nominal</th>
    <th>Aksi</th>
</tr>
<?php
 $no=1;
 foreach($pemasukan as $x ){
    ?>  
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x['tanggal'] ?></td>
        <td><?php echo $x['anggaran'] ?></td>
        <td><?php echo $x['keterangan'] ?></td>
        <td><?php echo $x['nominal'] ?></td>
        <td>
          <a href="editPemasukan?id=<?php echo $x['id']; ?>" class = "btn btn-warning">Edit</a>  
          <a href="hapusPemasukan?id=<?php echo $x['id'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini')"class ="btn btn-danger">Hapus</a>  
        </td>
    </tr>
<?php
 }
 ?>
 </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">