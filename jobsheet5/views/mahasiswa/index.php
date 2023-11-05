<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

//instansiasi class database 
$database=new database;
$db=$database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa =$mahasiswaController->getAllMahasiswa();
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <div class="px-3 py-3">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dosen.php">Dosen</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="px-5">
<h3>Data Mahasiswa</h3>
<a href="tambah.php"class = "btn btn-primary mb-2 mt-2">Tambah Mahasiswa</a>
<table class="table table-striped">  
<tr>
    <th>No</th>
    <th>Nim</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
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
        <td><?php echo $x['tanggal_lahir'] ?></td>
        <td><?php echo $x['jenis_kelamin'] ?></td>
        <td><?php echo $x['agama'] ?></td>
        <td>
          <a href="edit_mhs.php? id=<?php echo $x['id'];?> &aksi=edit"class = "btn btn-warning">Edit</a>  
          <a href="proses_mhs.php? id=<?php echo $x['id'];?> &aksi=hapus" onclick="return confirm('Apakah anda yakin akan menghapus data ini')"class ="btn btn-danger">Hapus</a>  
        </td>
    </tr>
<?php
 }
 ?>
 </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
