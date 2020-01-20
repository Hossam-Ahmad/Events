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
                    <h4>Emails to Attendees</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="pb-5">
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-md-8 col-xl-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" value="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Reply-To Email </label>
                                <input type="email" value="example@email.com" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">To</label>
                                <select class="form-control">
                                    <option value="CONFIRMED_ATTENDEES" selected="selected">
                                        All Attendees (0)
                                    </option>
                                    <option value="ALL_ATTENDEES_DATE">
                                        All Attendees Registered after Date
                                    </option>
                                    <option value="ATTENDEES">
                                        Specific Attendees
                                    </option>
                                    <option value="TICKET_ATTENDEES">
                                        Attendees by Ticket Type
                                    </option>
                                    <option value="PAYMENT_NOT_RECEIVED">
                                        Offline Payment Not Received (0)
                                    </option>
                                    <option value="PAYMENT_RECEIVED">
                                        Offline Payment Received (0)
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Subject </label>
                                <input type="text" value="Message to attendees of aRtist" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6>Message</h6>
                                <div id="autoResponceMessange" style="min-height:150px">
                                    <small>
                                        A Message from Event Venue:
                                    </small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="attendeeCheck1" checked>
                                    <label class="custom-control-label" for="attendeeCheck1">Include event details and
                                        a link to print tickets</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="" class="form-control-label">Send a test invitation to:</label>
                                <div class="d-flex align-items-center">
                                    <input type="email" class="form-control" value="email@example.com">
                                    <button class="btn btn-default btn-outline ml-4">Send</button>
                                </div>
                            </div>
                            <h4>When do you want to send it?</h4>
                            <div class="form-group">
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="sendImmediately" name="sendTime" class="custom-control-input"
                                        checked>
                                    <label class="custom-control-label font-weight-normal" for="sendImmediately">Immediately!
                                    </label>
                                </div>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="selectDate" name="sendTime" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="selectDate">
                                        <div class="d-flex">
                                            <span class="mr-2">Select Date :</span>
                                            <input type="text" class="flatpickr mr-2" placeholder="Select date..">
                                            <span class="mr-2">
                                                <select name="endhr" class="mr-1">
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                                <span class="mr-1">:</span>
                                                <select name="endmin" class="mr-1">
                                                    <option value="00">00</option>
                                                    <option value="15">15</option>
                                                    <option value="30">30</option>
                                                    <option value="45">45</option>
                                                </select>
                                                <select name="endampm" class="mr-1">
                                                    <option value="AM">AM</option>
                                                    <option value="PM">PM</option>
                                                </select>

                                            </span>
                                        </div>

                                    </label>
                                </div>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="selectDateBefore" name="sendTime" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="selectDateBefore">
                                        <div class="d-flex">
                                            <input type="text" class="mr-2">
                                            <span class="mr-2">Days</span>
                                            <input type="text" class="mr-2">
                                            <span class="mr-2">Hours</span>
                                            <span>
                                                <select name="sendemailminutes" class="mr-2">
                                                    <option value=""> -- </option>
                                                    <option value="00">00</option>
                                                    <option value="15">15</option>
                                                    <option value="30">30</option>
                                                    <option value="45">45</option>
                                                </select>
                                            </span>
                                            <span> Before my event</span>
                                        </div>

                                    </label>
                                </div>
                                <div class="d-flex align-items-center mt-4 action-center">
                                    <button class="btn btn-primary mr-2 btnAction" id="sendBtn">Send Now</button>
                                    <button class="btn btn-primary mr-2 btnAction d-none" id="scBtn">Save & Schedule</button>
                                    <button class="btn btn-default btn-outline mr-2">Save As Draft</button>
                                    <button class="btn btn-default btn-outline mr-2">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>