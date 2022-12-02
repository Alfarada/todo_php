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
            <form action="#" method="post">

                <!-- Get all tasks  -->
                <?php if (empty($tasks)) : ?>
                    <ul>
                        <p>There are no pending tasks !!!</p>
                    </ul>
                <?php else : ?>
                    <ul id="ul-pending-tasks">
                        <?php foreach ($tasks as $key => $task) : ?>
                            <li>
                                <input type="checkbox" name="completed_<?= $task['id']; ?>" id="completed_<?= $task['id']; ?>">
                                <?= $task['task']; ?>
                                <a href="#">important</a>
                                <a href="#">edit</a>
                                <a href="#">delete</a>
                            </li>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(function() {
            let $tasks_list = $("#ul-pending-tasks"),
                hasTaskList = $tasks_list.has('li').length,
                $checkbox = $("#ul-pending-tasks li input");

            if (!hasTaskList) {
                console.log('no hay lista de tareas');
                return;
            }

            send_task_btn = $("<input>", {
                value: "send tasks",
                type: "submit"
            });

            mark_all_tasks_label = $("<label>", {
                for: "mark_all_tasks",
                html: "mark all",
            });

            mark_all_tasks = $("<input>", {
                name: "mark_all_tasks",
                "id": "mark_all_tasks",
                value: 1,
                type: "checkbox"
            });

            $tasks_list.prepend(send_task_btn);
            $tasks_list.prepend(mark_all_tasks_label);
            $tasks_list.prepend(mark_all_tasks);

            $("#mark_all_tasks").on('change', function() {
                
                if (!$(this).prop('checked')) {

                    $checkbox.each(function() {
                        $(this).prop("checked", false);
                    });
                    return;
                }

                $checkbox.each(function() {
                    $(this).prop("checked", true);
                });

            });
        })
    </script>
</body>

</html>