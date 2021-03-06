<? $page="attendees_list";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- custom page stylesheets -->
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/attendees_list.php'); ?>
    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
    <script>
        $('#dashboardEventListAttendees').addClass('active');
        $('#dashboardEventListAttendees').closest('.collapse').addClass('show');
    </script>
</body>

</html>