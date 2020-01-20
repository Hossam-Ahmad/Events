<section class="bg-white">
    <div class="container-fluid">
        <div class="dash-header">
            <div class="text">
            <span class="text-muted event-status"></span>
                <h4 class="section-header p-0 m-0 event-name">Create An Event</h4>
                <span class="text-muted event-time"></span>
            </div>
            <div class="actions">
                <a href="javascript:void(0)" class="btn btn-outline btn-default">Save</a>
                <a href="javascript:void(0)" class="btn btn-outline btn-default">View</a>
                <a href="javascript:void(0)" class="btn btn-primary">publish</a>
            </div>
        </div>
    </div>
</section>
<section class="dash-tabs">
    <div class="container-fluid">
        <ul class="default">
            <li><a href="javascript:void(0)" class="dash-link active">Edit</a></li>
            <li><a href="event_preview.php" class="dash-link">Design</a></li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <form action="">
            <div class="step">
                <div class="step-title">
                    <span class="number">1</span>
                    <span class="title">Event Details</span>
                    <i class="text-info float-right" data-toggle="modal" data-target="#eventDetailsTip">Tips</i>
                </div>
                <div class="step-body form-light col-md-8">
                    <div class="form-group">
                        <label for="" class="required" class="form-control-label">Event title</label>
                        <input type="text" class="form-control" placeholder="Give it a short distinct name">
                    </div>
                    <div class="form-group">
                        <label for="" class="required" class="form-control-label">Location</label>
                        <!-- Google location seardh input  -->
                        <div id="eventLocationDefault">
                            <input type="text" class="form-control" placeholder="Search for a venue or address.">
                            <small class="d-flex form-flex">
                                <a href="" class="d-inline-block p-2" data-toggle="replace" data-replace="#eventLocationDefault"
                                    data-replace-with="#eventLocationOnline">Online
                                    Event</a>
                                <a href="" class="d-inline-block p-2" data-toggle="replace" data-replace="#eventLocationDefault"
                                    data-replace-with="#eventLocationCustom">Enter Adress</a>
                            </small>
                        </div>
                        <div id="eventLocationOnline" class="hide">
                            <input type="text" class="form-control" id="disabledEvent" value="This is an online event"
                                disabled>
                            <small class="d-flex form-flex">
                                <a href="" class="d-inline-block p-2" data-toggle="replace" data-replace="#eventLocationOnline"
                                    data-replace-with="#eventLocationDefault">Add a location</a>
                            </small>
                        </div>
                        <div id="eventLocationCustom" class="hide">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter the venue's name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address 2">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Zip/Postal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="map-location">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>
                            <small class="d-flex form-flex">
                                <a href="" class="d-inline-block p-2" data-toggle="replace" data-replace="#eventLocationCustom"
                                    data-replace-with="#eventLocationDefault">Reset Location</a>
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="required" class="form-control-label">Starts</label>
                                <div class="d-flex form-flex">
                                    <input type="text" class="form-control flatpickr" placeholder="Select date..">
                                    <input type="time" value="13:30" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="required" class="form-control-label">Ends</label>
                                <div class="d-flex form-flex">
                                    <input type="text" class="form-control flatpickr" placeholder="Select date..">
                                    <input type="time" value="13:30" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="required" class="form-control-label">Event Image</label>
                        <!-- check options url https://github.com/JeremyFagis/dropify -->
                        <div class="row">
                            <div class="col-md-9">
                                <input type="file" class="dropify" accept="image/*" data-height="200">
                                <small class="text-muted">
                                    We recommend using at least a 2160x1080px (2:1 ratio) image that's no larger than
                                    10MB. <a href="" class="d-block">Learn more.</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="required" class="form-control-label">Event Description</label>
                        <!-- Editor -->
                        <div id="editorContainer1" class="bg-white" style="min-height:250px"></div>
                        <a href="javascript:void(0)" class="d-block mt-3" data-toggle="modal" data-target="#eventFAQ">
                            Add FAQs</a>
                        </a>
                    </div>
                    <div class="form-group">
                        <label for="" class="required" class="form-control-label">Organizer name</label>
                        <div id="organizationDefault">
                            <small class="d-flex form-flex">
                                <a href="" class="d-inline-block p-1" data-toggle="replace" data-replace="#organizationDefault"
                                    data-replace-with="#organizationAddNew">Add New</a>
                            </small>
                            <!-- not visible if there is no profile organization /organizer -->
                            <select name="organizer" class="form-control" id="editOrganizaion">
                                <option value="organizer 1" selected> Organizaer 1</option>
                                <option value="Don joe trabel"> Don joe Travel </option>
                            </select>
                        </div>
                        <div id="organizationAddNew" class="hide">
                            <input type="text" class="form-control mb-2" placeholder="Who's organizing this event?">
                            <div class="form-group">
                                <label for="" class="form-control-label">Organizer Description</label>
                                <div id="editorContainer2" class="bg-white" style="min-height:150px"></div>
                            </div>
                            <small class="d-flex form-flex">
                                <a href="" class="d-inline-block p-1" data-toggle="replace" data-replace="#organizationAddNew"
                                    data-replace-with="#organizationDefault">Cancel</a>
                            </small>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" id="socialLinksCheck" data-toggle="check"
                                data-element="#socialLinksContainer">
                            <label class="custom-control-label" for="socialLinksCheck">Link to Facebook and Twitter</label>
                        </div>
                        <div id="socialLinksContainer" class="mt-3 pl-5 hide">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-fb text-white"><i class="icon-facebook"></i></div>
                                </div>
                                <input type="text" class="form-control" placeholder="facebook.com/">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-twit text-white"><i class="icon-twitter"></i></div>
                                </div>
                                <input type="text" class="form-control" placeholder="twitter.com/">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="step-title">
                    <span class="number">2</span>
                    <span class="title">Create Tickets</span>
                    <i class="text-info float-right" data-toggle="modal" data-target="#eventDetailsTip2">Tips</i>
                </div>
                <div class="step-body form-light col-md-12 col-xl-8">
                    <div class="tickets-table mb-3">
                        <div class="row tickets-table-header">
                            <div class="col-md-5 text-header">Ticket name</div>
                            <div class="col-md-2 text-header">Quantity available</div>
                            <div class="col-md-3 text-header">Price</div>
                            <div class="col-md-2 text-header">Actions</div>
                        </div>
                        <div class="tickets-table-body">
                            <ul class="default mb-0" id="dragableList">
                                <!-- controlled by js -->
                            </ul>

                            <div class="tickets-controller">
                                <a href="" class="btn btn-outline btn-default" data-toggle="addTicket" data-target="#freeTicket">
                                    <i class="icon-plus-square-o mr-1"></i>
                                    Free Tickets
                                </a>
                                <a href="" class="btn btn-outline btn-default" data-toggle="addTicket" data-target="#paidTicket">
                                    <i class="icon-plus-square-o mr-1"></i>
                                    Paid Tickets
                                </a>
                                <a href="" class="btn btn-outline btn-default" data-toggle="addTicket" data-target="#donationTicket">
                                    <i class="icon-plus-square-o mr-1"></i>
                                    Donation
                                </a>
                            </div>
                            <p class="text-center mt-3 text-muted" id="tableHint">
                                What type of ticket would you like to start with?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="step-title">
                    <span class="number">3</span>
                    <span class="title">Additional Settings</span>
                    <i class="text-info float-right" data-toggle="modal" data-target="#eventDetailsTip3">Tips</i>
                </div>
                <div class="step-body form-light col-md-12 col-xl-8">
                    <div class="form-group">
                        <label for="" class="form-control-label">Listing Privacy</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="additionalSettings" id="additionalSetting1">
                            <label class="custom-control-label" for="additionalSetting1">Public page: <small class="text-muted">Discoverable
                                    by anyone on Eventbrite, our distribution partners, and search engines.</small></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="additionalSettings" id="additionalSetting2">
                            <label class="custom-control-label" for="additionalSetting2">Private page: <small class="text-muted">Accessible
                                    only by people you specify.</small></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-control-label">Event type</label>
                        <select name="" class="form-control">
                            <option value="" selected="selected">Select the type of event</option>
                            <option value="1">Appearance or Signing</option>
                            <option value="2">Attraction</option>
                            <option value="3">Camp, Trip, or Retreat</option>
                            <option value="4">Class, Training, or Workshop</option>
                            <option value="5">Concert or Performance</option>
                            <option value="6">Conference</option>
                            <option value="7">Convention</option>
                            <option value="8">Dinner or Gala</option>
                            <option value="9">Festival or Fair</option>
                            <option value="10">Game or Competition</option>
                            <option value="11">Meeting or Networking Event</option>
                            <option value="12">Other</option>
                            <option value="13">Party or Social Gathering</option>
                            <option value="14">Race or Endurance Event</option>
                            <option value="15">Rally</option>
                            <option value="16">Screening</option>
                            <option value="17">Seminar or Talk</option>
                            <option value="18">Tour</option>
                            <option value="19">Tournament</option>
                            <option value="20">Tradeshow, Consumer Show, or Expo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-control-label">Event Topic</label>
                        <div class="row">
                            <div class="col-md-6">
                                <select name="" class="form-control">
                                    <option value="" selected="selected">Select a topic</option>
                                    <option value="1">Auto, Boat &amp; Air</option>
                                    <option value="2">Business &amp; Professional</option>
                                    <option value="3">Charity &amp; Causes</option>
                                    <option value="4">Community &amp; Culture</option>
                                    <option value="5">Family &amp; Education</option>
                                    <option value="6">Fashion &amp; Beauty</option>
                                    <option value="7">Film, Media &amp; Entertainment</option>
                                    <option value="8">Food &amp; Drink</option>
                                    <option value="9">Government &amp; Politics</option>
                                    <option value="10">Health &amp; Wellness</option>
                                    <option value="11">Hobbies &amp; Special Interest</option>
                                    <option value="12">Home &amp; Lifestyle</option>
                                    <option value="13">Music</option>
                                    <option value="14">Other</option>
                                    <option value="15">Performing &amp; Visual Arts</option>
                                    <option value="16">Religion &amp; Spirituality</option>
                                    <option value="17">School Activities</option>
                                    <option value="18">Science &amp; Technology</option>
                                    <option value="19">Seasonal &amp; Holiday</option>
                                    <option value="20">Sports &amp; Fitness</option>
                                    <option value="11">Travel &amp; Outdoor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-control-label">Remaining Tickets</label>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="remainingTickets" class="custom-control-input">
                            <label class="custom-control-label" for="remainingTickets">Show the number of remaining tickets on your event listing</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- // tickets templates  -->
