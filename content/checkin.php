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
                    <h4>Check-in</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="pb-5">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card icon-card border-0">
                                <div class="card-body">
                                    <i class="card-icon icon-sold"></i>
                                    <div class="card-data w-100">
                                        <p>0 / 1</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                                        </div>
                                        <h5>25%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        <hr>
                            <div class="footable-icons full-screen">
                                <div class="pl-3 pr-3">
                                    <h3>Attendee List</h3>
                                    <p class="text-muted">Search for attendees by name or email</p>
                                </div>
                                <table id="guistTable" class="table table-striped" data-empty="No records found.">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="" title="AttendeeName">Attendee Name</th>
                                            <th data-breakpoints="" title="email">Email</th>
                                            <th data-breakpoints="" title="TicketType">Ticket Type</th>
                                            <th class="text-right" data-breakpoints="" data-sortable="false" data-filterable="false" title="action">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>john doe</td>
                                            <td>Email.example.com</td>
                                            <td>Standard</td>
                                            <td class="text-right small"><a href="#">Check in</a></td>
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