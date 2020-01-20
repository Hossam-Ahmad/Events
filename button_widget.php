<? $page="web_integrations_button";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- custom page stylesheets -->
    <link rel="stylesheet" href="assets/vendor/Color-Picker-Plugin-jQuery-MiniColors/jquery.minicolors.css">
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/button_widget.php'); ?>
    </main>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="assets/vendor/Color-Picker-Plugin-jQuery-MiniColors/jquery.minicolors.min.js"></script>
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
    <script>
        $('#dashboardNavIntegration').addClass('active');
        $('#dashboardNavIntegration').closest('.collapse').addClass('show');

        // Generated code
        // textGenerator
        $('#btnTextListner').keyup(function(){
            $(this).closest('div').find('input').val($(this).val());
            $('.eventRegister-btn').html($(this).val());
        });
        //choose Text
        $('input[name="btnText"]').change(function(){
            var btnText=$(this).val();
            $('.eventRegister-btn').html(btnText);
        });
        // Btn size
        $('input[name="btnSize"]').change(function(){
            var btnSize=$(this).val();
            $('.eventRegister-btn').css('font-size',btnSize);
        });
        $('[data-toggle="generate"]').click(function () {
            var target = $(this).data('target'),
                style = $('.eventRegister-btn').attr('style'),
                text = $('input[name="btnText"]:checked').val(),
                link = $(this).data('link');
                data = '<a href="' + link + 'target="_blank" style="' + style + '">' + text + '</a>';
            $(target).html(data);
        }).trigger('click');
    </script>
</body>

</html>