<? $page="add_attendees";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/vendor/footable/css/footable.standalone.min.css">
    <!-- custom page stylesheets -->
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/attendees_add.php'); ?>
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
        $('#dashboardEventAddAttenddees').addClass('active');
        $('#dashboardEventAddAttenddees').closest('.collapse').addClass('show');
        // Table
        $('#attendeTable').footable({
            "paging": {
                "enabled": false
            },
            "filtering": {
                "enabled": false
            },
            "sorting": {
                "enabled": false
            },
            "on": {
                'postinit.ft.table': function (e, ft) {
                    console.log('ready');
                    $('.footable-filtering-search .dropdown-menu').remove();
                    $('.footable-filtering-search .dropdown-toggle').remove();
                }
            }
        });
    </script>
</body>

</html>