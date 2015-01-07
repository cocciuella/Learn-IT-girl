<?php

function dispatch_action($action, $type, $submit = false, $parameters = array())
{

    switch ($action) {
        default:
        case 'create':
            create_action($type, $submit, $parameters);
            break;
        case 'read':
            read_action($type, $parameters);
            break;
        case 'update':
            update_action($type, $submit, $parameters);
            break;
        case 'delete':
            delete_action($type, $parameters);
            break;
    }
}

function create_action($type, $submit = false, $parameters = array())
{
    global $conn;
    include('./Form/' . $type . '.php');

    if ($submit) {
        include('./Form/Validation/' . $type . '.php');
    }
}

function read_action($type, $parameters = array())
{
    global $conn;
    $stmt = $conn->query('SELECT * FROM ' . $type);
    $results = $stmt ->fetchAll();
    var_dump($results);
    include('./View/' . $type . '.php');
}

function update_action($type, $submit, $parameters = array())
{
    /**
     * @TODO: Change the logic of the Form/Validation files to either do an SQL insert or an update.
     */
    include('./Form/' . $type . '.php');

    if ($submit) {
        include('./Form/Validation/' . $type . '.php');
    }
}

function delete_action($type, $parameters = array())
{
    /**
     * @TODO: Implement the deletion logic.
     */
}
