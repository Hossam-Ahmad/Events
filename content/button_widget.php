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
                    <i class="list-icon icon-link pr-3 text-primary"></i>
                    <h4>Button Widget</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="form-light">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <!-- TEXT -->
                            <div class="form-group">
                                <label for="">Text</label>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="btnText1" name="btnText" value="Buy Tickets" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="btnText1">Buy Tickets</label>
                                </div>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="btnText2" name="btnText" value="Register Now" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="btnText2">Register Now</label>
                                </div>
                                <div class="custom-control custom-radio mb-3 align-item-center">
                                    <input type="radio" id="btnText3" name="btnText" value="Click And Register" class="custom-control-input"
                                        checked>
                                    <label class="custom-control-label font-weight-normal" for="btnText3">
                                        <input type="text" class="form-control font-weight-normal" id="btnTextListner"
                                            value="Click And Register">
                                    </label>
                                </div>
                            </div>
                            <!-- Size -->
                            <div class="form-group">
                                <h6>Size</h6>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="btnSize1" name="btnSize" value="10pt" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="btnSize1">Small</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="btnSize2" name="btnSize" value="12pt" class="custom-control-input"
                                        checked>
                                    <label class="custom-control-label font-weight-normal" for="btnSize2">Medium</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="btnSize3" name="btnSize" value="14pt" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="btnSize3">Large</label>
                                </div>
                            </div>
                            <!-- Colors -->
                            <div class="form-group mb-5">
                                <h6>Colors</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Background</label>
                                        <input type="text" class="demo form-control" value="#fb5e6b" data-plugin="colorpicker"
                                            data-target=".eventRegister-btn" data-type="background-color" data-hidden="false">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Text Color</label>
                                        <input type="text" class="demo form-control" value="#ffffff" data-plugin="colorpicker"
                                            data-target=".eventRegister-btn" data-type="color" data-hidden="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="form-group">
                                <label>
                                    Preview
                                </label>
                                <div class="d-block">
                                    <a href="javascript:void(0)" class="eventRegister-btn" style="font-size: 14pt;background: #fb5e6b;padding: 5px 10px;border-radius: 4px;color: white;">Click
                                        And Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-12">
                            <button class="btn btn-primary" type="button" data-toggle="generate" data-target="#codeLink"
                                data-link="https://www.hubb-events.com/e/artist-tickets-14578539805?ref=ebtnebtckt" target="_blank">Create
                                Your Widget</button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label for="">Copy and paste this code for use on a webpage</label>
                            <textarea class="form-control font-weight-normal" id="codeLink" readonly=readonly></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>