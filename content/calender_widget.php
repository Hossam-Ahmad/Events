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
                    <i class="list-icon icon-clock pr-3 text-primary"></i>
                    <h4>Event Calendar Widget</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="form-light">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group mb-5">
                                <label>Choose what you want to display on your widget</label>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" data-toggle="check"
                                        data-element="#eventName" checked>
                                    <label class="custom-control-label font-weight-normal" for="customCheck2">Event
                                        Name</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" data-toggle="check"
                                        data-element="#eventLogo" checked>
                                    <label class="custom-control-label font-weight-normal" for="customCheck3">Event
                                        Logo</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" data-toggle="check"
                                        data-element="#eventDates" checked>
                                    <label class="custom-control-label font-weight-normal" for="customCheck4">Event
                                        Dates</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5" data-toggle="check"
                                        data-element="#eventRegisterBtn" checked>
                                    <label class="custom-control-label font-weight-normal" for="customCheck5">Register
                                        Button</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6" data-toggle="check"
                                        data-element="#eventTweetBtn" checked>
                                    <label class="custom-control-label font-weight-normal" for="customCheck6">Tweet
                                        This Event</label>
                                </div>
                            </div>
                            <hr>
                            <!-- Colors -->
                            <section class="panel">
                                <div class="panel-header">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6">
                                            <div class="form-group">
                                                <label class="font-weight-normal">
                                                    Background Color
                                                </label>
                                                <input type="text" class="demo form-control" value="#fff" data-plugin="colorpicker"
                                                    data-target=".widget-calender" data-type="background-color"
                                                    data-hidden="true">
                                                <input type="hidden" value="#fff">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6">
                                            <div class="form-group">
                                                <label class="font-weight-normal">
                                                    Register Background Color
                                                </label>
                                                <input type="text" class="demo form-control" value="#ec008c"
                                                    data-plugin="colorpicker" data-target=".widget-calender .link"
                                                    data-type="background-color" data-hidden="true">
                                                <input type="hidden" value="#ec008c">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6">
                                            <div class="form-group">
                                                <label class="font-weight-normal">
                                                    Register Text Color
                                                </label>
                                                <input type="text" class="demo form-control" value="#fff" data-plugin="colorpicker"
                                                    data-target=".widget-calender .link" data-type="color" data-hidden="true">
                                                <input type="hidden" value="#fff">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <label class="font-weight-normal">
                                                    Date Text Color
                                                </label>
                                                <input type="text" class="demo form-control" value="#222" data-plugin="colorpicker"
                                                    data-target=".widget-calender .footer, .widget-calender .date-month, .widget-calender .small-text"
                                                    data-type="color" data-hidden="true">
                                                <input type="hidden" value="#222">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Click  -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <button class="btn btn-primary" type="button" data-toggle="generate" data-target="#codeLink"
                                        data-link="https://www.hubb-events.com/calender-widget?eid=14578539805">Create
                                        Your Widget</button>
                                </div>
                            </div>
                            <!-- Text area -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <label for="">Copy and paste this code for use on a webpage</label>
                                    <textarea class="form-control font-weight-normal" id="codeLink" readonly=readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- Widget -->
                            <div class="widget">
                                <div class="d-block widget-calender">
                                    <input type="hidden" class="d-none" value="2019-4-12" data-plugin="flatpickr">
                                    <img id="eventLogo" src="https://placeimg.com/640/480/any" class="event-img w-100"
                                        alt="">
                                    <article class="event-body">
                                        <div class="description">
                                            <h6 class="title" id="eventName">
                                                <strong>
                                                    <a href="event.php">
                                                        Get Your Masters or PhD in the U.S. (Alexandria)
                                                    </a>
                                                </strong>
                                            </h6>
                                            <small class="footer" id="eventDates">
                                                <p>Apr 9, 2019 at 7:00 PM</p>
                                                <p>Location : Live</p>
                                            </small>
                                        </div>
                                        <a href="#" class="link" id="eventRegisterBtn">Register now</a>
                                        <a href="#" class="tweetBtn" id="eventTweetBtn">Tweet this Event</a>
                                        <p style="font-size: small;text-align: center;color: #afafaf;margin-top: 1em;">Powered
                                            by Hubb
                                            Event</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>