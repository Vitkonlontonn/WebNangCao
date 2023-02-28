<?php
//Kết nối đến model => in ra view

switch ($action) {
    case '':
        require 'model/sinh_vien.php';
        require 'view/sinh_vien/index.php';
        break;
    case 'create':
        require 'model/lop_hoc.php';
        $cac_lop = lop_hoc_select_all();
        require 'view/sinh_vien/create.php';
        break;
    case 'store':
        $ten_sv = $_POST['ten_sv'];
        require 'model/sinh_vien.php';
        header('location:index.php?control=sinh_vien');
        break;
    case 'edit':
        $id = $_GET['id'];
        require 'model/sinh_vien.php';
        require 'view/sinh_vien/edit.php';
        break;
    case 'update':
        $id = $_POST['id'];
        $ten_sv = $_POST['ten_sv'];
        require 'model/sinh_vien.php';
        header('location:index.php?control=sinh_vien');
        break;
    case 'delete':
        $id = $_GET['id'];
        require 'model/sinh_vien.php';
        header('location:index.php?control=sinh_vien');
        break;
    default:
        echo 'Nhập sai ';
}
