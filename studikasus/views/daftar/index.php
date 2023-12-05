<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DaftarController.php';
require '../../index.php';
//instansiasi class database 
$database=new database;
$db=$database->getKoneksi();

$daftarController = new DaftarController($db);
$daftar =$daftarController->getAllDaftar();
?>


<div class="px-5">
<h3>Data User</h3>
<a href="tambahDaftar"class = "btn btn-primary mb-2 mt-2">Tambah User</a>
<table class="table table-striped">  
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Aksi</th>
</tr>
<?php
 $no=1;
 foreach($daftar as $x ){
    ?>  
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['username'] ?></td>
        <td><?php echo $x['password'] ?></td>
        <td><?php echo $x['level'] ?></td>
        <td>
          <a href="editDaftar?id=<?php echo $x['id']; ?>" class = "btn btn-warning">Edit</a>  
          <a href="hapusDaftar?id=<?php echo $x['id'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini')"class ="btn btn-danger">Hapus</a>  
        </td>
    </tr>
<?php
 }
 ?>
 </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">