<?php
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case '':
        
        require 'model.php';
        require 'view/index.php';
        //header('view/index.php');
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

        break;
    case 'update':

        break;
    case 'delete':

        break;
    default:
        echo "Không nhập vớ vẩn";
}
