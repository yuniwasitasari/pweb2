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
<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php? aksi=update" method="post">
<table class="table table-striped">
    <?php
    foreach($db->edit($_GET['id'])as $d){
    ?>
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id']?>">
                <input type="text" name= "nim" value="<?php echo $d['nim']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name= "nama" value="<?php echo $d['nama']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class ="btn btn-success" value="simpan" ></td>
        </tr>
</table>
<?php
}
?>
</form>
</table>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">