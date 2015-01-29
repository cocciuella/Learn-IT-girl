<?php

$name = sanitize_input($parameters["name"]);
$level = sanitize_input($parameters["level"]);


$stmt = $conn->prepare(
    '
        INSERT INTO skill
            (name, level)
            VALUES
            (:name, :level);
    '
    or
    '
        UPDATE skill
        SET name=:name, level=:level
        WHERE id;
    '
);

$stmt->execute(
    array(
        ':name'  => $name,
        ':level' => $level,
    )
);