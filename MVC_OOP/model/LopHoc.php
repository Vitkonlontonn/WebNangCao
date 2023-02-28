<?php
class LopHoc 
{
    public function all ()
    {
        $connect = mysqli_connect('localhost','root','', 'chuyen_sau' );
        mysqli_set_charset( $connect, 'utf8' );
        $sql ='select * from lop_hoc';
        $result = mysqli_query($connect, $sql);

        $arr=[];
        foreach ($result as $row)
        {
            $object = new LopHocObject();
            $object -> id_lop= $row['id_lop'];
            $object -> ten_lop = $row['ten_lop'];
            $object -> ten_lop_extend = $row['ten_lop_extend'];

            $arr[] = $object;

        }
    }
}