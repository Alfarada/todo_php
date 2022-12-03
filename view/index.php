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
        <div class="container block-task">
            <h2> Pending tasks</h2>
            <form action="de" method="post">

                <!-- Get pending tasks  -->
                <?php if (empty($tasks) || !$count_pending_tasks) : ?>
                    <ul>
                        <p>There are no pending tasks !!!</p>
                    </ul>
                <?php else : ?>
                    <ul id="ul-pending-tasks">
                        <?php foreach ($tasks as $key => $task) : ?>
                            <?php if (!$task['status']) : ?>
                                <li>
                                    <?= $task['task']; ?>
                                    <a href="libs/completed_task.php?id=<?= $task['id']; ?>">completed</a>
                                    <a href="libs/delete_task.php?id=<?= $task['id']; ?>">delete</a>
                                </li>
                            <?php endif ?>

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