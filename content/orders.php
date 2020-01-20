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
                    <h4>Orders</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="pb-5 table-filter">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <div class="form-group">
                                <label class="small">Report Type</label>
                                <select class="form-control">
                                    <optgroup label="Basic Reports">
                                        <option value="">Attendee Summary</option>
                                        <option value="">Custom
                                            Questions Responses</option>
                                        <option value="">Sales By
                                            Ticket Type</option>
                                        <option value="">Attendee
                                            Geography</option>
                                        <option value="">Event
                                            Attendance By Time</option>
                                        <option value="">Promotion
                                            Code Usage</option>
                                        <option value="">Event
                                            Attendance vs No Shows</option>
                                        <option value="">Sales Summary</option>
                                        <option value="">Device Sales
                                            Summary</option>
                                        <option value="">Device
                                            Check-in Summary</option>
                                        <option selected="selected" value="">Orders</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label class="small">ORDER TYPE</label>
                                <select class="form-control">
                                    <option value="all" selected="selected">All Orders</option>
                                    <option value="attending">All Completed Orders</option>
                                    <option value="online_sales">All Completed Orders - Not Manual - Not Guests</option>
                                    <option value="refunded">Refunded and Canceled Orders</option>
                                    <option value="refund_requests">Pending Refund Requests</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label class="small">DATE</label>
                                <select class="form-control">
                                    <option value="1" selected="selected">Since sales started</option>
                                    <option value="3">This month</option>
                                    <option value="2">This week</option>
                                    <option value="5">Custom date range</option>
                                    <option value="4">This year</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label class="small">SORT</label>
                                <select class="form-control">
                                    <option value="1" selected="selected">Date Descending</option>
                                    <option value="3">Email Ascending</option>
                                    <option value="2">Date Ascending</option>
                                    <option value="5">Amount Ascending</option>
                                    <option value="4">Email Descending</option>
                                    <option value="6">Amount Descending</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label class="small">PER PAGE</label>
                                <select class="form-control">
                                    <option value="20" selected="selected">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="200">200</option>
                                    <option value="500">500</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <div class="form-group">
                                <label class="small">Export:</label>
                                <select class="form-control">
                                    <option value="select" selected="selected">File Type</option>
                                    <option value="csv">Export to CSV</option>
                                    <option value="excel">Export to Excel</option>
                                    <option value="text">Export to Text</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Order Tabke -->
                <div class="row footable-icons full-screen">
                    <div class="col-12">
                        <table id="orderTable" class="table table-striped" data-empty="No records found.">
                            <thead>
                                <tr>
                                    <th class="small" data-breakpoints="xs sm md"  title="orderID">Order ID</th>
                                    <th class="small" data-breakpoints="" title="eventName">Event Name</th>
                                    <th class="small" data-breakpoints="xs sm" title="date">Date</th>
                                    <th class="small" data-breakpoints="xs" title="paymentProcessing">Paid</th>
                                    <th class="small" data-breakpoints="xs" title="tickets">TICKETS</th>
                                    <th class="small" data-breakpoints="xs sm" title="type">TYPE</th>
                                    <th class="small" data-breakpoints="" title="name">Ticket Buyer	</th>
                                    <th class="small" data-breakpoints="xs sm" title="email">Email Address</th>
                                    <th class="small" data-breakpoints="" data-sortable="false" data-filterable="false" title="action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>873191405</td>
                                    <td>
                                        <h6 class="mb-0">Event name</h6>
                                        <span class="text-muted small">Location : Live</span>
                                    </td>
                                    <td>Dec 16, 2018 at 4:41 PM (GMT)</td>
                                    <td>$0.00</td>
                                    <td>1</td>
                                    <td>Free Order</td>
                                    <td><a href="buyer_info.php">John Doe</a></td>
                                    <td><a href="mailto:email@exmale.com" class="text-info">email@exmale.com</a></td>
                                    <td>
                                        <select class="form-control">
                                            <option value="" selected="selected">Actions</option>
                                            <option value="">Edit Ticket
                                                Buyer</option>
                                            <option value="">Delete this
                                                Order</option>
                                            <option value="">View Refunded Attendees</option>
                                            <option value="">
                                                Add Order Note
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>