<section class="bg-white">
    <div class="container-fluid">
        <div class="dash-header">
            <div class="text">
                <span class="text-muted event-status">Live</span>
                <h4 class="section-header event-name p-0 m-0">Event Name</h4>
                <span class="text-muted event-time">Tuesday, January 1, 2019 at 7:00 PM - Saturday, February 2, 2019 at
                    10:00 PM (EET)</span>
            </div>
            <div class="actions">
                <a href="event.php" class="btn btn-outline btn-default">View</a>
            </div>
        </div>
    </div>
</section>
<section class="dash-tabs">
    <div class="container-fluid">
        <ul class="default">
            <li><a href="create_event.php" class="dash-link">Edit</a></li>
            <li><a href="event_preview.php" class="dash-link">Design</a></li>
            <li><a href="javascript:void(0)" class="dash-link active">Manage</a></li>
        </ul>
    </div>
</section>

<section class="has-sidebar">
    <aside class="side-menu hubbEvent-sidemenu">
        <i class="icon-android-close" data-toggle="remove" data-target=".hubbEvent-sidemenu" data-class="show"></i>
        <? include('includes/dashboard_nav.php'); ?>
    </aside>
    <div class="page-content full-screen">
        <div class="container">
            <div class="page-sidemenu-header">
                <div class="header-title d-flex align-items-center">
                    <i class="icon-navicon" data-toggle="toggle" data-target=".hubbEvent-sidemenu" data-class="show"></i>
                    <h4>Add to facebook</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <!-- If user is not connected with fb -->
                <? if ($fb == 0){ ?>
                <div class="container-fluid">
                    <button class="btn bg-fb text-white pt-2 pb-2 mb-3">
                        <i class="icon-facebook mr-2"></i>
                        <span>Connect To facebook</span>
                    </button>
                    <p>Adding your event to Facebook allows people to checkout without leaving your Facebook Event.</p>
                    <div class="row mb-4 responsive-row">
                        <div class="col-md-4 mb-3">
                            <p> 1. Connect to Facebook</p>
                            <img src="assets/img//screen-shots/fb-connect-auth-screen.png" alt="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <p> 2. Select the Facebook Page that's hosting the event</p>
                            <img src="assets/img//screen-shots/fb-connect-page-selection.png" alt="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <p> 3. Publish your new event or add tickets to an existing one</p>
                            <img src="assets/img//screen-shots/fb-connect-my-fb-page-screen.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Important</p>
                            <ul>
                                <li class="text-muted pb-3 small">Your event is added to the Facebook Page you select,
                                    not your personal profile.</li>
                                <li class="text-muted pb-3 small">After you connect to your Facebook account, you can
                                    view and edit details before publishing.</li>
                                <li class="text-muted pb-3 small">Tickets and registrations handled on Facebook will be
                                    processed by HUBB Events.</li>
                                <li class="text-muted pb-3 small">View sales and attendee data from Facebook on your
                                    HUBB Rvnets analytics dashboard.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- If user is connected -->
                <? } else{ ?>
                <div class="container-fluid">
                    <h5 class="mb-4">Facebook account</h5>
                    <div class="d-flex align-items-center" style="flex-wrap: wrap;">
                        <img src="assets/img/people/1.jpg" alt="" class="fb-photo">
                        <p class="mb-0">Connected as <a href="#faceBookLink">Don Joe</a></p>
                        <a href="#" class="btn btn-default btn-outline ml-3">Dissconnect</a>
                    </div>
                    <p class="text-muted mt-3">
                        Facebook doesn't support creation of an Official Event that lasts longer than 4 months for single
                        instance events or a year for repeating events.
                    </p>
                </div>
                <? }?>
            </div>
        </div>
    </div>
</section>