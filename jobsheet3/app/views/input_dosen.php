<!DOCTYPE html>
<html>
<head>
    <title>Yuni Wasita</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<div class="px-5 py-5">
<h3>Tambah Data Dosen</h3>
<form action="proses_dosen.php? aksi=tambah" method="post">
<table class="table table-striped">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name= "nama" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="nip" class="form-label">NIP</label>
    <input type="text" name= "nip" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" name= "alamat" class="form-control" >
  </div>
  </div>
  <table>
  <tr>
        <td></td>
        <td><input type="submit" class ="btn btn-success" value="simpan" class="alert alert-primary" ></td>
    </tr>
  </table>
  </table>
</form>
<script>
   <div class="alert alert-primary" role="alert">
   </div>
    </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">