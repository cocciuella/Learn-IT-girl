<?php

function dispatch_action($action, $submit = false, $parameters = array())
{
    $type = array_shift($parameters);
    switch ($action) {
        default:
        case 'create':
            create_action($type, $submit, $parameters);
            break;
        case 'read':
            /**
             * @TODO: Implement reading (and displaying) either on single object (a person, a task, etc.) or a list of
             *        items.
             */
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
    include('./Form/' . $type . '.php');

    if ($submit) {
        include('./Form/Validation/' . $type . '.php');
    }
}

function read_action($type, $parameters = array())
{
    /**
     * @TODO: Create a View subfolder in which to store templates used to display our 3 types of data.
     */
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
