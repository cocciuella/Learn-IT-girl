<table border="1">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
    </tr>
    <?php foreach($results as $result): ?>
        <tr>
            <td><?php echo $result['title']?></td>
            <td><?php echo $result['description']?></td>
            <td><?php echo $result['status']?></td>
        </tr>
    <?php endforeach; ?>
</table>