$(function () {

    $('.message-success:hidden').fadeIn("slow");
    
    $('#add-task').click(function (e) {
        
        let isEmptyWritingBar = !$.trim($(".writing-bar").val());

        if(isEmptyWritingBar) {
            
            $(".writing-bar").addClass("wrong-bar");
            // $(".task-form-message").removeClass('hide').addClass('wrong');
            $(".task-form-message").addClass('wrong');
            $(".task-form-message:hidden").first().fadeIn("slow");

        } else {
            $('#add-task-form').submit();
        }        

    });

    setTimeout(function () {
        $('.message-success').fadeOut(1500);    
    }, 2000);
    
})