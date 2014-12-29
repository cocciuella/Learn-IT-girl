<?php

$username = DB_USERNAME;
$password = DB_PASSWORD;

try {
    $conn = new PDO('mysql:host=' . DB_HOSTNAME . ';dbname=' . DB_DATABASE . ';', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully.\n";
} catch (PDOException $e) {
    echo "Connection failed:" . $e->getMessage() . "\n";
}