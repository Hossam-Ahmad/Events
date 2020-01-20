<? $page="event_preview";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <? include("includes/header.php"); ?>
    <title> Hubb Events - Preview </title>
    <!-- custom page stylesheets -->
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/event_preview.php'); ?>
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
        $(document).ready(function(){
            var preview = $('.event-preview').contents(),
                navbar = preview.find('nav.navbar'),
                footer = preview.find('footer');
                navbar.remove();
                footer.remove();
                iframeHeight = preview.find('html').height();
                console.log(iframeHeight);
                $('.event-preview').css('height',iframeHeight+"px");
        })
    </script>
</body>

</html>