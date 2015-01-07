<table border="1">
    <tr>
        <th>Name</th>
        <th>E-mail</th>
    </tr>
    <?php foreach($results as $result): ?>
        <tr>
            <td><?php echo $result['name']?></td>
            <td><?php echo $result['email']?></td>
        </tr>
    <?php endforeach; ?>
</table>