<!-- Free ticket -->
<li class="row tickets-table-row hide" id="freeTicket">
    <div class="col-md-5 table-item">
        <i class="list-handle icon-arrow-swap"></i>
        <input type="text" class="form-control" placeholder="Early Bird, RSVP..." data-toggle="tooltip" data-placement="top"
            title="Give your ticket a name, like General Admission, Early Bird, RSVP, etc.">
    </div>
    <div class="col-md-2 table-item">
        <input type="text" class="form-control" placeholder="100" data-toggle="tooltip" data-placement="top" title="Enter the total number of tickets available for this ticket type">
    </div>
    <div class="col-md-3 table-item">
        <div class="text-muted">
            Free
        </div>
    </div>
    <div class="col-md-2 table-item">
        <div class="action-bar">
            <span data-toggle="tooltip" data-placement="top" title="Settings">
                <i class="icon-settings collapsed" aria-expanded="false"></i>
            </span>
            <span data-toggle="tooltip" data-placement="top" title="Delete">
                <i class="icon-delete-garbage"></i>
            </span>
        </div>
    </div>
    <div class="col-md-12 tickets-settings collapse">
        <div class="settings">
            <div class="form-group">
                <label for="" class="form-control-label">Ticket description</label>
                <textarea class="form-control" placeholder="Tell your attendees more about this ticket type."></textarea>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="shotTicketsEventFree">
                    <label class="custom-control-label small" for="shotTicketsEventFree">Show
                        ticket description on event page</label>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Sales channel</label>
                <select class="form-control">
                    <option value="everywhere" selected>Everywhere</option>
                    <option value="online">Online only</option>
                    <option value="atd">At the door only</option>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Ticket sales start</label>
                <div class="form-group">
                    <div class="d-flex form-flex">
                        <input type="text" class="form-control flatpickr" placeholder="Select date..">
                        <input type="time" value="13:30" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Ticket sales end</label>
                <div class="form-group">
                    <div class="d-flex form-flex">
                        <input type="text" class="form-control flatpickr" placeholder="Select date..">
                        <input type="time" value="13:30" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-control-label">Tickets allowed per order</label>
                    <div class="row">
                        <div class="col-md-6 pl-0">
                            <input type="text" class="form-control" value="1">
                            <small>minimum</small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="10">
                            <small>maximum</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<!-- paid ticket -->
