<?php
//membuat class
    class mahasiswa{
//membuat property
var $nim;
var $nama;
var $alamat;

function __construct()
{
    echo "Saya Mahasiswa Teknik Informatika";
    echo "<br>";

}

function __destruct()
{
    echo "Politeknik Negeri Cilacap";
}
//method untuk menampilkan nama
function tampil_nama(){
return "Nama saya Yuni Wasita Sari" ;
}


function tampil_mahasiswa(){
    return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";

}
//method untuk menampilkan nama
function tampil_alamat(){
    //isi method 
}
}

//membuat objek nama_mahasiswa
$nama_mahasiswa= new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();

class dosen{
    var $nidn;
    var $nama;
    var $prodi;

    function tampil_nama(){
        return "</br> Nama saya adalah Yuni </br>";}
}
//membuat objek nama_dosen
$nama_dosen=new dosen();

//menampilkan objek ke layar
echo $nama_dosen->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();
?>