<?php
class HomeController{
    public function home(){
        header("location:http://localhost/studikasus/index.php");
    }
    public function pemasukan(){
        header("location:http://localhost/studikasus/views/pemasukan/index.php");
    }
    public function dosen(){
        header("location:http://localhost/studikasus/views/daftar/index.php");
    }
    
}