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
                    <i class="list-icon icon-list-number pr-3 text-primary"></i>
                    <h4>Ticket Form Widget</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="form-light">
                    <div class="row">
                        <!-- Colors -->
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="">Heading Background</label>
                                <input type="text" class="demo form-control" value="#EFF2F5" data-plugin="colorpicker"
                                    data-target=".g-grid header" data-type="background-color" data-hidden="true">
                                <input type="hidden" value="#EFF2F5">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">General Background</label>
                                <input type="text" class="demo form-control" value="#f8f8fa" data-plugin="colorpicker"
                                    data-target=".g-grid .ticket-widget" data-type="background-color" data-hidden="true">
                                <input type="hidden" value="#f8f8fa">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Border color</label>
                                <input type="text" class="demo form-control" value="#D2D6DF" data-plugin="colorpicker"
                                    data-target=".g-grid .ticket-widget, .g-grid .ticket-widget-date" data-type="border-color" data-hidden="true">
                                <input type="hidden" value="#D2D6DF">
                            </div>
                        </div>
                        <!-- Colors -->
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="">Heading Color</label>
                                <input type="text" class="demo form-control" value="#000" data-plugin="colorpicker"
                                    data-target=".g-grid header" data-type="color" data-hidden="true">
                                <input type="hidden" value="#000">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Primary Text</label>
                                <input type="text" class="demo form-control" value="#555" data-plugin="colorpicker"
                                    data-target=".g-grid .ticket-widget-date" data-type="color" data-hidden="true">
                                <input type="hidden" value="#555">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Secondary Text</label>
                                <input type="text" class="demo form-control" value="#9e9e9e" data-plugin="colorpicker"
                                    data-target=".g-grid small" data-type="color" data-hidden="true">
                                <input type="hidden" value="#9e9e9e">
                            </div>
                        </div>
                    </div>
                    <!-- Preview -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <h6>Preview</h6>
                            <div class="g-grid">
                                <div class="ticket-widget">
                                    <header class="ticket-widget__heading-background">
                                        <div class="g-cell g-cell-6-12">
                                            <h1> Registration</h1>
                                        </div>
                                        <div class="g-cell g-cell-6-12 l-align-right">
                                            <a class="js-powered-by-eb-link" href="https://hubb-events.com" target="_blank">
                                                <img src="templates/ticket/logo-black.png" width="50" alt="Powered By Hubb-events">
                                            </a>
                                        </div>
                                    </header>
                                    <section class="g-group">
                                        <p class="ticket-widget-date">
                                            Wed, May 1, 2019, 7:00 PM – Tue, Oct 1, 2019, 10:00 PM BST
                                        </p>
                                        <section class="card">
                                            <img src="templates/ticket/ticket.png" alt="">
                                            <h3 class="text-medium l-mar-top-3">Sales Ended</h3>
                                            <p class="text-small l-mar-top-3"></p>
                                        </section>
                                    </section>
                                </div>
                                <small>Powerd By Huub-Events</small>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-12">
                            <button class="btn btn-primary" type="button" data-toggle="generate" data-target="#codeLink"
                                data-link="https://www.hubb-event.com/e/artist-tickets-14578539805?ref=elink">Save Changes</button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label for="">Copy and paste this code for use on a webpage</label>
                            <textarea class="form-control font-weight-normal" id="codeLink" readonly=readonly></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>