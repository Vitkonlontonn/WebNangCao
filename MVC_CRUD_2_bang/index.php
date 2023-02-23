<?php
//Khi vào cần hiển thị menu
//Switch case control => chuyển sang folder controller để switch case action
$control = '';
$action = '';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
if (!empty($_GET['control'])) {
    $control = $_GET['control'];
}


switch ($control) {
    case '';
        require 'controller/root.php';
        break;
    case 'lop_hoc';
        require 'controller/lop_hoc.php';
        break;
    case 'sinh_vien';
        require 'controller/sinh_vien.php';
        break;
    default;
        echo ("KHong ton tai");
        break;
}
