<?php
$connect = mysqli_connect('localhost', 'root', '', 'chuyen_sau');
mysqli_set_charset($connect, 'utf8');

//$each =mysqli_fetch_array($result);

switch ($action) {
    case '':
        $sql = "select * from sinh_vien";
        $result = mysqli_query($connect, $sql);
        break;
    case 'store':

        $sql = " insert into sinh_vien (ten_sv) value ('$ten_sv')";
        mysqli_query($connect, $sql);
        break;

    case 'edit':

        $sql = " select * from sinh_vien where id= $id";
        $result=mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        break;

    case 'update':
        $sql = " update sinh_vien set ten_sv = '$ten_sv' where id = $id";
        mysqli_query($connect, $sql);
        break;
    case 'delete':
        $sql = " delete sinh_vien from sinh_vien where id=$id";
        mysqli_query($connect, $sql);
        break;
    default:
        echo "Không nhập vớ vẩn";
}
