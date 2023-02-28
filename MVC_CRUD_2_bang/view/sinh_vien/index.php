<h1>Danh sách lớp</h1>

<a href="?action=create&control=sinh_vien">Thêm sinh viên</a>

<table border="1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên sinh viên</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr>
<td><?php echo $each['id']?></td>
<td><?php echo $each['ten_sv']?></td>
<td><?php echo $each['ten_lop']?></td>
<td><a href="?action=edit&control=sinh_vien&id=<?php echo $each['id']?>">Sửa</a></td>
<td><a href="?action=delete&control=sinh_vien&id=<?php echo $each['id']?>">Xóa</a></td>

        </tr>

    <?php } ?>

</table>