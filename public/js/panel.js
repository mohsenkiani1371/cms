$(document).ready(function () {
    $('a.delete-photo').click(function () {
        var id = $(this).attr('data-photo-id');
        var input = '<input type="hidden" name="photo_ids[]" value="' + id + '">';
        $('#photos-to-be-deleted').append(input);
        $(this).parents('.photo-card').remove();
    });
});
