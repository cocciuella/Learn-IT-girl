<?php

$name = sanitize_input($_POST["name"]);
$email = sanitize_input($_POST["email"]);


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