<a href="?action=create">Thêm</a>
<table border="1">
    <tr>
        <th>Id lop</th>
        <th>Ten lop</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($arr as $each) { ?>
<tr>
    <td>
        <?php echo $each->getId_lop(); ?>
    </td>
    <td>
        <?php echo $each ->getTen_lop(); ?>
    </td>
    <td><a href="?action=edit&id_lop=<?php echo $each->getId_lop(); ?>">Sửa</a></td>
    <td><a href="?action=delete&id_lop=<?php echo $each->getId_lop(); ?>">Xóa</a></td>
</tr>
    <?php }?>
</table>