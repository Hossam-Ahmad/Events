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
                    <h4>Order Form</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <h5>Attendee Information</h5>
                <form action="" class="pb-5">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-12">
                            <p class="text-muted m-">Collection type</p>
                            <ul class="list-group default">
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="basicInformation" name="collectionType" class="custom-control-input"
                                            checked value="basicInformation">
                                        <label class="custom-control-label" for="basicInformation">Basic information</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="buyerOnly" name="collectionType" class="custom-control-input"
                                            value="buyerOnly">
                                        <label class="custom-control-label" for="buyerOnly">Buyer Only</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="eachAttendee" name="collectionType" class="custom-control-input"
                                            value="eachAttendee">
                                        <label class="custom-control-label" for="eachAttendee">Each Attendee</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="collection-container mt-4">
                                <div class="collectionTypeData eachAttendee hide">
                                    <h4>Collect information by ticket type</h4>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="freeCollect" checked>
                                        <label class="custom-control-label" for="freeCollect">Free</label>
                                    </div>
                                </div>
                                <div class="collectionTypeData eachAttendee buyerOnly hide">
                                    <div class="d-flex pt-3 pb-3">
                                        <i class="icon-facebook"></i>
                                        <p class="text-muted small">
                                            Selling tickets on Facebook now supports collecting attendees full name,
                                            email
                                            address, billing address, waivers and more. To add your event and sell more
                                            tickets
                                            <a href="#">learn more.</a>
                                        </p>
                                    </div>
                                    <div class="collection-table">
                                        <h5>Information to collect</h5>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Prefix (Mr., Mrs., etc.)
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb3" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb3"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb4" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb4"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            First Name
                                                            <i class="icon-information-circled ml-2 text-info" data-toggle="tooltip"
                                                                data-placement="top" title="Adding your event to Facebook now supports receiving this information"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb5" type="checkbox" checked />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb5"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb6" type="checkbox"
                                                            checked />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb6"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Last Name
                                                            <i class="icon-information-circled ml-2 text-info" data-toggle="tooltip"
                                                                data-placement="top" title="Adding your event to Facebook now supports receiving this information"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb7" type="checkbox" checked />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb7"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb8" type="checkbox"
                                                            checked />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb8"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Suffix
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb9" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb9"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <!-- <input class="tgl tgl-skewed required" id="cb10" type="checkbox" />
                                                <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb10"></label> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Email Address
                                                            <i class="icon-information-circled ml-2 text-info" data-toggle="tooltip"
                                                                data-placement="top" title="Adding your event to Facebook now supports receiving this information"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb11" type="checkbox" checked />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb11"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb12" type="checkbox"
                                                            checked />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb12"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Home Phone
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb13" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb13"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb14" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb14"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Tax & Business Info
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb15" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb15"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb16" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb16"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Home Address
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb17" type="checkbox" checked />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb17"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb18" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb18"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Shipping Address
                                                            <i class="icon-information-circled ml-2 text-info" data-toggle="tooltip"
                                                                data-placement="top" title="Adding your event to Facebook now supports receiving this information"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb19" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb19"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb20" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb20"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Job Title
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb21" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb21"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb22" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb22"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Company / Organization
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb23" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb23"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb24" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb24"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Work Address
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb25" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb25"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb26" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb26"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Work Phone
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb27" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb27"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb28" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb28"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Website
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb29" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb29"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb30" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb30"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Blog
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb31" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb31"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb32" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb32"></label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row collection-row">
                                                    <div class="col-md-6">
                                                        <p class="text-muted">
                                                            Gender
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed" id="cb33" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb33"></label>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <input class="tgl tgl-skewed required" id="cb34" type="checkbox" />
                                                        <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb34"></label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h5>Group Registration</h5>
                            <p class="text-muted">
                                Allow or require attendees to register as part of a group, team, organization, company
                                or association. To activate group registration, you must collect information for each
                                attendee.
                            </p>
                            <a href="#" class="btn btn-outline col-md-3 pt-2 pb-2">Activate Group Registration</a>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Registration Options</h5>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="" class="form-control-label">Title For The Registration Page</label>
                                    <input type="text" class="form-control" value="Registration Information">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="" class="form-control-label">Instructions For Your Attendees</label>
                                    <textarea type="text" class="form-control" style="min-height:150px;"></textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="" class="form-control-label">Registration Time Limit</label>
                                    <div class="d-flex align-items-center">
                                        <input type="text" class="form-control mr-3">
                                        <span>mins</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="" class="form-control-label">Message To Display After Ticket Sales End</label>
                                    <textarea type="text" class="form-control" style="min-height:150px;"></textarea>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check17pickUp">
                                        <label class="custom-control-label" for="check17pickUp">Allow Will Call Pickup</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check17registration"
                                            checked>
                                        <label class="custom-control-label" for="check17registration">Allow Attendees
                                            To Edit Information After Registration</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check17refund" checked>
                                        <label class="custom-control-label" for="check17refund">Accept Refund Requests</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>