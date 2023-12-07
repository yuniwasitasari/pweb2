<?php
require '../../index.php';
?>
<br>
<section id="pemasukan" class="hero d-flex align-items-center section-bg">
    <div class="container mb-0 mt-0">
        <div class="col-md-10 mx-auto">
            <div class="px-1">
                <br>
                <div class="px-5">
                    <h3 style="text-align: center">Edit Data Pemasukan</h3>
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

<form action="" method="post" style="width:40%; margin: auto;">
    <?php
    if($pemasukanData){
        ?>
        <div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" name= "tanggal" class="form-control" value="<?php echo $pemasukanData['tanggal'] ?>">
  </div>
  <div class="mb-3">
    <label for="anggaran" class="form-label">Anggaran</label>
    <input type="text" name= "anggaran" class="form-control" value="<?php echo $pemasukanData['anggaran'] ?>">
  </div>
  <div class="mb-3">
    <label for="keterangan" class="form-label">Keterangan</label>
    <input type="text" name= "keterangan" class="form-control" value="<?php echo $pemasukanData['keterangan'] ?>">
  </div>
  <div class="mb-3">
    <label for="nominal" class="form-label">Nominal</label>
    <input type="number" name= "nominal" class="form-control" value="<?php echo $pemasukanData['nominal'] ?>">
  </div>

<div class="mb-3">
    <button name="submit" class="btn btn-primary">Simpan</button>
</div>
<?php
    }
    ?>
</form>