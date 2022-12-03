<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Tasks list</title>
</head>

<body>
    <h1>Tasks List</h1>

    <!-- Task message status  -->
    <?php // echo $_GET['message'] ?? ''; 
    ?>

    <div class="container">
        <form action="libs/validation.php" method="post">
            <input type="text" name="add_task" id="add_task" placeholder="for example: Dishwashing ...">

            <label for="important_task">Important</label>
            <input type="checkbox" name="important_task" id="important_task" value="1">

            <label for="completed_task">Completed</label>
            <input type="checkbox" name="completed_task" id="completed_task" value="1">
            <input type="submit" value="Add task">
        </form>
        <hr>
        <h2> Pending tasks</h2>
        <div class="container">
            <form action="de" method="post">

                <!-- Get pending tasks  -->
                <?php if (empty($tasks)) : ?>
                    <ul>
                        <p>There are no pending tasks !!!</p>
                    </ul>
                <?php else : ?>
                    <ul id="ul-pending-tasks">
                        <?php foreach ($tasks as $key => $task) : ?>
                            <?php if (!$task['status']) : ?>
                                <li>
                                    <!-- <input type="checkbox" name="completed_<?php // echo $task['id']; 
                                                                                ?>" id="completed_<?php // echo $task['id']; 
                                                                                                    ?>"> -->
                                    <?= $task['task']; ?>
                                    <!-- <a href="#">important</a> -->
                                    <!-- <a href="#">edit</a> -->
                                    <a href="libs/completed_task.php?id=<?= $task['id']; ?>">completed</a>
                                    <a href="libs/delete_tasks.php?id=<?= $task['id']; ?>">delete</a>
                                </li>
                            <?php endif ?>

                        <?php endforeach ?>
                    </ul>
                <?php endif ?>

            </form>
        </div>

        <div class="container">
            <!-- Get completed tasks  -->
            <?php if (!empty($tasks)) : ?>
                <h2> Completed tasks</h2>
                <?php foreach ($tasks as $key => $task) : ?>
                    <?php if ($task['status']) : ?>
                        <li>
                            <!-- <input type="checkbox" name="completed_<?php // echo $task['id']; 
                                                                        ?>" id="completed_<?php // echo $task['id']; 
                                                                                                ?>"> -->
                            <?= $task['task']; ?>
                            <!-- <a href="#">important</a> -->
                            <!-- <a href="#">edit</a> -->
                            <!-- <a href="libs/completed_task.php?id=<?php // echo $task['id']; 
                                                                        ?>">completed</a> -->
                            <!-- <a href="libs/delete_tasks.php?id=<?php // echo $task['id']; 
                                                                    ?>">delete</a> -->
                            <a href="#">Undo</a>
                        </li>
                    <?php endif ?>
                <?php endforeach; ?>


            <?php endif ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="public/js/index.js"></script>
</body>

</html>