<li class="row tickets-table-row hide" id="paidTicket">
    <div class="col-md-5 table-item">
        <i class="list-handle icon-arrow-swap"></i>
        <input type="text" class="form-control" placeholder="Early Bird, RSVP..." data-toggle="tooltip" data-placement="top"
            title="Give your ticket a name, like General Admission, Early Bird, RSVP, etc.">
    </div>
    <div class="col-md-2 table-item">
        <input type="text" class="form-control" placeholder="100" data-toggle="tooltip" data-placement="top" title="Enter the total number of tickets available for this ticket type">
    </div>
    <div class="col-md-3 table-item">
        <div class="input-group double">
            <div class="input-group-prepend">
                <div class="input-group-text">$</div>
                <input type="text" class="form-control" data-toggle="tooltip" placeholder="15.00" data-placement="top"
                    title="Set your ticket price. (You'll select payout options later on the Manage page)">
            </div>
            <small>Buyer total: <span class="text-info" data-toggle="tooltip" data-html="true" title="
                    <div class='tooltip-price'>
                        <p class='toolti-custom'><span>Ticket Price</span><span>$0.00</span></p>
                        <p class='toolti-custom'><span>Fee</span><span>$0.00</span></p>
                        <p class='toolti-custom'><span>Buyer Total</span><span>$0.00</span></p>
                    </div>
                    ">$0.00</span>
            </small>
        </div>
    </div>
    <div class="col-md-2 table-item">
        <div class="action-bar">
            <span data-toggle="tooltip" data-placement="top" title="Settings">
                <i class="icon-settings collapsed" aria-expanded="false"></i>
            </span>
            <span data-toggle="tooltip" data-placement="top" title="Delete">
                <i class="icon-delete-garbage"></i>
            </span>
        </div>
    </div>
    <div class="col-md-12 tickets-settings collapse">
        <div class="settings">
            <div class="form-group">
                <label for="" class="form-control-label">Ticket description</label>
                <textarea class="form-control" placeholder="Tell your attendees more about this ticket type."></textarea>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="shotTicketsEventPaid">
                    <label class="custom-control-label small" for="shotTicketsEventPaid">Show
                        ticket description on event page</label>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Sales channel</label>
                <select class="form-control">
                    <option value="everywhere" selected>Everywhere</option>
                    <option value="online">Online only</option>
                    <option value="atd">At the door only</option>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">FEES</label>
                <select class="form-control">
                    <option value="0" selected>Pass fees on</option>
                    <option value="1">Absorb fees</option>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Ticket sales start</label>
                <div class="form-group">
                    <div class="d-flex form-flex">
                        <input type="text" class="form-control flatpickr" placeholder="Select date..">
                        <input type="time" value="13:30" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Ticket sales end</label>
                <div class="form-group">
                    <div class="d-flex form-flex">
                        <input type="text" class="form-control flatpickr" placeholder="Select date..">
                        <input type="time" value="13:30" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-control-label">Tickets allowed per order</label>
                    <div class="row">
                        <div class="col-md-6 pl-0">
                            <input type="text" class="form-control" value="1">
                            <small>minimum</small>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="10">
                            <small>maximum</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<!-- Donation ticket -->
