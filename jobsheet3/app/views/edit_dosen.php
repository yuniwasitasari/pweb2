<?php
include '../clasess/database.php';
$db=new database();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>


  <div class="px-5 py-5">
<h3>Edit Data Dosen</h3>
<form action="proses_dosen.php? aksi=update" method="post">
<table class="table table-striped">
    <?php
    foreach($db->edit_dosen($_GET['id'])as $d){
    ?>
    <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']?>">
    <input type="text" class="form-control" name= "nama" value="<?php echo $d['nama']?>">
  </div>
    <div class="mb-3">
    <label class="form-label">Nip</label>
    <input type="text" class="form-control" name= "nip" value="<?php echo $d['nip']?>">
  </div>
    <div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="alamat" cols="30" rows="5" class="form-control" ><?php echo $d['alamat']?></textarea>
  </</div>
  <input type="submit" class ="btn btn-success" value="simpan" onclick="showAlert()" >
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