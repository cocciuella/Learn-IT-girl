<table border="1">
    <tr>
        <th>Name</th>
        <th>Level</th>
    </tr>
    <?php foreach($results as $result):
        include('./skill_row.php');
    endforeach; ?>
</table>