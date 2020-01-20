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
                    <h4>Create email invitations</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="">
                    <!-- Section 1 -->
                    <section>
                        <div class="row pb-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Name of Sender</label>
                                    <input type="text" class="form-control" value="name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Reply-To</label>
                                    <input type="email" class="form-control" value="email@example.com">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Subject Line</label>
                                    <input type="text" class="form-control" value="You're invited to EventName (May 1, 2019 - Oct 1, 2019)">
                                </div>
                            </div>
                        </div>
                        <iframe src="emailTemplates/email-1.php" style="pointer-events: initial;" class="event-preview"
                            frameborder="0"></iframe>
                        <div class="row pt-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Send a test invitation to:</label>
                                    <div class="d-flex align-items-center">
                                        <input type="email" class="form-control" value="email@example.com">
                                        <button class="btn btn-default btn-outline ml-4">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Section2 -->
                    <hr>
                    <section class="col-lg-8">
                        <h4>Who should come?</h4>
                        <div class="row footable-icons">
                            <div class="col-12">
                                <div id="filter-form-container" class="filter-container">
                                    <button type="button" data-toggle="modal" data-target="#addYourGuests" class="btn btn-primary">Add
                                        Guests</button>
                                </div>
                                <table id="guestsTable" class="table table-striped" data-empty="No Guests.">
                                </table>
                                <button class="btn btn-link font-weight-normal pl-0" id="removeSelected">Remove
                                    Selected</button>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <!-- Section3 -->
                    <section class="col-lg-8 pb-5">
                        <h4>When do you want to send it?</h4>
                        <div class="form-group">
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" id="sendImmediately" name="sendTime" class="custom-control-input" checked>
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
                    </section>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<!-- Copy to ContactList modal -->
<div class="modal fade" id="addYourGuests" tabindex="-1" role="dialog" aria-labelledby="addYourGuests" aria-hidden="true">
    <div class="modal-dialog  modal-center" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Your Guests</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row form-light">
                        <div class="col-12">
                            <section class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="manuallyEnter" name="add_guests_check" class="custom-control-input"
                                        checked>
                                    <label class="custom-control-label font-weight-normal" for="manuallyEnter">Manually
                                        enter email addresses</label>
                                </div>
                                <div class="contentChoose manuallyEnter">
                                    <i class="text-muted small">
                                        (separated by commas or line breaks)
                                    </i>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </section>
                            <section class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="createEmailList" name="add_guests_check" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="createEmailList">Create
                                        email list from attendees of past events</label>
                                </div>
                                <div class="contentChoose createEmailList hide  mt-4">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <input type="checkbox" name="check_all">
                                                </th>
                                                <th scope="col">Event</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <input type="checkbox" name="check_all">
                                                </th>
                                                <td>Event 1 </td>
                                                <td>May 1, 2019 7:00 PM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="uploadEmails" name="add_guests_check" class="custom-control-input">
                                    <label class="custom-control-label font-weight-normal" for="uploadEmails">Upload
                                        emails from Outlook, Excel or other file <br><i class="small text-muted">(.xlsx,
                                            .csv, or .txt files)</i> </label>
                                </div>
                                <div class="contentChoose uploadEmails hide  mt-4 pl-4 pr-4">
                                    <p class="text-muted">To import emails from your gmail address book, go to
                                        Contacts.</p>
                                    <div class="alert alert-dark" role="alert">
                                        <p class="m-0">
                                            <i class="icon-ios-help-outline mr-3"></i>
                                            The first row of your file must contain the labels "Email", "First Name"
                                            and "Last Name" for the first three columns in order to upload properly.
                                        </p>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label font-weight-normal" for="inputGroupFile01">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top:0">
                    <button class="btn btn-outline btn-default" data-dismiss="modal">cancel</button>
                    <button class="btn btn-primary" data-dismiss="modal">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>