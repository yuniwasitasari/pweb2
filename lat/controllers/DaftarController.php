<?php
include_once '../../models/Daftar.php';

class DaftarController{
    private $model;

    public function __construct($db){
        $this->model= new daftar($db);
    }

    public function getAllDaftar(){
        return $this->model->getAllDaftar();
    }

    public function createDaftar($nama,$username,$password,$level){
        return $this->model->createDaftar($nama,$username,$password,$level);
    }
    public function getDaftarById($id){
        return $this->model->getDaftarById($id);
    }
    public function updateDaftar($id,$nama,$username,$password,$level){
        return $this->model->updateDaftar($id,$nama,$username,$password,$level);
    }
    public function deleteDaftar($id){
        return $this->model->deleteDaftar($id);
    }
}
?>