<?php
class manusia{

    private $nama_saya;
    function panggil_nama($saya){
     return  $this->nama_saya=$saya;
    }
}
class mahasiswa extends manusia
{
    protected $nama_mahasiswa;
    protected function nama_mahasiswa()
    {
        return " Nama Saya".$this->nama;
    }
    function panggil_mahasiswa($mahasiswa){
        return $this->nama_mahasiswa=$mahasiswa;
    }
}
//instansiasi class mahasiswa
$informatika = new mahasiswa();

$informatika->panggil_nama("Yuni");
$informatika->panggil_mahasiswa("Wasita");

//tampilkan isi property
echo "Nama Depan Saya : ". $informatika->panggil_nama("Yuni")."</br>";
echo "Nama Tengah : ". $informatika->panggil_mahasiswa("Wasita");
?>