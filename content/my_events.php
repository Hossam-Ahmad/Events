<div class="page">
    <div class="page-header bg-white">
        <div class="container">
            <div class="header-title">
                <h1>Manage Events</h1>
                <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for events and attendees">
                    <div class="input-group-append">
                        <button class="btn btn-default bg-light" type="button">
                            <i class="icon-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="organizer-body">
            <div class="container">
                <div class="row">
                    <!-- Events Tabs -->
                    <div class="col-lg-9 col-md-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#liveEventsTab" role="tab"
                                    aria-selected="true">
                                    Live <span class="ml-2"> 1 </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#draftEventsTab" role="tab" aria-selected="false">
                                    Draft<span class="ml-2">0</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pastEventsTab" role="tab" aria-selected="false">
                                    Past<span class="ml-2">0</span>
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liveEventsTab" role="tabpanel">
                                <ul class="default">
                                    <li class="manage-list-item">
                                        <div class="data w-100 pr-4">
                                            <a href="event.php" class="text-info">Event name 1</a>
                                            <p class="text-muted m-0">Jan 1, 2019 7:00 PM</p>
                                            <div class="actions small">
                                                <a href="event_dashboard.php"> <i class="icon-settings mr-1"></i>
                                                    Manage</a>
                                                <a href="create_event.php"> <i class="icon-edit mr-1"></i> Edit</a>
                                                <a href="event.php"> <i class="icon-view mr-1"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="progress-right">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%"></div>
                                            </div>
                                            <!-- tickets number -->
                                            <p class="text-right m-0 ratio">
                                                <span class="ratio-item text-primary">1</span>
                                                <span class="pr-1 pl-1">/</span>
                                                <span class="ratio-item">4</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="manage-list-item">
                                        <div class="data w-100 pr-4">
                                            <a href="event.php" class="text-info">Event name 4</a>
                                            <p class="text-muted m-0">Jan 1, 2019 7:00 PM</p>
                                            <div class="actions small">
                                                <a href="event_dashboard.php"> <i class="icon-settings mr-1"></i>
                                                    Manage</a>
                                                <a href="create_event.php"> <i class="icon-edit mr-1"></i> Edit</a>
                                                <a href="event.php"> <i class="icon-view mr-1"></i> View</a>
                                            </div>
                                        </div>
                                        <div class="progress-right">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%"></div>
                                            </div>
                                            <!-- tickets number -->
                                            <p class="text-right m-0 ratio">
                                                <span class="ratio-item text-primary">8</span>
                                                <span class="pr-1 pl-1">/</span>
                                                <span class="ratio-item">16</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="javascript:void(0)">
                                    <i class="icon-download"></i>
                                    <span>CSV Export</span>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="draftEventsTab" role="tabpanel">
                                <!-- Empty State -->
                                <div class="text-center">
                                    <img src="assets/img/illustration/empty-1.png" class="mt-3 mb-3" style="width:200px"
                                        alt="">
                                    <p class="text-muted">You don't have any draft events</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pastEventsTab" role="tabpanel">
                                <!-- Empty State -->
                                <div class="text-center">
                                    <img src="assets/img/illustration/empty-1.png" class="mt-3 mb-3" style="width:200px"
                                        alt="">
                                    <p class="text-muted">You don't have any past events</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Social Tabs -->
                    <div class="col-lg-3 col-md-12">
                        <!-- support -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>