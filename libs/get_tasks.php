<?php

$conn = new Database();
$query = $conn->connect()->query('SELECT * FROM tasks');
$tasks = $query->fetchAll(PDO::FETCH_ASSOC);
// $tasks = [];
// var_dump($tasks);
