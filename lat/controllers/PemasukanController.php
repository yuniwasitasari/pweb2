<?php
include_once '../../models/Pemasukan.php';

class PemasukanController{
    private $model;

    public function __construct($db){
        $this->model= new Pemasukan($db);
    }

    public function getAllPemasukan(){
        return $this->model->getAllPemasukan();
    }

    public function createPemasukan($tanggal,$anggaran,$keterangan,$nominal){
        return $this->model->createPemasukan($tanggal,$anggaran,$keterangan,$nominal);
    }
    public function getPemasukanById($id){
        return $this->model->getPemasukanById($id);
    }
    public function updatePemasukan($id,$tanggal,$anggaran,$keterangan,$nominal){
        return $this->model->updatePemasukan($id,$tanggal,$anggaran,$keterangan,$nominal);
    }
    public function deletePemasukan($id){
        return $this->model->deletePemasukan($id);
    }
}
?>