<?php
class database{
    var $host ="localhost";
    var $username ="root";
    var $password = "";
    var $db ="akademik";
    var $koneksi;

    function getKoneksi(){
        $this->koneksi = mysqli_connect($this->host, $this->username,  $this->password, $this->db);
        if ($this->koneksi){
           
        }
        return $this->koneksi;
    }
}
?>