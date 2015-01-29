<?php

$title = sanitize_input($parameters["title"]);
$description = sanitize_input($parameters["description"]);
$status = sanitize_input($parameters["status"]);


$stmt = $conn->prepare(
    '
        INSERT INTO task
            (title, description, status)
            VALUES
            (:title, :description, :status);
    '
    or
    '
        UPDATE task
        SET title=:title, description=:description, status=:status
        WHERE id;
    '
);

$stmt->execute(
    array(
        ':title'  => $title,
        ':description' => $description,
        ':status' => $status
    )
);