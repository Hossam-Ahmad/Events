<? $page="browse_events";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <? include("includes/header.php"); ?>
    <title> Hubb Events - Browse events </title>
    <!-- custom page stylesheets -->
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
    <? include('content/browse_events.php'); ?>

    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
</body>

</html>