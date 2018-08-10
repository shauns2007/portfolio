require('./bootstrap');
import Validation from './validation';

$(document).ready(function(){
    $('.tags-menu span').on('click', function(){
        let rel = $(this).attr('data-value');
        let val = $(this).html();
        let selected_tags = $('.selected-tags');
        let option = $('select[name="tags[]"]').find('option[value="'+rel+'"]');
        if (!option.prop("selected")) {
            option.prop("selected", true).change();
            if ($('li[data-value="'+rel+'"]').length == 0) {
                selected_tags.append('<li class="selected-tag" data-value="'+rel+'"><span>'+val+'</span><i class="fas fa-times"></i></li>');
            }
        }
    });





    $(document).on('click', '.fa-times', function(){
        let rel = $(this).closest('li').attr('data-value');
        let option = $('select[name="tags[]"]').find('option[value="'+rel+'"]');
        option.prop("selected", false).change();
        $(this).closest('li').remove();
    });

    $('.create-project-btn, .create-course-btn, .update-project-btn, .update-course-btn').on('click', function(){
        document.getElementsByClassName('form-text')[0].innerHTML = '';
        let form = this.closest('form');
        let validate = new Validation(form, false);
        if (validate.run(form) === false) {
            let errors = validate.get_errors();
            errors.forEach(function(error){
                let el = document.getElementsByName(error.element)[0];
                el.closest('.form-group').getElementsByClassName('form-text')[0].innerHTML = error.message;
            });
        } else {
            let rel = $(this).attr('data-rel');
            let heading = rel.capitalize() + ' ' + $(this).closest('form').find('input[name="name"]').val();
            let body = 'This will ' + rel + ' the entry, confirm to proceed';
            populate_popup(heading, body, $(this).attr('href'), function(){
                form.submit();
            });
        }
    });

    $('.row .project, .row .course').on('click', function() {
        let href = $(this).attr('data-href');
        if (typeof href !== undefined) {
            window.location = href;
        }
    });

    let year = $('select[name="year"]').val();
    if (year === "") {
       $('input[name="completed"]').val(0);
    } else {
        $('input[name="completed"]').val(1);
    }

    $('select[name="year"]').on('change', function(){
        if ($(this).val() === "") {
            $('input[name="completed"]').val(0);
        } else {
            $('input[name="completed"]').val(1);
        }
    });

    $('.delete-course-btn, .delete-project-btn').on('click', function(e){
        e.preventDefault();
        let rel = $(this).attr('data-rel');
        let heading = rel.capitalize() + ' ' + $(this).closest('form').find('input[name="name"]').val();
        let body = 'This will ' + rel + ' the entry, confirm to proceed';
        populate_popup(heading, body, $(this).attr('href'));
    });
});
