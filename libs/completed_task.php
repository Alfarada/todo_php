<?php 

ini_set('display_errors', 1);

require_once 'database.php';
require_once '../config/config.php';

if (!isset($_GET['id'])) {
    echo 'los datos obtenidos no son válidos.';
    return;
}

$task_id = (int) $_GET['id'];
$conn = new Database();
$query = $conn->connect()->prepare('UPDATE tasks SET status = 1 WHERE id = :id');
try {
    $query->execute([
        'id' => $task_id
    ]);

    header('Location: http://localhost/todo_php');

} catch(PDOException $e){
    return false;
}


