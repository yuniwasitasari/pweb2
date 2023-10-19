<?php
include '../clasess/database.php';
$db=new database();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Yuni Wasita</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="px-5 py-5">
<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php? aksi=update" method="post">
<table class="table table-striped">
    <?php
    foreach($db->edit($_GET['id'])as $d){
    ?>
    <div class="mb-3">
    <label class="form-label">NIM</label>
    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']?>">
    <input type="text" class="form-control" name= "nim" value="<?php echo $d['nim']?>">
  </div>
    <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name= "nama" value="<?php echo $d['nama']?>">
  </div>
    <div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="alamat" cols="30" rows="5" class="form-control" ><?php echo $d['alamat']?></textarea>
  </</div>
  <input type="submit" class ="btn btn-primary" value="simpan" onclick="showAlert()" >
  <script>
    function showAlert(){
        alert ("Data mahasiswa berhasil ditambahkan")
    }
    </script>
  </table>
  </table>
</form>
</table>
<?php
}
?>
</form>
</table>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">