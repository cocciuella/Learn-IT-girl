<?php
$servername = "localhost";
$username = "";
$password = "";

try{
    $conn = new PDO("mysql:host:$servername; dbname=MySQL", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $skill = "CREATE TABLE skill (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    level INT,
    PRIMARY KEY (id)
    )";

    $conn->exec($skill);
    echo "Table skill created successfully";

    $task = "CREATE TABLE task (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100),
    description TEXT
    );

    CREATE TABLE task_skill (
    task_id INT,
    skill_id INT
    )";

    $conn->exec($task);
    echo "Table task created successfully";

    $person = "CREATE TABLE person (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    email VARCHAR (50)
    );

    CREATE TABLE person_skill (
    person_id INT,
    skill_id INT
    )";

    $conn->exec($person);
    echo "Table person created successfully";
    }
catch(PDOException $e)
    {
    echo "Table:" . $e->getMessage();
    }
$conn = null;
?>
