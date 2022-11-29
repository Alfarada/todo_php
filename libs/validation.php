<?php

ini_set('display_errors', 1);

require_once 'database.php';
require_once '../config/config.php';

$add_task = null;
$completed_task = null;
$important_task = null;
$message = '';

$request_data = [];

$isValidResponse = function ($request) use (&$request_data): array|bool {

    if (isset($request['add_task']) && empty($request['add_task'])) {
        echo '<p>por favor introduce una tarea valida</p>';
        return false;
    }

    if (!isset($request['important_task'])) {
        $request_data['important_task'] = 0;
    } else {
        $request_data['important_task'] = (int) $request['important_task'];
    }

    if (!isset($_POST['completed_task'])) {
        $request_data['completed_task'] = 0;
    } else {
        $request_data['completed_task'] = (int) $request['completed_task'];
    }

    return $request_data;
};

if ($isValidResponse($_POST)) {
    
    // insert 
    $conn = new Database();
    $sql = 'INSERT INTO tasks (task, status, important) VALUES (:task, :status, :important)';
    $query = $conn->connect()->prepare($sql);
    try {
        $query->execute([
            'task' => $_POST['add_task'],
            'status' => $request_data['completed_task'],
            'important' => $request_data['important_task']
        ]);

        // return true;
        $message .= '<p>tarea registrada existosamente</p>';
        header('Location: http://localhost/todo_php?message=' . urlencode($message));
    } catch(PDOException $e){
        echo '<p>no se pudo agregar la tarea'. $e->getMessage() . '</p>';
    }

}
