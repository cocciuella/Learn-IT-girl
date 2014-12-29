<?php
$title = $descrption = $status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = sanitize_input($_POST["title"]);
    $description = sanitize_input($_POST["description"]);
    $status = sanitize_input($_POST["status"]);
}
