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
                    <h4>Event Dashboard</h4>
                </div>
                <d class="header-actions">
                    <a href="#" class="text-info">Unpublish</a>
                    <a href="#" class="text-info">Copy</a>
                    <a href="#" class="text-info">Cancel</a>
                    <a href="#" class="text-danger">Delete</a>
                </d>
            </div>
            <div class="page-sidemenu-body">
                <!-- alert -->
                <div class="alert alert-success" role="alert">
                    <p class="m-0">
                        <i class="icon-checkmark mr-3"></i>
                        Congratulations, your event is live on hubbEvent!
                        <a href="#" class="text-white">
                            <strong>Publish event to Facebook.</strong>
                        </a>
                    </p>
                </div>
                <div class="row mb-5">
                    <!-- Row 1 -->
                    <div class="col-md-4 d-grid">
                        <div class="card icon-card">
                            <div class="card-body">
                                <i class="card-icon icon-ticket"></i>
                                <div class="card-data">
                                    <h6>Live!</h6>
                                    <p class="small mb-0 text-muted">Your event is up and running and tickets
                                        are on sale.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-grid">
                        <div class="card icon-card">
                            <div class="card-body">
                                <i class="card-icon icon-block"></i>
                                <div class="card-data">
                                    <h6>Private <a href="create_event.php" class="small">Edit</a></h6>
                                    <p class="small mb-0 text-muted">Your event is not listed or searchable.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-grid">
                        <div class="card icon-card">
                            <div class="card-body">
                                <i class="card-icon icon-sold"></i>
                                <div class="card-data w-100">
                                    <p>2 Ticket Sold / 6</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%"></div>
                                    </div>
                                    <h5>25%</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-8 col-md-12">
                        <!-- Row 2 -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="card" style="border-top:0;border-bottom:0;border-right:0">
                                    <div class="nav-tabs-vertical d-flex" data-plugin="tabs">
                                        <ul class="nav nav-tabs nav-tabs-solid small" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-toggle="tab" href="#exampleTabsSolidLeftOne"
                                                    role="tab">
                                                    <span class="tab-title">Tickets sold</span>
                                                    <span class="counter d-block">2</span>
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-toggle="tab" href="#exampleTabsSolidLeftTwo"
                                                    role="tab">
                                                    <span class="tab-title">Page views</span>
                                                    <span class="counter d-block">5</span>
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-toggle="tab" href="#exampleTabsSolidLeftThree"
                                                    role="tab">
                                                    <span class="tab-title">Invites</span>
                                                    <span class="counter d-block">0</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content card-body">
                                            <div class="tab-pane active" id="exampleTabsSolidLeftOne" role="tabpanel">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h6>Tickets sold</h6>
                                                        <p class="text-muted small">All time</p>
                                                    </div>
                                                    <div class="action">
                                                        <a href="#" class="small">View details</a>
                                                    </div>
                                                </div>
                                                <div class="tab-body">
                                                    <div class="chart-data">
                                                        <div class="pieProgress" role="progressbar" data-goal="2"
                                                            aria-valuemin="0" data-step="1" aria-valuemax="6" role="progressbar"
                                                            data-plugin="asPieProgress" data-barcolor="#ec008c">
                                                            <div class="progress__meter"><span class="progress__label"></span></div>
                                                        </div>
                                                        <div class="chart-labels">
                                                            <span class="doted-data">Available</span>
                                                            <span class="doted-data active">Sold</span>
                                                        </div>
                                                    </div>
                                                    <ul class="default border-top pt-3 text-muted mb-0">
                                                        <li class="heading">
                                                            <p class="small">Sold</p>
                                                            <p class="small">2</p>
                                                        </li>
                                                        <li class="heading">
                                                            <p class="small">Available</p>
                                                            <p class="small">6</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="exampleTabsSolidLeftTwo" role="tabpanel">
                                                <div id="myfirstchart" style="height: 250px;"></div>
                                            </div>
                                            <div class="tab-pane" id="exampleTabsSolidLeftThree" role="tabpanel">
                                                <h6>Invites</h6>
                                                <h2>0</h2>
                                                <h6 class="small">invitations opened</h6>
                                                <h2>0.00%</h2>
                                                <small class="text-muted">conversion rate</small>
                                                <a href="createinvite.php" class="small d-block">Send email invitations</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row 3 -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Sales by Ticket Type</h4>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover table-borderless small">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th scope="col">Ticket Type </th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Sold</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">End Sales</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="create_event.php">Ticket name</a></td>
                                                        <td></td>
                                                        <td>1/2</td>
                                                        <td>On Sale</td>
                                                        <td>1/1/19 6:00 PM</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row 4 -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <h4>Common Reports</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="javascript:void(0)" class="d-flex">
                                            <div class="data">
                                                <h6>Attendee Summary</h6>
                                                <p class="text-muted small mb-0">
                                                    Information about attendees
                                                </p>
                                            </div>
                                            <i class="list-group-icon icon-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javascript:void(0)" class="d-flex">
                                            <div class="data">
                                                <h6>Custom Questions Responses</h6>
                                                <p class="text-muted small mb-0">
                                                    Information about attendees collected by questions on the order
                                                    form
                                                </p>
                                            </div>
                                            <i class="list-group-icon icon-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Row 5 -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Recent Orders</h4>
                                        <div class="table-responsive">
                                            <table class="table table-sm small table-hover table-borderless">
                                                <caption>
                                                    <a href="#">View All</a>
                                                    <span class="mr-2 ml-2">|</span>
                                                    <a href="#">View Refunds</a>
                                                </caption>
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th scope="col">Order # </th>
                                                        <th scope="col">Ticket Buyer</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Payment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="orders.php">873191405</a></td>
                                                        <td>Don joe</td>
                                                        <td>1</td>
                                                        <td>$0.00</td>
                                                        <td>Dec 16, 2018</td>
                                                        <td>Free Order</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row 6 -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <h4>Your Links</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <h6>
                                            Your Organizer URL:
                                            <a href="organization.php"> http://scarsaffvggc.hubb-Event.com?s=31431089</a>
                                            <a href="#organizerURL" data-toggle="collapse" role="button" aria-expanded="false"
                                                aria-controls="organizerURL">[change]</a>
                                            <div id="organizerURL" class="collapse">
                                                <form action="">
                                                    <p class="pt-3 small text-muted">Create your own Personalized
                                                        Organizer URL for name</p>
                                                    <div class="d-flex align-items-center">
                                                        <span class="pr-2">http://</span>
                                                        <input type="text" value="scarsaffvggc" class="form-control w-auto">
                                                        <span class="pl-2 pr-2">.hubb-events.com</span>
                                                        <button class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </h6>
                                        <h6>
                                            Share this event on Twitter:
                                            <a href="#">https://www.hubb-events.com/e/artist-tickets-14578539805?ref=estw</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <h6>Your Event URL</h6>
                                <div id="eventUrl">
                                    <div class="input-group copy-holder">
                                        <input type="text" class="form-control" value="https://www.ecsffcg.event.hubb.com">
                                        <div class="input-group-append">
                                            <span class="input-group-text" data-copy="true" data-toggle="tooltip"
                                                data-placement="top" title="Copy">
                                                <i class="icon-clone"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href="" class="d-inline-block p-2" data-toggle="replace" data-replace="#eventUrl"
                                            data-replace-with="#eventUrlEdit">Edit</a>
                                    </div>
                                </div>
                                <div id="eventUrlEdit" class="hide">
                                    <form action="">
                                        <div class="d-flex align-items-center">
                                            <input type="text" class="form-control" value="ecsffcg">
                                            <span class="pl-2">event.hubb.com</span>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <button class="btn btn-primary mr-2" data-toggle="replace" data-replace="#eventUrlEdit"
                                                data-replace-with="#eventUrl">Save</button>
                                            <button class="btn btn-default btn-outline mr-2" data-toggle="replace"
                                                data-replace="#eventUrlEdit" data-replace-with="#eventUrl">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>