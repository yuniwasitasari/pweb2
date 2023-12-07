<?php
require '../../index.php';
?>

<section id="daftar" class="hero d-flex align-items-center section-bg">
<div class="container mb-0 mt-0" >
<div class="col-md-10">
<div class="px-1">
<br>
<div class="px-5">
    <br>
<h3 style="text-align: center">Edit Data User</h3>
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

<form action="" method="post" style="width:40%; margin: auto;">
    <?php
    if($daftarData){
        ?>
        <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name= "nama" class="form-control" value="<?php echo $daftarData['nama'] ?>">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" name= "username" class="form-control" value="<?php echo $daftarData['username'] ?>">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" name= "password" class="form-control" value="<?php echo $daftarData['password'] ?>">
  </div>
  <div class="mb-3">
    <label for="level" class="form-label">Level</label>
    <select name= "level" class="form-control">
    <option value="sekretaris" <?php if ($daftarData['level'] === 'sekretaris') echo 'selected'; ?>>Sekretaris</option>
    <option value="lurah" <?php if ($daftarData['level'] === 'lurah') echo 'selected'; ?>>Lurah</option>
    <option value="kaur" <?php if ($daftarData['level'] === 'kaur') echo 'selected'; ?>>Kaur</option>
</select>
</div>
<div class="mb-3">
    <button name="submit" class="btn btn-primary">Simpan</button>
</div>
<?php
    } 
    ?>   
</form>