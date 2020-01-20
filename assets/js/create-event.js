$('.flatpickr').flatpickr();
$('.dropify').dropify();
function editor(selector) {
    var quill = new Quill($(selector).get(0), {
        modules: {
            toolbar: toolbarOptions,
        },
        theme: 'snow'
    });
}
editor('#editorContainer1');
editor('#editorContainer2');
Sortable.create(dragableList, {
    handle: '.list-handle',
    animation: 150
});
$('[data-toggle="addTicket"]').click(function (e) {
    e.preventDefault();
    $('#tableHint').hide();
    var target = $(this).data('target');
    var newTicket = $(target).clone().removeClass('hide').attr('id','ticketNo-'+$('.tickets-table-row:not(.hide)').length);
    var list = $('#dragableList');
    var collapseSettings = newTicket.find('.icon-settings');
    newTicket.find('.flatpickr').flatpickr();
    newTicket.find('[data-toggle="tooltip"]').tooltip();
    list.append(newTicket).children(':last').hide().fadeIn();
});
$(document).on('click','.tickets-table-row .icon-settings',function(){
    $(this).toggleClass('collapsed');
    $(this).closest('.tickets-table-row').find('.collapse').collapse("toggle");
});
$(document).on('click','.tickets-table-row .icon-delete-garbage',function(){
    var ticket =$(this).closest('.tickets-table-row');
    var confirm =  $('#deleteTicket');
    confirm.modal('show');
    confirm.find('.btn-danger').click(function(){
        ticket.fadeOut('800',function(){
            ticket.remove();
        });
    })
})
// map
var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: -34.397,
            lng: 150.644
        },
        zoom: 8,
        disableDefaultUI: true
    });
}