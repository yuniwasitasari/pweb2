<?php

class databse{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "rumah_sakit";
    var $koneksi;
}

function __construct(){
    $this->koneksi=mysqli_connect($this->host, $this->username,$this->password,$this->db,$koneksi);
}

function tampil_farmasi(){
    $data = mysqli_query($this->koneksi, "select * from farmasi");
    while ($d = mysqli_fetch_array($data)){
        $hasil[] =$d;
    }
    return $hasil;
}

?>

