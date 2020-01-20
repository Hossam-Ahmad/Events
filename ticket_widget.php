<? $page="web_integrations_ticket";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- custom page stylesheets -->
    <link rel="stylesheet" href="assets/vendor/Color-Picker-Plugin-jQuery-MiniColors/jquery.minicolors.css">
    <link rel="stylesheet" href="templates/ticket/main.css">
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/ticket_widget.php'); ?>
    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="assets/vendor/Color-Picker-Plugin-jQuery-MiniColors/jquery.minicolors.min.js"></script>
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
    <script>
        $('#dashboardNavIntegration').addClass('active');
        $('#dashboardNavIntegration').closest('.collapse').addClass('show');

        // Generated code
        $('[data-toggle="generate"]').click(function () {
            var target = $(this).data('target'),
                height = $('.g-grid').outerHeight(),
                link = $(this).data('link'),
                data = '<iframe src="' + link + ' vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true" height="' + height + 'px" width="100%"></iframe>';
            $(target).html(data);
        }).trigger('click');
    </script>
</body>

</html>