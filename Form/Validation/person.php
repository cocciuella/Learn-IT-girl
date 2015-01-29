<?php

$name = sanitize_input($parameters["name"]);
$email = sanitize_input($parameters["email"]);


$stmt = $conn->prepare(
    '
        INSERT INTO person
            (name, email)
            VALUES
            (:name, :email);
    '
    or
    '
        UPDATE person
        SET name=:name, email=:email
        WHERE id;
    '

);

$stmt->execute(
    array(
        ':name'  => $name,
        ':email' => $email,
    )
);