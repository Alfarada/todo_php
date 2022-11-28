<?php

$con = new database();
$con->connect();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            width: 500px;
        }
    </style>
    <title>Tasks list</title>
</head>

<body>
    <h1>Tasks List</h1>
    <div class="container">
        <form action="" method="post">
            <input type="text" name="add_task" id="add_task" placeholder="for example: Dishwashing ...">

            <label for="important_task">Important</label>
            <input type="checkbox" name="important_task" id="important_task">
            
            <label for="important_task">Completed</label>
            <input type="checkbox" name="completed_task" id="completed_task">
            <input type="submit" value="Add task">
        </form>
        <hr>
        <h2> Pending tasks</h2>
        <div class="container">
            <ul>
                <li>lorem ipsuma<a href="#">important</a><a href="#">completed</a><a href="#">edit</a><a href="#">delete</a></li>
                <li>lorem ipsuma<a href="#">important</a><a href="#">completed</a><a href="#">edit</a><a href="#">delete</a></li>
                <li>lorem ipsuma<a href="#">important</a><a href="#">completed</a><a href="#">edit</a><a href="#">delete</a></li>
                <li>lorem ipsuma<a href="#">important</a><a href="#">completed</a><a href="#">edit</a><a href="#">delete</a></li>
                <li>lorem ipsuma<a href="#">important</a><a href="#">completed</a><a href="#">edit</a><a href="#">delete</a></li>
            </ul>
        </div>
        <h2> Completed tasks</h2>
        <div class="container">
            <ul>
                <li>lorem ipsuma<a href="#">undo</a></li>
                <li>lorem ipsuma<a href="#">undo</a></li>
                <li>lorem ipsuma<a href="#">undo</a></li>
                <li>lorem ipsuma<a href="#">undo</a></li>
                <li>lorem ipsuma<a href="#">undo</a></li>
            </ul>
        </div>
    </div>
</body>

</html>