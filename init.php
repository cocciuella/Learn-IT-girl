<?php


include('./connect.php');

/**
 * Retrieve the list of tables for the current database. The structure looks like this:
 * array(
 *     array(
 *         'Tables_in_database_name' => 'table1',
 *     ),
 *     array(
 *         'Tables_in_database_name' => 'table2',
 *     )
 * )
 */
$stmt = $conn->query('SHOW TABLES;');
$tables = $stmt->fetchAll();

/**
 * Because of the above structure we need to retrieve only the table names. The processed structure looks like this:
 * array(
 *     'table1',
 *     'table2',
 * )
 */
$listOfTables = array();
foreach ($tables as $table) {
    $listOfTables[] = reset($table);
}


if (!in_array('skill', $listOfTables)) {
    /**
     * Creating Skill tables.
     */
    try {
        $skill = file_get_contents('./SQL/skill.sql');

        $conn->exec($skill);

        echo "Table skill created successfully";
    } catch(PDOException $e) {
        echo "Table skill:" . $e->getMessage();
    }
}


if (!in_array('task', $listOfTables) or !in_array('task_skill', $listOfTables)) {
    /**
     * Creating Task tables.
     */
    try {
        $task = file_get_contents('./SQL/task.sql');

        $conn->exec($task);

        echo "Table task created successfully";
    } catch (PDOException $e) {
        echo "Table task:" . $e->getMessage();
    }
}


if (!in_array('person', $listOfTables) or !in_array('person_skill', $listOfTables)) {
    /**
     * Creating Person tables.
     */
    try {
        $person = file_get_contents('./SQL/task.sql');

        $conn->exec($person);

        echo "Table person created successfully";
    } catch (PDOException $e) {
        echo "Table person:" . $e->getMessage();
    }
}