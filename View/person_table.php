<table border="1">
    <tr>
        <th>Name</th>
        <th>E-mail</th>
    </tr>
    <?php foreach($results as $result):
        include('./person_row.php');
    endforeach; ?>
</table>