<li class="row tickets-table-row hide" id="donationTicket">
    <div class="col-md-5 table-item">
        <i class="list-handle icon-arrow-swap"></i>
        <input type="text" class="form-control" placeholder="Donation" data-toggle="tooltip" data-placement="top" title="Give your ticket a name, like Donation">
    </div>
    <div class="col-md-2 table-item">
        <input type="text" class="form-control" placeholder="0 (unlimited)" data-toggle="tooltip" data-placement="top"
            title="For unlimited donations, enter '0'. To set a limit on donations, enter the total number available.">
    </div>
    <div class="col-md-3 table-item">
        <div class="text-muted">
            Donation
        </div>
    </div>
    <div class="col-md-2 table-item">
        <div class="action-bar">
            <span data-toggle="tooltip" data-placement="top" title="Settings">
                <i class="icon-settings collapsed" aria-expanded="false"></i>
            </span>
            <span data-toggle="tooltip" data-placement="top" title="Delete">
                <i class="icon-delete-garbage"></i>
            </span>
        </div>
    </div>
    <div class="col-md-12 tickets-settings collapse">
        <div class="settings">
            <div class="form-group">
                <label for="" class="form-control-label">Ticket description</label>
                <textarea class="form-control" placeholder="Tell your attendees more about this ticket type."></textarea>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="shotTicketsEventDonation">
                    <label class="custom-control-label small" for="shotTicketsEventDonation">Show
                        ticket description on event page</label>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Sales channel</label>
                <select class="form-control">
                    <option value="everywhere" selected>Everywhere</option>
                    <option value="online">Online only</option>
                    <option value="atd">At the door only</option>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">FEES</label>
                <select class="form-control">
                    <option value="0" selected>Pass fees on</option>
                    <option value="1">Absorb fees</option>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Ticket sales start</label>
                <div class="form-group">
                    <div class="d-flex form-flex">
                        <input type="text" class="form-control flatpickr" placeholder="Select date..">
                        <input type="time" value="13:30" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Ticket sales end</label>
                <div class="form-group">
                    <div class="d-flex form-flex">
                        <input type="text" class="form-control flatpickr" placeholder="Select date..">
                        <input type="time" value="13:30" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>