<?php
class Pemasukan{
    private $koneksi;

    public function __construct($db){
        $this->koneksi = $db;

    }
    public function getAllPemasukan(){
        $query="SELECT * FROM pemasukan";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPemasukan($tanggal,$anggaran,$keterangan,$nominal){
        $query ="INSERT INTO pemasukan (tanggal,anggaran,keterangan,nominal) values ('$tanggal','$anggaran','$keterangan','$nominal')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function getPemasukanById($id){
        $query = "SELECT * FROM pemasukan where id=$id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePemasukan($id,$tanggal,$anggaran,$keterangan,$nominal){
    $query="UPDATE pemasukan set tanggal='$tanggal',anggaran='$anggaran',keterangan='$keterangan',nominal='$nominal' where id='$id'";  
    $result = mysqli_query($this->koneksi, $query);
    if ($result){
        return true;
    } else{
        return false;
    }
    }
    public function deletePemasukan($id){
        $query = "DELETE FROM pemasukan WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else{
            return false;
        }
    }
}
?>