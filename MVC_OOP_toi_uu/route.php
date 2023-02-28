<?php

require 'controller/LopHocController.php';

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        (new LopHocController())->index();
        break;

    case 'create':
        (new LopHocController())->create();
        break;
    case 'store':
        (new LopHocController())->store();
        break;
    case 'edit':
        (new LopHocController())->edit();
        break;
    case 'update':
        (new LopHocController())->update();
        break;
    case 'delete':
        (new LopHocController())->delete();
        break;

    default:
        echo "Nhap linh tinh gi the";
}
