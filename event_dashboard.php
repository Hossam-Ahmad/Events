<? $page="event_dashboard";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
    <!-- custom page stylesheets -->
    <link rel="stylesheet" href="assets/vendor/jquery-asPieProgress/css/asPieProgress.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/event_dashboard.php'); ?>
    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="assets/vendor/jquery-asPieProgress/jquery-asPieProgress.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="assets/js/charts.js"></script>
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
    <script>
        $('#eventDashboardLink').addClass('active');
        $('[data-plugin="asPieProgress"]').each(function () {
            var goal = $(this).data('goal');
            var valuemin = $(this).data('valuemin');
            var step = $(this).data('step');
            var valuemax = $(this).data('valuemax');
            var barcolor = $(this).data('barcolor');
            $(this).asPieProgress({
                namespace: '',
                min: valuemin,
                max: valuemax,
                goal: goal,
                barcolor: barcolor,
            });
            $(this).asPieProgress('start');
        });
        window.setTimeout(function () {
            $(".alert").fadeTo(300, 0).slideUp(300, function () {
                $(this).remove();
            });
        }, 4000);
    </script>
</body>

</html>