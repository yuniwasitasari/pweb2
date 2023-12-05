<?php
require '../../index.php';
?>
<div class="px-5">
<h3>Tambah Data Pemasukan</h3>
<form action="proses_tambahPemasukan" method="post">
<table class="table table-striped">
  <div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" name= "tanggal" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="anggaran" class="form-label">Anggaran</label>
    <input type="text" name= "anggaran" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="keterangan" class="form-label">keterangan</label>
    <input type="text" name= "keterangan" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="nominal" class="form-label">nominal</label>
    <input type="int" name= "nominal" class="form-control" >
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
