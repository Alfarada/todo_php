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

    <!-- Task message status  -->
    <?= $_GET['message'] ?? ''; ?>

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
            <form action="" method="post">

                <!-- Get all tasks  -->
                <?php if (empty($tasks)) : ?>
                    <ul>
                        <p>There are no pending tasks !!!</p>
                    </ul>
                <?php else : ?>
                    <ul>
                        <?php foreach ($tasks as $task => $value) : ?>
                            <li><?= $value['task'] ?><a href="#">important</a><a href="#">completed</a><a href="#">edit</a><a href="#">delete</a></li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>

            </form>
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