<? $page="event_waitList";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
    <!-- custom page stylesheets -->
    <link rel="stylesheet" href="assets/vendor/quill/quill.snow.css">
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/waitlist.php'); ?>
    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/quill/quill-config.js"></script>
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
    <script>
        $('#dashboardNavWaitList').addClass('active');
        $('#dashboardNavWaitList').closest('.collapse').addClass('show');

        function editor(selector) {
            var quill = new Quill($(selector).get(0), {
                modules: {
                    toolbar: toolbarOptions,
                },
                theme: 'snow'
            });
        }
        editor('#autoResponceMessange');
        editor('#waitlistTicketReleaseMessage');

        window.setTimeout(function () {
            $(".alert").fadeTo(300, 0).slideUp(300, function () {
                $(this).remove();
            });
        }, 4000);
    </script>
</body>

</html>