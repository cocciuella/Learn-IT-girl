<?php
$name = $level = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST["name"]);
    $level = sanitize_input($_POST["level"]);
}