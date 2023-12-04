<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';
//instansiasi class database 
$database=new database;
$db=$database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa =$mahasiswaController->getAllMahasiswa();
?>


<div class="px-5">
<h3>Data Mahasiswa</h3>
<a href="tambahMahasiswa"class = "btn btn-primary mb-2 mt-2">Tambah Mahasiswa</a>
<table class="table table-striped">  
<tr>
    <th>No</th>
    <th>Nim</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tempat Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Aksi</th>
</tr>
 <?php
 $no=1;
 foreach($mahasiswa as $x ){
    ?>  
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td><?php echo $x['tempat_lahir'] ?></td>
        <td><?php echo $x['jenis_kelamin'] ?></td>
        <td><?php echo $x['agama'] ?></td>
        <td>
          <a href="editMahasiswa?id=<?php echo $x['id']; ?>" class = "btn btn-warning">Edit</a>  
          <a href="hapusMahasiswa?id=<?php echo $x['id'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini')"class ="btn btn-danger">Hapus</a>  
        </td>
    </tr>
<?php
 }
 ?>
 </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
