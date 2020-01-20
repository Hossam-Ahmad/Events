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
    <div class="page-content">
        <div class="container">
            <div class="page-sidemenu-header">
                <div class="header-title d-flex align-items-center">
                    <i class="icon-navicon" data-toggle="toggle" data-target=".hubbEvent-sidemenu" data-class="show"></i>
                    <div class="row w-100">
                        <div class="col-md-6">
                            <h4>List 1</h4>
                            <span class="small">
                                <i class="icon icon-angle-left mr-1"></i>
                                <a href="guest_list.php">Back to Guest Lists</a>
                            </span>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#addGuestModal" class="btn btn-primary">Add
                                Guest</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="pb-5">
                    <!-- Row -->
                    <div class="row">
                        <!-- Empty case -->
                        <!-- <div class="text-center w-100 pt-5 pb-5">
                            <img src="assets/img/illustration/empty-1.png" style="width:250px;" class="mr-auto" alt="">
                            <h4 class="pt-4">Nothing here yet</h4>
                            <p>Add Guest and get the party started!</p>
                        </div> -->
                        <div class="col-md-12">
                            <div class="footable-icons">
                                <table id="guistTable" class="table table-striped" data-empty="No records found.">
                                    <thead>
                                        <tr>
                                            <td data-breakpoints="" title="Guest">Guest</td>
                                            <td data-breakpoints="" title="Notification">Notification</td>
                                            <td data-breakpoints="" title="checkIn">Checked In</td>
                                            <td data-breakpoints="" data-sortable="false" data-filterable="false" title="action"></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#addGuestModal"
                                                    class="text-info">
                                                    <h6 class="mb-0">Sara smith</h6>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="text-muted">
                                                    <i class="icon icon-bell mr-2"></i>
                                                    <span>OFF</span>
                                                </div>
                                            </td>
                                            <td>0 / 1</td>
                                            <td class="text-right">
                                                <div class="nav-item dropdown">
                                                    <a class="nav-link  dropdown-toggle text-dark" style="font-size:16pt;"
                                                        href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="icon icon-dot-3"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right fadeIn animated dur-05">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"
                                                            data-target="#addGuestModal">
                                                            View
                                                        </a>
                                                        <a class="dropdown-item text-danger" href="javascript:void(0)">
                                                            Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- modal -->
<div class="modal fade" id="addGuestModal" tabindex="-1" role="dialog" aria-labelledby="addGuestModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Guest</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-light">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="m-0">First name</p>
                                    <input type="text" class="form-control" placeholder="Enter List Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="m-0">Last name</p>
                                    <input type="text" class="form-control" placeholder="Enter List Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p class="m-0">Guest Email</p>
                                    <input type="email" class="form-control">
                                    <i class="small text-info">
                                        Enter email if you want to send guest a ticket
                                    </i>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Tickets Selected</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="m-0">Standard Tickets</p>
                                    <input type="text" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="m-0">Free Tickets</p>
                                    <input type="text" class="form-control" placeholder="0">
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="notificationCheck">
                                    <label class="custom-control-label font-weight-normal" for="notificationCheck">
                                        <h6 class="mb-0 small">Notification upon arrival</h6>
                                        <p class="text-muted small">The guest list creator will be notified when this
                                            guest is checked in via hubbEvent's Android Organizer App.</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top:0">
                    <button class="btn btn-outline btn-default" data-dismiss="modal">Cancel</button>
                    <a href="#" class="btn btn-primary">Confirm</a>
                </div>
            </form>
        </div>
    </div>