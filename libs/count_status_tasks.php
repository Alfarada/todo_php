<?php

$conn = new Database();
$query = $conn->connect()->query('SELECT COUNT(*) FROM tasks WHERE status = 1');
$count_completed_tasks = $query->fetch()[0];
// var_dump($count_completed_tasks);

$query = $conn->connect()->query('SELECT COUNT(*) FROM tasks WHERE status = 0');
$count_pending_tasks = $query->fetch()[0];
// var_dump($count_pending_tasks);
