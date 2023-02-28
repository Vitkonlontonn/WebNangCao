<?php 

class Connect
{
    private $server = 'localhost';
    private $user = 'root';
    private $password ='';
    private $database = 'chuyen_sau';
     
    public function cnt () {
        $connect = mysqli_connect('localhost', 'root', '', 'chuyen_sau');
        mysqli_set_charset($connect, 'utf8');
        return $connect;
    }

    //SQL cần trả kết quả
    public function select($sql) {
        $connect = $this -> cnt();
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);
        return $result;
    }

    //SQL chỉ cần thực thi
    public function execute($sql):void {
        $connect = $this -> cnt();
        mysqli_query($connect, $sql);
        mysqli_close($connect);

    }

}