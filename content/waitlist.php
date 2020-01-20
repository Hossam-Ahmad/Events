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
                    <h4>Waitlist Settings</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <!-- alert -->
                <div class="alert alert-success" role="alert">
                    <p class="m-0">
                        <i class="icon-checkmark mr-3"></i>
                        The Waitlist settings have been saved successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </p>

                </div>
                <!-- /alert -->
                <form action="" class="pb-5">
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h5>Enable Waitlist:</h5>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="waitList" id="wailListEnalbe"
                                        checked>
                                    <label class="custom-control-label" for="wailListEnalbe">Enable</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="waitList" id="wailListDisable">
                                    <label class="custom-control-label" for="wailListDisable">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h5>Waitlist Trigger:</h5>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="waitListTrigger" id="wailListTrigger1"
                                        checked>
                                    <label class="custom-control-label" for="wailListTrigger1">When "Free test" sells
                                        out</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="waitListTrigger" id="wailListTrigger2">
                                    <label class="custom-control-label" for="wailListTrigger2">When total event
                                        capacity is reached</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="form-control-label">Maximum Waitlist Size</label>
                                <input type="text" class="form-control" value="0">
                                <span class="text-info small">Zero for unlimited</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h5>Attendee Information To Collect:</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="attendeeCheck1" checked>
                                <label class="custom-control-label" for="attendeeCheck1">Full Name (Required)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="attendeeCheck2" checked>
                                <label class="custom-control-label" for="attendeeCheck2">Email Address (Required)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="attendeeCheck3">
                                <label class="custom-control-label" for="attendeeCheck3">Phone Number</label>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6>Time To Respond:</h6>
                            <div class="row">
                                <div class="col-md-3 col-lg-2">
                                    <div class="input-group group-custom">
                                        <input type="text" class="form-control" value="1">
                                        <span class="input-group-addon">Day(s)</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2">
                                    <div class="input-group group-custom">
                                        <input type="text" class="form-control" value="0">
                                        <span class="input-group-addon">Hour(s)</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2">
                                    <div class="input-group group-custom">
                                        <input type="text" class="form-control" value="0">
                                        <span class="input-group-addon">Minute(s)</span>
                                    </div>
                                </div>
                            </div>
                            <p class="small">Time allowed for attendees to claim their ticket</p>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-md-8 mb-2">
                            <div class="form-group">
                                <h6>Auto-Response Message:</h6>
                                <div id="autoResponceMessange" style="min-height:150px">
                                    <p>If a ticket becomes available, you will be contacted automatically with
                                        further instructions on how to purchase your ticket. No further action is
                                        required.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Waitlist Ticket Release Message:</h6>
                                <div id="waitlistTicketReleaseMessage" style="min-height:150px;">
                                    <p>Congratulations! A spot has opened up for you at this event. You have a
                                        limited time to sign up. Please follow the links below to register for the
                                        event.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary">Save Settings</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>