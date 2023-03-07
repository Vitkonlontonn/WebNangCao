<?php

class SinhVienController
{
    public function index(): void
    {
        require 'model/SinhVien.php';
        //Ket noi db => tra ve da lop
        
        $arr = (new SinhVien())->all();

        require 'view/SinhVien/index.php';
    }

    public function create(): void
    {
        require 'view/LopHoc/create.php';
    }

    public function store(): void
    {
        
        require 'model/LopHoc.php';
        (new LopHoc())-> store($_POST);

    }

    public function edit(): void
    {
        $id_lop = $_GET['id_lop'];
        
         require 'model/LopHoc.php';
         $each = (new LopHoc())-> find($id_lop);
         require 'view/LopHoc/edit.php';
    }
    public function update(): void
    {
        require 'model/LopHoc.php';
         $each = (new LopHoc())-> update($_POST);
        
    }
    public function delete(): void
    {
        require 'model/LopHoc.php';
         (new LopHoc())-> delete($_GET['id_lop']);

    }
}
