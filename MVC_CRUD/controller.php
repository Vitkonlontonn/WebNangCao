<?php
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case '':
        
        require 'model.php';
        require 'view/index.php';
        break;

    case 'create':
        require 'view/create.php';
        break;

    case 'store':
        $ten_sv = $_POST['ten_sv'];
        require 'model.php';
        header('location:index.php');
        break;

    case 'edit':
        $id = $_GET['id'];
        require 'model.php';
        require 'view/edit.php';
        break;
    case 'update':
        $id = $_POST['id'];
        $ten_sv = $_POST['ten_sv'];
        require 'model.php';
        header('location:index.php');
        break;
    case 'delete':
        $id= $_GET['id'];
        require 'model.php';
        header('location:index.php');
        break;
    default:
        echo "Không nhập vớ vẩn";
}
