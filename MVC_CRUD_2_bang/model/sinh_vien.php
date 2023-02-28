<?php
require 'model/connect.php';
$connect=connect();

switch ($action) {
    case '':
        $sql = "SELECT 
        sinh_vien.*, 
        lop_hoc.ten_lop as ten_lop
        from sinh_vien
        left join lop_hoc on sinh_vien.id_lop=lop_hoc.id_lop";
        $result = mysqli_query($connect, $sql);
        break;
    case 'store':
        $sql = "insert into sinh_vien (ten_lop) value('$ten_lop')";
        mysqli_query($connect, $sql);
        break;
    case 'edit':
        $sql = "select * from sinh_vien where id_lop=$id_lop";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update sinh_vien set ten_lop='$ten_lop' where
        id_lop = $id_lop";
        mysqli_query($connect, $sql);
    case 'delete':
        $sql = "delete sinh_vien from sinh_vien  where
            id_lop = $id_lop";
        mysqli_query($connect, $sql);

        break;
}
