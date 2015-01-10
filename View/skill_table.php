<table border="1">
    <tr>
        <th>Name</th>
        <th>Level</th>
    </tr>
    <?php foreach($results as $result): ?>
    <tr>
        <td><?php echo $result['name']?></td>
        <td><?php echo $result['level']?></td>
    </tr>
<?php endforeach; ?>
</table>