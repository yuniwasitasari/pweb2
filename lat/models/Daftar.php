<?php
class Daftar{
    private $koneksi;

    public function __construct($db){
        $this->koneksi = $db;

    }
    public function getAllDaftar(){
        $query="SELECT * FROM daftar";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDaftar($nama,$username,$password,$level){
        $query ="INSERT INTO daftar (nama,username,password,level) values ('$nama','$username','$password','$level')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function getDaftarById($id){
        $query = "SELECT * FROM daftar where id=$id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateDaftar($id,$nama,$username,$password,$level){
    $query="UPDATE daftar set nama='$nama',username='$username',password='$password',level='$level' where id='$id'";  
    $result = mysqli_query($this->koneksi, $query);
    if ($result){
        return true;
    } else{
        return false;
    }
    }
    public function deleteDaftar($id){
        $query = "DELETE FROM daftar WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else{
            return false;
        }
    }
}
?>