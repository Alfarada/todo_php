<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Tasks list</title>
</head>

<body>
    <h1>TODO list</h1>

    <div class="container">

        <form id="add-task-form" class="adder" action="libs/validation.php" method="post">

            <input class="writing-bar" type="text" name="add_task" id="add_task" placeholder="Write your homework here...">
            <i id="add-task" class="fa-solid fa-plus add-task-icon"></i>

        </form>
        <p class="task-form-message message-wrong hide"><i class="fa-solid fa-circle-xmark"></i> Please make sure you are writing a valid task</p>
        
        <?php if(isset($_GET['message'])) : ?>
            <p class="task-form-message message-success success hide"><i class="fa-solid fa-circle-check"></i><?php echo $_GET['message'] ?? ''; ?></p>
        <?php endif; ?>
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
                                    <p><?= $task['task']; ?></p>

                                    <a href="libs/completed_task.php?id=<?= $task['id']; ?>"><i class="fa-solid fa-check"></i></a>

                                    <a href="libs/delete_task.php?id=<?= $task['id']; ?>"><i class="fa-solid fa-trash"></i></a>
                                </li>
                                <hr>
                            <?php endif ?>

                        <?php endforeach ?>
                    </ul>
                <?php endif ?>

            </form>
        </div>
        <br>
        <div class="container block-task">

            <h2> Completed tasks</h2>
            <ul id="ul-pending-tasks">
                <?php if (!$count_completed_tasks) : ?>
                    <p> No completed tasks</p>
                <?php endif; ?>

                <?php foreach ($tasks as $key => $task) : ?>
                    <?php if ($task['status']) : ?>
                        <li>
                            <p><?= $task['task']; ?></p>
                            <a href="libs/undo_task.php?id=<?= $task['id']; ?>">UNDO</a>
                        </li>
                        <hr>
                    <?php endif ?>

                <?php endforeach ?>
            </ul>


        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="public/js/index.js"></script>
</body>
<br>

</html>