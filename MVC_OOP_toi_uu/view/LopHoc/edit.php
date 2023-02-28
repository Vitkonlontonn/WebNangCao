<form action="?action=update" method="post">
    <input type="hidden" name ="id_lop" value ="<?php echo $each -> getId_lop();?>">
    Tên lớp :
    <input type="text" name ="ten_lop" value ="<?php echo $each -> getTen_lop();?>">
    <button>Sửa</button>
</form>