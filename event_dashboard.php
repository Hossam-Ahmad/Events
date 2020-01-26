
<? include('content/event_dashboard.php'); ?>
<script>
        $('#eventDashboardLink').addClass('active');
        $('[data-plugin="asPieProgress"]').each(function () {
            var goal = $(this).data('goal');
            var valuemin = $(this).data('valuemin');
            var step = $(this).data('step');
            var valuemax = $(this).data('valuemax');
            var barcolor = $(this).data('barcolor');
            $(this).asPieProgress({
                namespace: '',
                min: valuemin,
                max: valuemax,
                goal: goal,
                barcolor: barcolor,
            });
            $(this).asPieProgress('start');
        });
        window.setTimeout(function () {
            $(".alert").fadeTo(300, 0).slideUp(300, function () {
                $(this).remove();
            });
        }, 4000);
</script>