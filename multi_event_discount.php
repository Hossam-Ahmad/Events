<? $page="multi_event_discount";
   $login=1;
   include ('lang/en.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- custom page stylesheets -->
    <link rel="stylesheet" href="assets/vendor/footable/css/footable.standalone.css">
    <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css">
    <? include("includes/header.php"); ?>
    <title> Hubb Events - MyEvent Dashboard </title>
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>
    <!-- App -->
    <main id="app">
        <? include('content/multi_event_discount.php'); ?>
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
    <script>
        $('#dashboardNavDiscount').addClass('active');
        $('#dashboardNavDiscount').closest('.collapse').addClass('show');

        $('.flatpickr').flatpickr();

        $('input[name="codeType"]').bind('change',function(){
            var dataValue = $('input[name="codeType"]:checked').val();
            $('.check-code').hide();
            if(dataValue=="single"){
                $('#singleCodeData').show();
            } else if(dataValue=="csv")   {
                $('#csvCodeData').show();
            };
        }).trigger('change');
        $(document).on('click', '*[data-selectdom]', function(){
            var dom = $(this).data('selectdom');
            console.log(dom);
            $('.modal-section').hide();
            $(dom).show();
        })
        $('[data-toggle="selection"]').change(function(){
            // console.log($(this).val());
            $(this).closest('.select-box').find('.select-option').hide();
            $('#'+$(this).val()).show();
            
        }).trigger('change');
        var ft = FooTable.init('#discountTable', {
            paging: {
                enabled: true,
            },
            filtering: {
                enabled: true,
                "container": "#filter-form-container"
            },
            sorting: {
                enabled: true
            },
            "on": {
                'postinit.ft.table': function (e, ft) {
                    $('.footable-filtering-search .dropdown-menu').remove();
                    $('.footable-filtering-search .dropdown-toggle').remove();
                }
            }
        });
    </script>
</body>

</html>