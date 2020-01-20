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
                    <h4>Order Confirmation</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <p class="text-muted">After purchasing a ticket or registering for your event, attendees will view a
                    message on hubbEvent
                    and receive an email, both of which you can customize below.</p>
                <form action="" class="pb-5">
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h5>Customize Webpage</h5>
                            <p class="text-muted">After registering for your event, attendees will see an onscreen
                                message until they navigate away
                                from the page. Add special instructions or other useful information here, but also add
                                important
                                information in the Customize Email section so the attendee can access it later.</p>
                            <div class="form-group">
                                <label for="" class="form-control-label">Message For Order Confirmation Page</label>
                                <textarea type="text" class="form-control" placeholder="e.g. Thanks for registering don't forget to keep your tickets handy, either in the hubbEvent app or print them out and bring them with you"
                                    style="min-height:250px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <h5>Customize Email</h5>
                            <p class="text-muted">
                                Your attendees will also receive an email after registration, confirming their order.
                                Add important instructions or other useful information here so attendees can access it
                                at any time.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-control-label">Default 'Reply-To' Email Address</label>
                                        <input type="text" class="form-control" value="YourEmail@mail.com" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-control-label">Message For Email And Printable PDF (If
                                    Included)</label>
                                <textarea type="text" class="form-control" placeholder="Tell your attendees what they should bring to the event, and include information about your refund policy. If you're hosting an online event, you can provide webinar instructions in this section."
                                    style="min-height:250px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <h5>Additional Settings</h5>
                            <p class="text-muted">
                                Configure whether attendees should receive a printable PDF when they register.
                            </p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" id="selectable">
                                            <option value="0" selected="selected">Same settings for all ticket types</option>
                                            <option value="1">Custom settings for each ticket type</option>
                                        </select>
                                    </div>
                                    <div class="form-group selectable" id="sameSettingsForAll">
                                        <h6>Printable Tickets</h6>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="includePrintable1"
                                                checked>
                                            <label class="custom-control-label" for="includePrintable1">Include printable tickets in all orders</label>
                                        </div>
                                    </div>
                                    <div class="form-group selectable hide" id="customSettinsForAll">
                                        <h6>Free test</h6>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="includePrintable2"
                                                checked>
                                            <label class="custom-control-label" for="includePrintable2">Include printable ticket</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customConfirmation">
                                            <label class="custom-control-label" for="customConfirmation">Include custom confirmation message</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary">Save Settings</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>