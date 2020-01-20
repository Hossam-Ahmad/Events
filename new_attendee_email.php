<? $page="attendees_email";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- custom page stylesheets -->
    <link rel="stylesheet" href="assets/vendor/quill/quill.snow.css">
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/new_attendee_email.php'); ?>
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
        $('#dashboardEventEmailAttendees').addClass('active');
        $('#dashboardEventEmailAttendees').closest('.collapse').addClass('show');

        // Editor

        function editor(selector) {
            var quill = new Quill($(selector).get(0), {
                modules: {
                    toolbar: toolbarOptions,
                },
                theme: 'snow'
            });
        }
        editor('#autoResponceMessange');

        $('input[name="sendTime"]').change(function () {
            $('.action-center > .btnAction').removeClass('d-block d-none');
            if ($(this).attr('id') == "sendImmediately") {
                $('#sendBtn').addClass('d-block');
                $('#scBtn').addClass('d-none');

            } else {
                $('#scBtn').addClass('d-block');
                $('#sendBtn').addClass('d-none');
            }
        });
    </script>
</body>

</html>