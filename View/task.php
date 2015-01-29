<table border="1">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
    </tr>
    <?php foreach($results as $result):
        include('./View/task_row.php');
    endforeach; ?>
</table>