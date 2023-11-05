<!DOCTYPE html>
<html>
<head>
    <title>Yuni Wasita</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<div class="px-5 py-5">
<h3>Tambah Data Mahasiswa</h3>
<form action="proses_tambah.php?" method="post">
<table class="table table-striped">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" name= "nim" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name= "nama" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" name= "alamat" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
    <input type="text" name= "tempat_lahir" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
    <input type="date" name= "tanggal_lahir" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control">
    <option value = "L">laki-laki</option>
    <option value = "P">Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="agama" class="form-label">Agama</label>
    <select name= "agama" class="form-control">
    <option value = "islam">islam</option>
    <option value = "kristen">kristen</option>
    <option value = "katolik">katolik</option>
    <option value = "hindu">hindu</option>
    <option value = "budha">budha</option>
    <option value = "konghucu">konghucu</option>
</select>
    
  </div>
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
