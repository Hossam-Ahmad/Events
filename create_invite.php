<? $page="create_invite";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- custom page stylesheets -->
    <link rel="stylesheet" href="assets/vendor/footable/css/footable.standalone.min.css">
    <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css">
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/create_invite.php'); ?>
    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="assets/vendor/footable/js/footable.min.js"></script>
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
    <script src="assets/js/create_invite.js"></script>
    <script>
        $('#dashboardNavEmailInvitation').addClass('active');
        $('#dashboardNavEmailInvitation').closest('.collapse').addClass('show');

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