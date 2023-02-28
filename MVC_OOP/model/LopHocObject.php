<?php 
class LopHocObject {
 public $id_lop;
 public $ten_lop;
 public $ten_lop_extend;

 public function getAllTen()
 {
    return $this->ten_lop. '-'. $this->ten_lop_extend;
 }
 
}