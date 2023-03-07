<?php
require 'controller/Controller.php';
require 'controller/LopHocController.php';
require 'controller/SinhVienController.php';

$action = $_GET['action'] ?? 'index';

$controller = $_GET['controller'] ?? 'base';
switch ($controller) {
    case 'base':
        (new Controller())->menu();
        break;
    case 'lop_hoc':
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
        break;
        case 'sinh_vien':
            switch ($action) {
                case 'index':
                    (new SinhVienController())->index();
                    break;
    
                case 'create':
                    (new SinhVienController())->create();
                    break;
                case 'store':
                    (new SinhVienController())->store();
                    break;
                case 'edit':
                    (new SinhVienController())->edit();
                    break;
                case 'update':
                    (new SinhVienController())->update();
                    break;
                case 'delete':
                    (new SinhVienController())->delete();
                    break;
    
                default:
                    echo "Nhap linh tinh gi the";
            }
            break;
    default:
        echo "Nhap controller sai roi";
}
