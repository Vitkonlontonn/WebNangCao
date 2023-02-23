<h1>Danh sách lớp</h1>

<a href="?action=create&control=lop_hoc">Thêm lớp học</a>

<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên lớp học</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr>
<td><?php echo $each['id_lop']?></td>
<td><?php echo $each['ten_lop']?></td>
<td><a href="?action=edit&control=lop_hoc&id_lop=<?php echo $each['id_lop']?>">Sửa</a></td>
<td><a href="?action=delete&control=lop_hoc&id_lop=<?php echo $each['id_lop']?>">Xóa</a></td>

        </tr>

    <?php } ?>

</table>