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
                    <h4>Add attendees</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="pb-5">
                    <!-- Tickets Tabke -->
                    <div class="row footable-icons">
                        <div class="col-12">
                            <table id="attendeTable" class="table table-striped" data-empty="No records found.">
                                <thead>
                                    <tr>
                                        <th data-breakpoints="xs sm md" title="ticketType">Ticket Type</th>
                                        <th data-breakpoints="" title="sold">Sold</th>
                                        <th data-breakpoints="xs sm" title="price">Price</th>
                                        <th data-breakpoints="xs" title="quantity">Quantity</th>
                                        <th data-breakpoints="xs" title="amountPaid">Amount Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Students</td>
                                        <td class="text-danger">(N/A)</td>
                                        <td>$0.00</td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="$">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Standard</td>
                                        <td>12</td>
                                        <td>$3.00</td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="$">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 ml-auto text-right">
                                    <div class="d-flex align-items-center pr-2 pl-2">
                                        <label for="" class="w-100 pr-3 text-info font-weight-bold">Total Paid</label>
                                        <input type="text" class="form-control" disabled placeholder="$">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <p class="text-muted"><i>* hubbEvent does not charge any fees for manual orders.</i></p>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <div class="form-group">
                                <label class="small">Payment Type</label>
                                <select class="form-control">
                                    <option value="check" selected="selected">Paid with check</option>
                                    <option value="cash">Paid with cash</option>
                                    <option value="paypal">Paid directly online with PayPal</option>
                                    <option value="online">Paid online non-PayPal</option>
                                    <option value="comp">Complimentary</option>
                                    <option value="free">No payment necessary</option>
                                    <option value="voucher">Paid With Voucher</option>
                                    <option value="credit">Paid Directly By Credit Card</option>
                                    <option value="debit">Paid Directly By Debit Card</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <a href="checkout.php" class="btn btn-primary">Continue</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>