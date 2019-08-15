$(document).ready(function () {
    $('a.delete-photo').click(function () {
        var id = $(this).attr('data-photo-id');
        var input = '<input type="hidden" name="photo_ids[]" value="' + id + '">';
        $('#photos-to-be-deleted').append(input);
        $(this).parents('.photo-card').remove();
    });

    $('.danger-alert').click(function (){
        var target = $(this).attr('data-target');
        $('#are_you_sure #yes').attr('data-target', target);
        $('#are_you_sure').slideDown();
    });
    $('#are_you_sure #no').click(function (){
        $('#are_you_sure').slideUp();
    });
    $('#are_you_sure #yes').click(function (){
        var id = $(this).attr('data-target');
        var form = $('#' + id);
        form.submit();
    });
});
