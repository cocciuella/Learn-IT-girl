<?php

include('config.php');

error_reporting(DEBUG_ERROR_LEVEL);
ini_set('display_errors', DEBUG_DISPLAY);

include('./init.php');

if (!isset($_GET['form'])) {
    $_GET['form'] = null;
}
switch ($_GET['form']) {
    case 'person':
    default:
        include('./Form/person.html');
        break;
    case 'skill':
        break;
    case 'task':
        break;
}

if (isset($_POST['submit'])) {
    switch ($_POST['submit']) {
        case 'person':
            include('./Form/Validation/person.php');
            break;
    }
}