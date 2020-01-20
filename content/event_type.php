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
                    <h4>Event Type & Language</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="pb-5">
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6>Event type</h6>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="radio1" name="eventType" checked>
                                    <label class="custom-control-label" for="radio1">
                                        Ticketed Event <small class="text-muted">(Examples: Buy Tickets, Ticket
                                            Information, Ticket Type)</small>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="radio2" name="eventType">
                                    <label class="custom-control-label" for="radio2">
                                        Registration Event <small class="text-muted">(Examples: Register, Registration
                                            Information, Registration Type)</small>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-control-label">Event Page Language</label>
                                <select name="" id="" class="form-control">
                                    <option name="locale" value="nl_NL">Dutch (Netherlands/Belgium)</option>
                                    <option name="locale" value="en_AU">English (Australia/New Zealand)</option>
                                    <option name="locale" value="en_CA">English (Canada)</option>
                                    <option name="locale" value="en_GB">English (UK)</option>
                                    <option name="locale" value="en_US" selected="" us">English (US)</option>
                                    <option name="locale" value="fr_CA">French (Canada)</option>
                                    <option name="locale" value="fr_FR">French (France)</option>
                                    <option name="locale" value="de_DE">German</option>
                                    <option name="locale" value="it_IT">Italian</option>
                                    <option name="locale" value="pt_BR">Portuguese (Brazil)</option>
                                    <option name="locale" value="pt_PT">Portuguese (Portugal)</option>
                                    <option name="locale" value="es_AR">Spanish (Argentina)</option>
                                    <option name="locale" value="es_MX">Spanish (Mexico)</option>
                                    <option name="locale" value="es_ES">Spanish (Spain)</option>
                                    <option name="locale" value="sv">Swedish</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>