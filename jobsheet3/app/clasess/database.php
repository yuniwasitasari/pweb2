<?php

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi =mysqli_connect($this->host, $this->username, $this->password, $this->db);

    }

    function tampil_mahasiswa(){
    $data=mysqli_query($this->koneksi, "select*from mahasiswa");
    while($d=mysqli_fetch_array($data)){
        $hasil[]= $d;
    } 
    return $hasil;   
    }

    function tambah_mhs($nim,$nama,$alamat){
        mysqli_query($this->koneksi, "insert into mahasiswa(nim,nama,alamat)values('$nim','$nama','$alamat')");
    }

    function edit($id){
        $data=mysqli_query($this->koneksi,"select * from mahasiswa where id='$id'");
        while($d=mysqli_fetch_array($data)){
        $hasil[]=$d;    
        }
        return $hasil;
    }
}
?>