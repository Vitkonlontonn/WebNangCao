<?php
require 'model/LopHocObject.php';
require 'Connect.php';

class LopHoc
{
    public function all(): array
    {

        $sql = 'select * from lop_hoc';
        $result = (new Connect())->select($sql);

        //Bien doi ve mang object

        $arr = [];
        //Với mỗi kết quả trong result, tạo mới 1 object rồi đưa vào mảng
        //Truyền data thô vào object
        foreach ($result as $row) {
            $object = (new LopHocObject($row));
            $arr[] = $object;
        }
        return $arr;
    }

    public function store($params): void
    {
        $object = new LopHocObject($params);
        $sql = "INSERT INTO lop_hoc(ten_lop) VALUE('" . $object->getTen_lop() . "')";
        (new Connect())->execute($sql);
    }

    public function find($id_lop): object
    {

        $sql = "select * from lop_hoc where id_lop = '$id_lop'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);
        $object = new LopHocObject($each);

        return $object;
    }
    public function update($params): void
    {
        $object = new LopHocObject($params);
        $sql = "update lop_hoc set ten_lop ='" . $object->getTen_lop() . "'
         where id_lop = '" . $object->getId_lop() . "'";

        (new Connect())->execute($sql);
    }
    public function delete($params): void
    {

        $sql = "delete from lop_hoc 
         where id_lop = '$params'";
         //die ($sql);
        (new Connect())->execute($sql);
    }
}
