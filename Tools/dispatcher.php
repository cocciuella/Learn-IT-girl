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
    include('./Form/' . $type . '.php');

    global $conn;
    $id = $parameters['id'];
    // $stmt = $conn->query('UPDATE ' . $type . 'SET ' 'WHERE ' . $id);
    // read_action?
    if ($submit) {
        include('./Form/Validation/' . $type . '.php');
    }
}

function delete_action($type, $parameters = array())
{
    //if (!isset($parameters['id']) {
    //    exit;
    //}

    $id = $parameters['id'];

    switch ($type) {
        case 'person':
            delete_person_action($id);
            break;
        case 'skill':
            delete_skill_action($id);
            break;
        case 'task':
            delete_task_action($id);
            break;
        }


}
function delete_person_action($id){
    global $conn;
    $x = $conn->query('DELETE FROM person WHERE id = ' . $id . ';');
    if (!$x){
        echo '#' . $id . ' deleted successfully';
    }else{
        echo '#' . $id . ' not deleted';
    }
};
function delete_skill_action($id){
    global $conn;
    $x = $conn->query('DELETE FROM skill WHERE id = ' . $id . ';');
    if (!$x){
        echo '#' . $id . ' deleted successfully';
    }else{
        echo '#' . $id . ' not deleted';
    }
};
function delete_task_action($id){
    global $conn;
    $x = $conn->query('DELETE FROM task WHERE id = ' . $id . ';');
    if (!$x){
        echo '#' . $id . ' deleted successfully';
    }else{
        echo '#' . $id . ' not deleted';
    }
};