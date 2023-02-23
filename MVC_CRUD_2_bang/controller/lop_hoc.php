<?php
//Kết nối đến model => in ra view

switch ($action) {
    case '':
        require 'model/lop_hoc.php';
        require 'view/lop_hoc/index.php';
        break;
    case 'create':
        require 'view/lop_hoc/create.php';
        break;
    case 'store':
        $ten_lop = $_POST['ten_lop'];
        require 'model/lop_hoc.php';
        header('location:index.php?control=lop_hoc');
        break;
    case 'edit':
        $id_lop = $_GET['id_lop'];
        require 'model/lop_hoc.php';
        require 'view/lop_hoc/edit.php';
        break;
    case 'update':
        $id_lop = $_POST['id_lop'];
        $ten_lop = $_POST['ten_lop'];
        require 'model/lop_hoc.php';
        header('location:index.php?control=lop_hoc');
        break;
    case 'delete':
        $id_lop = $_GET['id_lop'];
        require 'model/lop_hoc.php';
        header('location:index.php?control=lop_hoc');
        break;
    default:
        echo 'Nhập sai ';
}
