<?php
require '../../index.php';
?>
<br>
<div class="px-5">
<h3>Edit Data Pemasukan</h3>
<br>

<?php
include_once '../../config.php';
include_once '../../controllers/PemasukanController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $pemasukanController = new PemasukanController($db);
    $pemasukanData = $pemasukanController->getPemasukanById($id);

    if ($pemasukanData){
        if (isset($_POST['submit'])){
            $tanggal = $_POST['tanggal'];
            $anggaran = $_POST['anggaran'];
            $keterangan = $_POST['keterangan'];
            $nominal = $_POST['nominal'];
            $result = $pemasukanController->updatePemasukan($id,$tanggal, $anggaran, $keterangan, $nominal);

            if ($result){
                header("location:pemasukan");
            }else {
                header("location:editPemasukan");
            }
        }
    }else{
        echo "Mahasiswa tidak ditemukan";
    }
}
?>

<?php
if ($pemasukanData){
?>

    <form action="" method="post">
            <?php foreach ($pemasukanData as $d => $value) { ?>
                <tr>
                    <td>
                        <label for="<?php echo $d; ?>" class="form-label"><?php echo $d; ?></label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>" >
                    </td>
                </tr>
            <?php } ?>
            <br>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
}
?>

