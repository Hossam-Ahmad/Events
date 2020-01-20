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
                            <h4>Guest Lists</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#createListModal" class="btn btn-primary">Create
                                List</a>
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
                            <p>Create a list and get the party started!</p>
                        </div> -->
                        <div class="col-md-12">
                            <div class="footable-icons">
                                <table id="guistTable" class="table table-striped" data-empty="No records found.">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="" title="list">List</th>
                                            <th data-breakpoints="" title="checkIn">Checked In</th>
                                            <th data-breakpoints="" data-sortable="false" data-filterable="false"
                                                title="action"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="guist_list_item.php" class="text-info">
                                                    <h6 class="mb-0">List 1</h6>
                                                    <span class="text-muted small">Created By John Don</span>
                                                </a>
                                            </td>
                                            <td>0 / 1</td>
                                            <td class="text-right">
                                                <div class="nav-item dropdown">
                                                    <a class="nav-link  dropdown-toggle text-dark" style="font-size:16pt;" href="#"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="icon icon-dot-3"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right fadeIn animated dur-05">
                                                        <a class="dropdown-item" href="guist_list_item.php">
                                                            View
                                                        </a>
                                                        <a class="dropdown-item text-danger" href="javascript:void(0)">
                                                            Delete
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
<div class="modal fade scale-up shar" id="createListModal" tabindex="-1" role="dialog" aria-labelledby="createListModal"
    aria-hidden="true">
    <div class="modal-dialog  modal-center" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center">New Guest List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row form-light">
                        <div class="col-md-12">
                            <div class="form-group">
                                <p class="m-0">List name</p>
                                <input type="text" class="form-control" placeholder="Enter List Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top:0">
                    <button class="btn btn-outline btn-default" data-dismiss="modal">Done</button>
                    <a href="#" class="btn btn-primary">Add Guests</a>
                </div>
            </form>
        </div>
    </div>