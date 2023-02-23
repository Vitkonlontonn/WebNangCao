<?php
require 'connect.php';

//Lấy danh sách lớp


switch ($action) {
    case '':
        $sql = "SELECT * from lop_hoc";
        $result = mysqli_query($connect, $sql);
        break;
    case 'store':
        $sql = "insert into lop_hoc (ten_lop) value('$ten_lop')";
        mysqli_query($connect, $sql);
        break;
    case 'edit':
        $sql = "select * from lop_hoc where id_lop=$id_lop";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update lop_hoc set ten_lop='$ten_lop' where
        id_lop = $id_lop";
        mysqli_query($connect, $sql);
    case 'delete':
        $sql = "delete lop_hoc from lop_hoc  where
            id_lop = $id_lop";
        mysqli_query($connect, $sql);

        break;
}
