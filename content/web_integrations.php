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
                    <h4>Website Integrations</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <p>Turn your site visitors into attendees with embedded checkout and other helpful widgets.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="ticket_widget.php" class="d-flex">
                            <i class="list-icon icon-list-number pr-3 text-primary"></i>
                            <div class="data w-100">
                                <h6>Ticket Listing</h6>
                                <p class="text-muted small mb-0">
                                    Embed a list of tickets on your site, allowing your attendees to easily see what is
                                    available.
                                </p>
                            </div>
                            <i class="list-group-icon icon-chevron-right"></i>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="button_widget.php" class="d-flex">
                            <i class="list-icon icon-link pr-3 text-primary"></i>
                            <div class="data w-100">
                                <h6>Button</h6>
                                <p class="text-muted small mb-0">
                                    Display a simple 'Buy Now' button that opens your listing on Eventbrite.
                                </p>
                            </div>
                            <i class="list-group-icon icon-chevron-right"></i>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="calender_widget.php" class="d-flex">
                            <i class="list-icon icon-calendar pr-3 text-primary"></i>
                            <div class="data w-100">
                                <h6>Event Calendar</h6>
                                <p class="text-muted small mb-0">
                                    Let attendees browse your events by date.
                                </p>
                            </div>
                            <i class="list-group-icon icon-chevron-right"></i>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="countdown_widget.php" class="d-flex">
                            <i class="list-icon icon-clock pr-3 text-primary"></i>
                            <div class="data w-100">
                                <h6>Countdown</h6>
                                <p class="text-muted small mb-0">
                                    Motivate attendees to buy their tickets before it's too late.
                                </p>
                            </div>
                            <i class="list-group-icon icon-chevron-right"></i>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="textlink_widget.php" class="d-flex">
                            <i class="list-icon icon-text-width pr-3 text-primary"></i>
                            <div class="data w-100">
                                <h6>Text Link</h6>
                                <p class="text-muted small mb-0">
                                    Display a text link that opens your listing on Eventbrite.
                                </p>
                            </div>
                            <i class="list-group-icon icon-chevron-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- Optional -->
                <div class="card flex-row align-items-center mb-5 mt-5">
                    <img class="card-img-left" style="width:250px;" src="assets/img/illustration/embedded_checkout_manage.png"
                        alt="Card image cap">
                    <div class="card-body">
                    <span class="badge badge-success">COMING SOON!</span>
                        <h5 class="card-title">Add Checkout to Your Website</h5>
                        <p class="card-text text-muted">Keeping a connection to your brand during purchase is important. Use our
                            mobile-friendly checkout options so your attendees can purchase directly on your site.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>