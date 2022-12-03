<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/a7b6687193.js" crossorigin="anonymous"></script>
    <title>Tasks list</title>
</head>

<body>
    <h1>Tasks List</h1>

    <!-- Task message status  -->
    <?php // echo $_GET['message'] ?? ''; 
    ?>

    <div class="container ">
        
            <form class="adder form-elements" action="libs/validation.php" method="post">
                <div>
                <input class="writing-bar" type="text" name="add_task" id="add_task" placeholder="for example: Dishwashing ...">
                
                <label for="important_task">important</i></label>
                <input type="checkbox" name="important_task" id="important_task" value="1">
                
                <label for="completed_task">completed</i></label>
                <input type="checkbox" name="completed_task" id="completed_task" value="1">
                </div>
                <div>
                    <input class="buttom" type="submit" value="Add task">
                </div>
       
        </form>
        <hr>
        <div class="container block-task">
            <h2> Pending tasks</h2>
            <form action="de" method="post">

                <!-- Get all tasks  -->
                <?php if (empty($tasks)) : ?>
                    <ul>
                        <p>There are no pending tasks !!!</p>
                    </ul>
                <?php else : ?>
                    <ul id="ul-pending-tasks">
                        <?php foreach ($tasks as $key => $task) : ?>
                            <li>
                                <!-- <input type="checkbox" name="completed_<?php // echo $task['id']; ?>" id="completed_<?php // echo $task['id']; ?>"> -->
                                <?= $task['task']; ?>
                                <!-- <a href="#">important</a> -->
                                <!-- <a href="#">edit</a> -->
                                <a href="libs/delete_tasks.php?id=<?=$task['id']; ?>">delete</a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>

            </form>
        </div>
        <br>
        <div class="container block-task">
            <h2> Completed tasks</h2>
            <ul>
                <li>lorem ipsuma<a href="#">undo</a></li>
                <li>lorem ipsuma<a href="#">undo</a></li>
                <li>lorem ipsuma<a href="#">undo</a></li>
                <li>lorem ipsuma<a href="#">undo</a></li>
                <li>lorem ipsuma<a href="#">undo</a></li>
            </ul>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="public/js/index.js"></script>
</body>
<br>
</html>