<?php
require '../../index.php';
?>
<section id="daftar" class="hero d-flex align-items-center section-bg">
<div class="container mb-0 mt-0" >
<div class="col-md-10">
<div class="px-1">
    <br>
    <br>
<div class="px-3">
<h3>Tambah Data User</h3>
<form action="proses_tambahDaftar" method="post">
<table class="table table-striped">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name= "nama" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" name= "username" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" name= "password" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="level" class="form-label">Level</label>
    <select name= "level" class="form-control">
    <option disabled selected>-- PILIH --</option>
    <option value = "sekretaris">Sekretaris</option>
    <option value = "lurah">Lurah</option>
    <option value = "kaur">Kaur</option>
</select>
</div>

  <table>
  <tr>
        <td></td>
        <td><input type="submit" name="submit" class ="btn btn-success" value="simpan" onclick="showAlert()" ></td>
    </tr>
  </table>
  </table>
</form>
<script>
    function showAlert(){
        alert ("Data Mahasiswa berhasil ditambahkan")
    }
    </script>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
