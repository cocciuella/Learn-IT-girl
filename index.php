<?php

include('./config.php');

error_reporting(DEBUG_ERROR_LEVEL);
ini_set('display_errors', DEBUG_DISPLAY);

include('./init.php');
include('./Tools/dispatcher.php');


dispatch_action(
    isset($_GET['type']) ? $_GET['type'] : null,
    isset($_POST['submit']) ? (bool) $_POST['submit'] : null,
    $_GET
);
