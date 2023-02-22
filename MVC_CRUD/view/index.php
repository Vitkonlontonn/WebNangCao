<table border="1" width="100%">
    <tr>
        <th>mã</th>
        <th>Tên</th>
        <th></th>
        <th></th>
    </tr>
    
<?php foreach ($result as $each){?>
    <tr>
    <td><?php echo $each['id'];?></td>
    <td><?php echo $each['ten_sv'];?></td>
    <td><a href="?action=edit&id=<?php echo $each['id'] ?>">Chỉnh sửa</a></td>
    <td><a href="?action=delete&id=<?php echo $each['id'] ?>">Xóa</a></td>
    
    </tr>
<?php } ?>
    
</table>


<a href="?action=create">Thêm sinh viên</a>