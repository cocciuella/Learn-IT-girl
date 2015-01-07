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
);

$stmt->execute(
    array(
        ':name'  => $name,
        ':email' => $email,
    )
);