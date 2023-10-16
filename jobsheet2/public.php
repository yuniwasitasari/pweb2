<?php
//membuat class mahasiswa
class mahasiswa{
    //property public
    public $nama;
    private $nim="220302096";  

    //membuat public method
    public function tampilkan_nama(){
        //nilai kembalian
        return "Nama Saya Yuni Wasita</br>";
    }

    //membuat protected method
    function tampilkan_nim(){
        return "NIM Saya " .$this->nim;
    }
}
//instansiasi objek mahasiswa kedalam variable mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
?>