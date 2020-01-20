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
                    <h4>Discount & Access Codes</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="">
                    <div class="action-bar d-flex d-flex-action">
                        <a href="javascript:void(0)" class="btn btn-default btn-outline" data-toggle="modal"
                            data-target="#newCode" data-selectdom="#createOfferFor">
                            <i class="icon-plus mr-2"></i>
                            New Code
                        </a>
                        <a href="javascript:void(0)" class="btn bt-link">Delete unused codes</a>
                    </div>
                    <div class="row footable-icons">
                        <div class="col-12">
                            <div id="filter-form-container" class="filter-container">
                                <select name="" class="form-control w-auto">
                                    <option value="" selected>All</option>
                                    <option value="">Access Codes</option>
                                    <option value="">Coded Disscount</option>
                                    <option value="">Public Disscount</option>
                                </select>
                            </div>
                            <table id="discountTable" class="table table-striped" data-empty="There are currently no discounts or access codes associated with this event">
                                <thead>
                                    <tr>
                                        <th data-name="name" scope="col">Name</th>
                                        <th data-name="actions" data-breakpoints="xs sm" scope="col">Type</th>
                                        <th data-name="actions" scope="col">Amount</th>
                                        <th data-name="actions" data-breakpoints="xs sm" scope="col">Uses</th>
                                        <th data-name="actions" data-breakpoints="xs sm md" data-filterable="false"
                                            class="text-right" scope="col">Starts-Ends</th>
                                        <th data-name="actions" data-breakpoints="xs sm" data-filterable="false" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Code name</th>
                                        <td>Coded discount</td>
                                        <td>2.00%</td>
                                        <td>0/∞</td>
                                        <td class="text-right">
                                            <span class="d-block small">Starts: Started</span>
                                            <span class="d-block small">Ends: When sales end</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right fadeIn animated dur-05 table-dropdown mt-2"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#newCode"
                                                        data-selectdom="#configureCode" href="javascript:void(0)">Configure
                                                        Code</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#newCode"
                                                        data-selectdom="#chooseTickets" href="javascript:void(0)">Change
                                                        Ticket Selection</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#shareCode"
                                                        href="javascript:void(0)">View shortable Link</a>
                                                    <a class="dropdown-item text-danger" data-toggle="modal"
                                                        data-target="#deleteModal" href="javascript:void(0)">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="small text-info">
                                Showing 1 to 1 of 1 discount
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<!-- Add new Code (Discount) -->
<div class="modal fade" id="newCode" tabindex="-1" role="dialog" aria-labelledby="newCode" aria-hidden="true">
    <div class="modal-dialog  modal-center modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Discount & Access Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" class="checkout-box form-light">
                <div class="modal-body">
                    <!-- Section 1 -->
                    <section class="modal-section" id="createOfferFor">
                        <div class="section-header">
                            <h5 class="text-center text-muted font-weight-normal">Create offer or promotion for...</h5>
                        </div>
                        <ul class="list-group list-group-flush row">
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="d-flex" data-toggle="replace" data-replace="#createOfferFor"
                                    data-replace-with="#typeOfPromotion">
                                    <div class="data">
                                        <h6>This event only</h6>
                                        <p class="text-muted small mb-0">
                                            The offer or promotion will only be available on 'Event name'.
                                        </p>
                                    </div>
                                    <i class="list-group-icon icon-chevron-right"></i>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="d-flex" data-toggle="replace" data-replace="#createOfferFor"
                                    data-replace-with="#typeOfPromotionMulti">
                                    <div class="data">
                                        <h6>Use across multiple events</h6>
                                        <p class="text-muted small mb-0">
                                            Create a code that can be used in tickets groups across multiple events.
                                        </p>
                                    </div>
                                    <i class="list-group-icon icon-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <!-- Section2 -->
                    <section class="modal-section hide" id="typeOfPromotion">
                        <div class="section-header">
                            <!-- <a href="javascript:void(0)" class="section-back" data-toggle="replace" data-replace="#typeOfPromotion"
                                data-replace-with="#createOfferFor">
                                <i class="icon-angle-left"></i>
                            </a> -->
                            <h5 class="text-center text-muted font-weight-normal">What type of offer or promotion?</h5>
                        </div>
                        <ul class="list-group list-group-flush row">
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="d-flex" data-toggle="replace" data-replace="#typeOfPromotion"
                                    data-replace-with="#whatTickets">
                                    <div class="data">
                                        <h6>Coded discounts</h6>
                                        <p class="text-muted small mb-0">
                                            A promotional code that enables a discount to be applied to a selected
                                            ticket.
                                        </p>
                                    </div>
                                    <i class="list-group-icon icon-chevron-right"></i>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="d-flex" data-toggle="replace" data-replace="#typeOfPromotion"
                                    data-replace-with="#whatTickets">
                                    <div class="data">
                                        <h6>Coded access to hidden tickets</h6>
                                        <p class="text-muted small mb-0">
                                            A code that provides access to restricted types.
                                        </p>
                                    </div>
                                    <i class="list-group-icon icon-chevron-right"></i>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="d-flex" data-toggle="replace" data-replace="#typeOfPromotion"
                                    data-replace-with="#whatTickets">
                                    <div class="data">
                                        <h6>Public discounts</h6>
                                        <p class="text-muted small mb-0">
                                            Always visible discounts on tickets, E.g. Child, Seniors, Military
                                            Personnel etc
                                        </p>
                                    </div>
                                    <i class="list-group-icon icon-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <!-- Section 3 -->
                    <section class="modal-section hide" id="typeOfPromotionMulti">
                        <div class="section-header">
                            <!-- <a href="javascript:void(0)" class="section-back" data-toggle="replace" data-replace="#typeOfPromotionMulti"
                                data-replace-with="#createOfferFor">
                                <i class="icon-angle-left"></i>
                            </a> -->
                            <h5 class="text-center text-muted font-weight-normal">What type of offer or promotion?</h5>
                        </div>
                        <ul class="list-group list-group-flush row">
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="d-flex" data-toggle="replace" data-replace="#typeOfPromotionMulti"
                                    data-replace-with="#whatTickets">
                                    <div class="data">
                                        <h6>Coded discounts</h6>
                                        <p class="text-muted small mb-0">
                                            A promotional code that enables a discount to be applied to a selected
                                            ticket.
                                        </p>
                                    </div>
                                    <i class="list-group-icon icon-chevron-right"></i>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="d-flex" data-toggle="replace" data-replace="#typeOfPromotionMulti"
                                    data-replace-with="#whatTickets">
                                    <div class="data">
                                        <h6>Coded access to hidden tickets</h6>
                                        <p class="text-muted small mb-0">
                                            A code that provides access to restricted types.
                                        </p>
                                    </div>
                                    <i class="list-group-icon icon-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <!-- Section 4  -->
                    <section class="modal-section hide" id="whatTickets">
                        <div class="section-header">
                            <!-- <a href="javascript:void(0)" class="section-back" data-toggle="replace" data-replace="#whatTickets"
                                data-replace-with="#typeOfPromotionMulti">
                                <i class="icon-angle-left"></i>
                            </a> -->
                            <h5 class="text-center text-muted font-weight-normal">What tickets?</h5>
                        </div>
                        <ul class="list-group list-group-flush row">
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="d-flex" data-toggle="replace" data-replace="#whatTickets"
                                    data-replace-with="#configureCode">
                                    <div class="data">
                                        <h6>ALL events ALL tickets</h6>
                                        <p class="text-muted small mb-0">
                                            Apply this code across your entire inventory (past, current and future
                                            events)
                                        </p>
                                    </div>
                                    <i class="list-group-icon icon-chevron-right"></i>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="d-flex" data-toggle="replace" data-replace="#whatTickets"
                                    data-replace-with="#chooseTickets">
                                    <div class="data">
                                        <h6>A new group of tickets</h6>
                                        <p class="text-muted small mb-0">
                                            Select events and tickets to create a new ticket group
                                        </p>
                                    </div>
                                    <i class="list-group-icon icon-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <!-- Section 5 -->
                    <section class="modal-section hide" id="chooseTickets">
                        <div class="section-header">
                            <!-- <a href="javascript:void(0)" class="section-back" data-toggle="replace" data-replace="#whatTickets"
                                data-replace-with="#typeOfPromotionMulti">
                                <i class="icon-angle-left"></i>
                            </a> -->
                            <h5 class="text-center text-muted font-weight-normal">Select tickets</h5>
                            <ul class="checkout-list default">
                                <li>
                                    <div class="ticket-box">
                                        <div class="ticket-data">
                                            <h6 class="name">Airport VIP Pickup and Dropoff</h6>
                                            <!-- Free -->
                                            <p>
                                                <span class="text-uppercase">Free</span>
                                                <span class="bg-light badge p-2 text-muted">25 remaining</span>
                                            </p>
                                        </div>
                                        <div class="ticket-selection">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ticketId">
                                                <label class="custom-control-label" for="ticketId"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="modal-footer" style="border-top:0">
                                <button class="btn btn-primary" data-toggle="replace" data-replace="#chooseTickets"
                                    data-replace-with="#configureCode">Continue</button>
                            </div>
                        </div>
                    </section>
                    <!-- Section 6 -->
                    <section class="modal-section hide" id="configureCode">
                        <div class="section-header">
                            <!-- <a href="javascript:void(0)" class="section-back" data-toggle="replace" data-replace="#whatTickets"
                                data-replace-with="#typeOfPromotionMulti">
                                <i class="icon-angle-left"></i>
                            </a> -->
                            <h5 class="text-center text-muted font-weight-normal">Configure Your Discount Code</h5>
                        </div>
                        <div class="row m-auto" style="max-width:700px">
                            <div class="col-md-12 mb-3">
                                <h6>Code Type</h6>
                                <div class="d-flex">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="codeTypeSingle" value="single" name="codeType" class="custom-control-input"
                                            checked>
                                        <label class="custom-control-label" for="codeTypeSingle">Single code</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="codeTypeCsv" value="csv" name="codeType" class="custom-control-input">
                                        <label class="custom-control-label" for="codeTypeCsv">CSV list of codes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group mb-3 check-code" id="singleCodeData">
                                    <input type="text" class="form-control" placeholder="Enter a name to help your attendees choose">
                                    <small class="text-muted">
                                        E.g. Members, Child, Senior, Military etc. Presented as a sub-option to
                                        attendees when selecting a ticket.
                                    </small>
                                </div>
                                <div class="input-group mb-3 check-code" id="csvCodeData">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                    <small class="d-block text-muted">
                                        Spaces, apostrophes and non-alphanumeric characters (except -, _, @, and .) are
                                        not allowed.
                                    </small>
                                    <small class="d-block text-muted">
                                        File must be plain text (example: *.csv or *.txt) and can contain up to 5,000
                                        codes, separated by commas or listed on separate lines
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Discount Amount</label>
                                    <div class="d-flex align-items-center">
                                        <div class="input-group group-custom">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">$</span>
                                        </div>
                                        <span class="ml-4 mr-4">OR</span>
                                        <div class="input-group group-custom">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Uses</label>
                                    <div class="d-flex align-items-center select-box">
                                        <select class="form-control col-md-4" data-toggle="selection">
                                            <option value="unlimitedSelection" selected>Unlimited</option>
                                            <option value="limitedSelection">Limited To</option>
                                        </select>
                                        <div class="input-group group-custom ml-3 select-option" id="limitedSelection">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">Users</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Starts</label>
                                    <div class="d-flex align-items-center select-box">
                                        <select class="form-control mr-3 col-md-4" data-toggle="selection">
                                            <option value="nowSelection" selected>Now</option>
                                            <option value="onDateSelection">On specific date</option>
                                            <option value="countDownSelection">Countdown</option>
                                        </select>
                                        <div id="onDateSelection" class="select-option">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control flatpickr mr-3" placeholder="select date ..">
                                                <span class="mr-3">at</span>
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>
                                        <div id="countDownSelection" class="select-option">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control mr-3" placeholder="Days">
                                                <input type="text" class="form-control mr-3" placeholder="Hours">
                                                <input type="text" class="form-control mr-3" placeholder="Minutes">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Ends</label>
                                    <div class="d-flex align-items-center select-box">
                                        <select class="form-control mr-3 col-md-4" data-toggle="selection">
                                            <option value="nowSelectionEnd" selected>When Sales End</option>
                                            <option value="onDateSelectionEnd">On specific date</option>
                                            <option value="countDownSelectionEnd">Countdown</option>
                                        </select>
                                        <div id="onDateSelectionEnd" class="select-option">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control flatpickr mr-3" placeholder="select date ..">
                                                <span class="mr-3">at</span>
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>
                                        <div id="countDownSelectionEnd" class="select-option">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control mr-3" placeholder="Days">
                                                <input type="text" class="form-control mr-3" placeholder="Hours">
                                                <input type="text" class="form-control mr-3" placeholder="Minutes">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border-top:0">
                            <button class="btn btn-primary" data-toggle="replace" data-replace="#configureCode"
                                data-replace-with="#confirmation">Continue</button>
                        </div>
                    </section>
                    <!-- Section 7  -->
                    <section class="modal-section hide" id="confirmation">
                        <div class="section-header">
                            <!-- <a href="javascript:void(0)" class="section-back" data-toggle="replace" data-replace="#whatTickets"
                                data-replace-with="#typeOfPromotionMulti">
                                <i class="icon-angle-left"></i>
                            </a> -->
                            <h5 class="text-center text-muted font-weight-normal">Confirmation</h5>
                        </div>
                        <div class="panel">
                            <div class="p-4 shadow">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="mb-4">
                                            <p class="text-muted small mb-0">Code</p>
                                            <h5>Code Name</h5>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="mb-4">
                                            <p class="text-muted small mb-0">Discount Amount</p>
                                            <p>20% off</p>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="mb-4">
                                            <p class="text-muted small mb-0">Code Type</p>
                                            <p>Discount Code</p>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="mb-4">
                                            <p class="text-muted small mb-0">Availability</p>
                                            <p>Starts: January 15, 2019 8:19 PM.</p>
                                            <p>Ends: January 16, 2019 8:19 PM.</p>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="mb-4">
                                            <p class="text-muted small mb-0">Uses</p>
                                            <p>Limited to 5 uses across all selected events and tickets</p>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="mb-4">
                                            <p class="text-muted small mb-0">Please Note</p>
                                            <p>Discounts can only be applied to paid tickets. Using a discount code on
                                                a free or donation ticket during purchase will have no effect.</p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border-top:0">
                            <button class="btn btn-success" data-dismiss="modal">Save & finish</button>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- share modal -->
<div class="modal fade scale-up share-box" id="shareCode" tabindex="-1" role="dialog" aria-labelledby="shareCode"
    aria-hidden="true">
    <div class="modal-dialog modal-center" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h6><strong>Share discount code</strong></h6>
                    <p class="text-muted text-center small mb-4">
                        You can embed this code in a link to publish on your website, blog, an email, etc. by using the
                        format below. This link will allow the registrant to see the discounted prices or hidden
                        tickets on the event page without having to enter the code.
                    </p>
                    <div class="input-group copy-holder">
                        <label for="">Code</label>
                        <input type="text" class="form-control" value="https://ecsffcg.event-hubb.com?discount=codename">
                        <div class="input-group-append">
                            <span class="input-group-text" data-copy="true" data-toggle="tooltip" data-placement="top"
                                title="Copy">
                                <i class="icon-clone"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>