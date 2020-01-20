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
                    <h4>Manage Waitlist</h4>
                </div>
                <p class="text-muted">Number of people on the waitlist <span>11</span></p>
            </div>
            <div class="page-sidemenu-body">
                <!-- alert -->
                <div class="alert alert-dark" role="alert">
                    <p class="m-0">
                        <i class="icon-information-circled mr-3"></i>
                        Tickets released to attendees on the waitlist will allow you to exceed your total event
                        capacity.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </p>
                </div>
                <!-- /alert -->
                <form action="" class="pb-5">
                    <ul class="table-controller">
                        <li>
                            <a href="javascript:void(0)" data-target="#addTowishlist" data-toggle="modal">
                                <i class="icon-plus"></i>
                                Add people to the waitlist
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-target="#deleteModal" data-toggle="modal">
                                Delete
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Export to file
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-target="#copyToContactList" data-toggle="modal">
                                Save to contact list
                            </a>
                        </li>
                    </ul>
                    <!-- Table -->
                    <div class="row footable-icons">
                        <div class="col-12">
                            <table id="watilistTable" class="table table-striped" data-empty="No records found.">
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary">Release Tickets</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
