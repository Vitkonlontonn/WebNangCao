<table border ="1" width ="80%">
<tr>
    <th>ID</th>
    <th>Ten lop hoc</th>
</tr>
<?php  foreach ($arr as $each) {?>
    <tr>
        <td><?php echo $each -> id_lop?></td>
        <td><?php echo $each -> getAllTen()?></td>
    </tr>

<?php }?>

</table>