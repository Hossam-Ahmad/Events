<? $page="event_orderForm";
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
        <? include('content/order_form.php'); ?>
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
        $('#dashboardNavOrderForm').addClass('active');
        $('#dashboardNavOrderForm').closest('.collapse').addClass('show');
        $('input[type=radio][name=collectionType]').change(function () {
            $('.collectionTypeData').hide();
            if (this.value == 'basicInformation') {

            } else if (this.value == 'eachAttendee') {
                $('.eachAttendee').show();
            }  else if(this.value == 'buyerOnly'){
                $('.buyerOnly').show();
            }
        });

    </script>
</body>

</html>