$(document).ready(function () {
    // Generating unique IDs for inputs
    var label_count = $('label').length;
    organizeLabels(1, label_count);

    // Deleting photos
    $('a.delete-photo').click(function () {
        var id = $(this).attr('data-photo-id');
        var input = '<input type="hidden" name="photo_ids[]" value="' + id + '">';
        $('#photos-to-be-deleted').append(input);
        $(this).parents('.photo-card').remove();
    });

    // Are-you-sure
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

    // Initial values for cloning
    row = $('.clone').first();
    box_label_count = row.find('label').length;
    prev_label_count = label_count;
    new_label_count;
});

// cloning a box
$(document).on('click', '#cloner', function () {
    var cloned = row.clone();
    cloned.find('input[type!=file], textarea').val('');
    box_count = $('.clone').length;
    cloned.find('input[name="position[]"]').val(++box_count);
    cloned.appendTo('#box');
    $('.delete-clone-row').show();
    new_label_count = prev_label_count + box_label_count;
    organizeLabels(prev_label_count , new_label_count);
    prev_label_count = new_label_count;
});

// Deleting a box
$(document).on('click', '.delete-clone-row', function () {
    var deleting_row = $(this).parents('.clone');
    deleting_row.remove();
    var box_count = $('.clone').length;
    if (box_count == 1) {
        $('.delete-clone-row').hide();
    }
});

function organizeLabels(first, last) {
    for (var i = first; i < last; i++){
        $('label').eq(i).attr('for', i+1);
        $('label').eq(i).next().attr('id', i+1);
    }
}
