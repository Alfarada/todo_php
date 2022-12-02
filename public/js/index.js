$(function () {
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
        html: "Check all",
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


    // check the "check all" input checkbox
    $checkbox.on('click', function () {
        var checkbox_legth = $checkbox.length,
            checked_boxes = 0;

        $checkbox.each(function () {

            if ($(this).prop('checked')) {
                checked_boxes++;
                if (checkbox_legth === checked_boxes) {
                    mark_all_tasks.prop('checked', true);
                    // console.log('todos marcados');
                } else {
                    mark_all_tasks.prop('checked', false);
                    // console.log(checked + ' marcados');
                }
            }
        })
    });

    // check all pending tasks
    $("#mark_all_tasks").on('change', function () {

        if (!$(this).prop('checked')) {

            $checkbox.each(function () {
                $(this).prop("checked", false);
            });
            return;
        }

        $checkbox.each(function () {
            $(this).prop("checked", true);
        });
    });
})