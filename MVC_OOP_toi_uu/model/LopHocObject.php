<?php 

//Chứa các thuộc tính của lớp học
class LopHocObject 
{
    private $id_lop;
    private $ten_lop;

    public function __construct($row)
    {
        $this-> id_lop = $row['id_lop'] ?? '';
        $this-> ten_lop = $row['ten_lop'];
    }
    

    /**
     * Get the value of id_lop
     */ 
    public function getId_lop()
    {
        return $this->id_lop;
    }

    /**
     * Set the value of id_lop
     *
     * @return  self
     */ 
    public function setId_lop($id_lop)
    {
        $this->id_lop = $id_lop;

        return $this;
    }

    /**
     * Get the value of ten_lop
     */ 
    public function getTen_lop()
    {
        return $this->ten_lop;
    }

    /**
     * Set the value of ten_lop
     *
     * @return  self
     */ 
    public function setTen_lop($ten_lop)
    {
        $this->ten_lop = $ten_lop;

        return $this;
    }
}