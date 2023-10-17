<?php
//membuat class
    class mahasiswa{
//membuat property
var $nim;
var $nama;
var $alamat;

//method untuk menampilkan nama
function tampil_nama(){
return "Nama saya Yuni Wasita Sari</br>";
}

//method untuk menampilkan alamat
function tampil_alamat(){
return "Alamat Jalan Tembaga";
}
}

//membuat objek nama_mahasiswa
$nama_mahasiswa= new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_alamat();

class dosen{
    var $nidn;
    var $nama;
    var $prodi;

    function tampil_nama(){
        return "</br> Nama saya adalah Yuni";}
}
//membuat objek nama_dosen
$nama_dosen=new dosen();

//menampilkan objek ke layar
echo $nama_dosen->tampil_nama();
?>