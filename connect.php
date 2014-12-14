<?php
$servername = "localhost";
$username = "";
$password = "";

try{
    $conn = new PDO("mysql:host:$servername; dbname=MySQL", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed:" . $e->getMessage();
}
$conn = null;
?>
