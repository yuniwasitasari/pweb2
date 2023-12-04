<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//instansiasikan class database
$database = new database;
$db = $database -> getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController ->getAllDosen();
?>

<div class="px-2">
<br>
<h3>Data Dosen</h3>
<a class="btn btn-primary mb-2 mt-2" href="tambahDosen">Tambah Dosen</a>

<div class="table-responsive small">
<table class="table table-striped table-border">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
foreach($dosen as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['nama'] ?></td>
    <td><?php echo $x['nip'] ?></td>
    <td><?php echo $x['alamat'] ?></td>
    <td>
        <a class="btn btn-warning" href="editDosen?id=<?php echo $x['id']; ?> ">Edit</a>
        <a class="btn btn-danger" href="hapusDosen?id=<?php echo $x['id']; ?> "onclick="return confirm('Apakah yakin akan menghapus...?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>