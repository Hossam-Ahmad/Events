$('[data-countdown]').each(function () {
    var finalDate = $(this).data('countdown');
    countDown($(this), finalDate);
    console.log(finalDate);
})
$('.toggle[data-toggle="active"]').click(function () {
    var parentName = $(this).data('parent');
    $(this).toggleClass('active');
    if (parentName) {
        var parent = $(this).closest(parentName);
        parent.toggleClass('active');
    }
});
$('.auto-close').keydown(function () {
    var dropdown = $(this).closest('.dropdown').find('.dropdown-menu');
    dropdown.removeClass('show');
});
$('[data-toggle="tooltip"]').tooltip();
$('[data-copy="true"]').click(function () {
    var copyText = $(this).closest('.copy-holder').find('input')[0];
    var item = $(this).addClass('active');
    copyText.select();
    document.execCommand('copy');
    setTimeout(function () {
        item.removeClass('active');
    }, 2000);
});

$('[data-toggle="replace"]').click(function (e) {
    e.preventDefault();
    var replacedItem = $(this).data("replace");
    var replacedWith = $(this).data("replaceWith");
    $(replacedItem).hide();
    $(replacedWith).show();
});
$('[data-toggle="check"]').change(function () {
    var element = $(this).data("element");
    if (this.checked)
        $(element).show();
    else
        $(element).hide();
});
$('[data-toggle="toggle"]').click(function (e) {
    e.preventDefault();
    var target = $(this).data('target'),
        toggledClass = $(this).data('class');
        $(target).toggleClass(toggledClass);
        console.log(toggledClass);
        $('.page-content').append('<div class="drop-box-modal" data-toggle="remove" data-target=".hubbEvent-sidemenu" data-class="show"></div>');
});
$(document).on('click','[data-toggle="remove"]',function(e){
    e.preventDefault();
    var target = $(this).data('target'),
        toggledClass = $(this).data('class');
        $(target).removeClass(toggledClass);
        $('.page-content').find('.drop-box-modal').remove();
})

$('[data-plugin="colorpicker"]').minicolors();
$('[data-plugin="colorpicker"]').change(function () {
    var color = $(this).val(),
        type = $(this).data('type'),
        hidden = $(this).data('hidden'),
        target = $(this).data('target');
    $(target).css(type, color);
    if (hidden) {
        $(this).closest('.form-group').find('input[type="hidden"]').val(color);
    }
});