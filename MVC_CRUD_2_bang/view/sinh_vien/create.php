<form action="?action=store&control=lop_hoc" method="post" >
    Tên sinh viên: <input type="text" name="ten_lop">
    <br>
    Lớp 
    <select name="" id="">
    <?php foreach ($cac_lop as $lop_hoc) { ?>
    <option value="<?php echo $lop_hoc['id_lop']?>">
    <?php echo $lop_hoc['ten_lop']?>
</option>
   <?php } ?>
    </select>
    <button>Thêm</button>
</form>