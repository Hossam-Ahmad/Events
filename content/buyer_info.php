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
                    <h4>Edit Ticket Buyer Information</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <h5>John Doe</h5>
                <span class="text-muted">Ticket Buyer - <a href="orders.php">(Order #873191405)</a></span>
                <hr>
                <p class="mb-0 text-muted">The information being collected on your event registration pages is below.</p>
                <p class="mb-0 text-muted">You can now <a href="order_form.php">customize the info you collect</a>
                    during attendee registration.</p>
                <form action="" class="pb-5 pt-5">
                    <h5 class="mb-4">Contact Information</h5>
                    <!-- Row contact -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="small">Prefix</label>
                                <select class="form-control">
                                    <option value="" selected="selected"></option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mx.">Mx.</option>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Prof.">Prof.</option>
                                    <option value="Rev.">Rev.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="small">First Name</label>
                                <input type="text" class="form-control" value="John">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="small">Last Name</label>
                                <input type="text" class="form-control" value="Doe">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="small">Suffix</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="small">Email</label>
                                <input type="email" class="form-control" value="email@example.com">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">Send confirmation email to new
                                    attendee</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>