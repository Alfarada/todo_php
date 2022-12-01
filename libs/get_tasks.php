<?php

$conn = new Database();
$query = $conn->connect()->query('SELECT * FROM tasks');
$tasks = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($tasks);
