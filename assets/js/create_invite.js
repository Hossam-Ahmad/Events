$('.flatpickr').flatpickr();
$(document).ready(function () {
    var preview = $('.event-preview').contents(),
        iframeHeight = preview.find('html').height();
    console.log(iframeHeight);
    $('.event-preview').css('height', iframeHeight + "px");
});
var ft = FooTable.init('#guestsTable', {
    paging: {
        enabled: true,
    },
    filtering: {
        enabled: true,
        "container": "#filter-form-container"
    },
    sorting: {
        enabled: true
    },
    "columns": $.get("docs/guestColumns.json"),
    "rows": $.get("docs/guestsRows.json"),
    "on": {
        'postinit.ft.table': function (e, ft) {
            console.log('ready');
            $('.footable-filtering-search .dropdown-menu').remove();
            $('.footable-filtering-search .dropdown-toggle').remove();
            console.table(ft.rows.all);
        }
    }
});
// $('.addToFootable').click(function () {       
//     ft.rows.add({
//         _checkbox: "red",
//         email: "Steve",
//         first_name: "123",
//         last_name: "f",
//         phone: "Developer",
//         date: 's'
//     });
// });

// select all 
$(document).on('change', 'input[name="check_all"]', function () {
    $(this).closest('table ').find("tbody tr:not(.footable-filtered) input[type=checkbox]").prop('checked', this.checked);
});
$('input[name="add_guests_check"]').change(function(){
    $('.contentChoose').hide();
    $('.'+$(this).attr('id')).show();
});
// // remove
$('.remove').click(function () {
    var confirmation = $('#deleteModal'),
        tableRows = [];
    confirmation.modal('show');
    $('#guestsTable').find('tbody tr:not(.footable-filtered) input[type="checkbox"]:checked').each(
        function () {
            var index = $(this).closest('tr').index();
            tableRows.push(index);
        });
        console.table(tableRows);
        
    $('#deleteBtnModal').click(function () {
        $.each(tableRows, function (index, value) {
            if(index == 0){
                ft.rows.all[value].delete();
                console.log("col-" + value + "-deleted");
            }else{
                ft.rows.all[value-1].delete();
                console.log("col-" + value + "-deleted");
            }
        });
    });
})