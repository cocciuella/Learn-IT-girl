<?php

$name = sanitize_input($paramaters["name"]);
$level = sanitize_input($parameters["level"]);


$stmt = $conn->prepare(
    '
        INSERT INTO skill
            (name, level)
            VALUES
            (:name, :level);
    '
);

$stmt->execute(
    array(
        ':name'  => $name,
        ':level' => $level,
    )
);