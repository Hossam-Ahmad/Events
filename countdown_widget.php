<? $page="web_integrations_countdown";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- custom page stylesheets -->
    <link rel="stylesheet" href="assets/vendor/Color-Picker-Plugin-jQuery-MiniColors/jquery.minicolors.css">
    <link rel="stylesheet" href="templates/countdown/main.css">
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/countdown_widget.php'); ?>
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
                height = $('.widget-countdown').outerHeight(),
                width = $('.widget-countdown').outerWidth(),
                link = $(this).data('link'),
                data = '<iframe src="' + link + 'frameborder="0" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true" height="' + height + 'px" width="'+width+'px"></iframe>';
            $(target).html(data);
        }).trigger('click');
    </script>
</body>

</html>