<? $page="event_manageWaitList";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
    <!-- custom page stylesheets -->
    <link rel="stylesheet" href="assets/vendor/footable/css/footable.standalone.min.css">
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/manage_waitlist.php'); ?>
    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="assets/vendor/footable/js/footable.min.js"></script>
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
    <script>
        $('#dashboardNavManageWaitList').addClass('active');
        $('#dashboardNavManageWaitList').closest('.collapse').addClass('show');
        var $modal = $('#editor-modal'),
            $editor = $('#editor'),
            $editorTitle = $('#editor-title');
        $('#watilistTable').footable({
            "paging": {
                "enabled": true
            },
            "filtering": {
                "enabled": true
            },
            "sorting": {
                "enabled": true
            },
            "columns": $.get("docs/columns.json"),
            "rows": $.get("docs/rows.json"),
            "on": {
                'postinit.ft.table': function (e, ft) {
                    console.log('ready');
                    $('.footable-filtering-search .dropdown-menu').remove();
                    $('.footable-filtering-search .dropdown-toggle').remove();
                }
            }
        });
        $(document).on('change', 'input[name="check_all"]', function () {
            $("#watilistTable tbody tr:not(.footable-filtered) input[type=checkbox]").prop('checked', this.checked);
        });
        // Delete row Function
        // Edit row Function
        // Add row function

        // Fade the alert after loading page
        window.setTimeout(function () {
            $(".alert").fadeTo(300, 0).slideUp(300, function () {
                $(this).remove();
            });
        }, 4000);
    </script>
</body>

</html>