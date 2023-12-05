<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <a class="nav-link" href="mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen">Dosen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="px-3 py-3">
<h3>Tambah Data Mahasiswa</h3>
<form action="proses_tambahMahasiswa" method="post">
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
