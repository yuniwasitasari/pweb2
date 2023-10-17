<?php
//memanggil class database
include '../clasess/database.php';
//instansiasi class database
$db=new database;
?>


<!DOCTYPE html>
<html>
<head>
    <title>Yuni Wasita</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h3>Data Mahasiswa</h3>
<a href="input_dosen.php"class = "btn btn-primary">Tambah Dosen</a>
<table class="table table-striped">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Nip</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
 $no=1;
 foreach($db->tampil_dosen() as $x){
    ?>  
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['nip'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
          <a href="edit_dosen.php? id=<?php echo $x['id'];?> &aksi=edit"class = "btn btn-primary">Edit</a>  
          <a href="proses_dosen.php? id=<?php echo $x['id'];?> &aksi=hapus"class ="btn btn-danger">Hapus</a>  
        </td>
    </tr>
<?php
 }
 ?>
 </table>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">