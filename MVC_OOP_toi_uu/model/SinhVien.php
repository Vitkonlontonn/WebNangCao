<?php
require 'model/SinhVienObject.php';
require 'Connect.php';

class SinhVien
{
    private $table='sinh_vien';
    public function all(): array
    {

        $sql = "select * from $this->table";
        $result = (new Connect())->select($sql);


        $arr = [];
       
        foreach ($result as $row) {
            $object = (new SinhVienObject($row));
            $arr[] = $object;
        }
        return $arr;
    }

    public function store($params): void
    {
        $object = new SinhVienObject($params);
        $sql = "INSERT INTO $this->table (ten_sv, id_lop) VALUE('" . $object->getTen_sv().','.$object -> getId_lop() . "')";
        (new Connect())->execute($sql);
    }

    public function find($id): object
    {

        $sql = "select * from $this->table where id = '$id'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);
        $object = new SinhVienObject($each);

        return $object;
    }
    public function update($params): void
    {
        $object = new SinhVienObject($params);
        $sql = "update $this->table set ten_sv ='" . $object->getTen_sv() . "'
         where id = '" . $object->getId() . "'";

        (new Connect())->execute($sql);
    }
    public function delete($params): void
    {

        $sql = "delete from $this->table 
         where id_lop = '$params'";
         //die ($sql);
        (new Connect())->execute($sql);
    }
}
