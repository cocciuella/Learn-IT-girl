<?php


include('./connect.php');
include('./Tools/sanitization.php');

/**
 * Retrieve the list of tables for the current database.
 */
$stmt = $conn->query('SHOW TABLES;');
$tables = $stmt->fetchAll();

/**
 * Because of the above structure we need to retrieve only the table names.
 */
$tableNames = array();
foreach ($tables as $row) {
    $tableNames[] = reset($row);
}


$files = scandir('./SQL/');
foreach ($files as $file) {
    if (is_file('./SQL/' . $file)) {
        $tableName = substr($file, 0, -4);

        if (!in_array($tableName, $tableNames)) {
            /**
             * Creating $tableName table.
             */
            try {
                $createQuery = file_get_contents('./SQL/' . $tableName . '.sql');

                $conn->exec($createQuery);

                echo 'Table ' . $tableName . ' created successfully' . "\n";
            } catch (PDOException $e) {
                echo 'Table ' . $tableName . ': ' . $e->getMessage() . "\n";
            }
        } else if (DEBUG_DISPLAY) {
            echo 'Skipped creating ' . $tableName . "\n";
        }
    }
}
