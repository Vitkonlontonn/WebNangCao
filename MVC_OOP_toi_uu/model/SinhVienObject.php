<?php 

//Chứa các thuộc tính của lớp học
class SinhVienObject 
{
    private $id;
    private $ten_sv;
    private $id_lop;

    public function __construct( $params)
    {
        $this->id = $params['id'];
        $this->ten_sv = $params['ten_sv'];
        $this->id_lop = $params['id_lop'];
    }
    



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of ten_sv
     */ 
    public function getTen_sv()
    {
        return $this->ten_sv;
    }

    /**
     * Set the value of ten_sv
     *
     * @return  self
     */ 
    public function setTen_sv($ten_sv)
    {
        $this->ten_sv = $ten_sv;

        return $this;
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
}