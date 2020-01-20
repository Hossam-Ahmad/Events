<? $page="create_event";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/vendor/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="assets/vendor/quill/quill.snow.css">
    <link rel="stylesheet" href="assets/vendor/sortable/sortable.min.css">
    <? include("includes/header.php"); ?>
    <title> Hubb Events - Create Event </title>
    <!-- custom page stylesheets -->
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/create_event.php'); ?>
    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/quill/quill-config.js"></script>
    <script src="assets/vendor/dropify/js/dropify.min.js"></script>
    <script src="assets/vendor/sortable/sortable.min.js"></script>
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
    <script src="assets/js/create-event.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcZrTZxbzef_mZ4Rkbh6ICjMLDe2K6Ja8&callback=initMap"
        async defer></script>
</body>

</html>