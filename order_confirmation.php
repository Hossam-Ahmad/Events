<? $page="event_orderConfirmation";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
    <!-- custom page stylesheets -->
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/order_confirmation.php'); ?>
    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="assets/js/charts.js"></script>
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
    <script>
        $('#dashboardNavOrderConfirmation').addClass('active');
        $('#dashboardNavOrderConfirmation').closest('.collapse').addClass('show');
        $('#selectable').change(function () {
            $('.selectable').hide();
            if (this.value == '0') {
                $('#sameSettingsForAll').show();
            } else if (this.value == '1') {
                $('#customSettinsForAll').show();
            }
        });
    </script>
</body>

</html>