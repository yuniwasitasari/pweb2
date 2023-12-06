<?php
require '../../index.php';
?>

<section id="daftar" class="hero d-flex align-items-center section-bg">
<div class="container mb-0 mt-0" >
<div class="col-md-10">
<div class="px-1">
<br>
<div class="px-5">
<h3>Edit Data User</h3>
<br>

<?php
include_once '../../config.php';
include_once '../../controllers/DaftarController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $daftarController = new DaftarController($db);
    $daftarData = $daftarController->getDaftarById($id);

    if ($daftarData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = $_POST['level'];
            $result = $daftarController->updateDaftar($id, $nama, $password, $password, $level);

            if ($result) {
                header("location:daftar");
            } else {
                header("location:editDaftar");
            }
        }
    } else {
        echo "Mahasiswa tidak ditemukan";
    }
}
?>

<?php if ($daftarData) { ?>

    <form action="" method="post">
       
            <?php foreach ($daftarData as $d => $value) { ?>
                <tr>
                    <td>
                        <label for="<?php echo $d; ?>" class="form-label"><?php echo $d; ?></label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>" >
                    </td>
                </tr>
                <br>
            <?php } ?>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php } ?>