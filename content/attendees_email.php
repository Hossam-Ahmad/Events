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
                <form action="" class="pb-5 table-filter">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link bg-transparent active" data-toggle="tab" href="#facebookPageTab"
                                        role="tab" aria-selected="true">
                                        EMAILS SCHEDULED
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-transparent" data-toggle="tab" href="#twitterProfileTab" role="tab"
                                        aria-selected="false">
                                        EMAILS SENT (1)
                                    </a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="facebookPageTab" role="tabpanel">
                                    <div class="col-12">
                                        <p class="pt-3 pb-3">
                                            No emails are scheduled, click Create New Attendee Email to schedule or
                                            send
                                            emails to your attendees.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="twitterProfileTab" role="tabpanel">
                                    <div class="footable-icons">
                                        <div class="col-12">
                                            <table id="emailsTable" class="table table-striped" data-empty="No records found.">
                                                <thead>
                                                    <tr>
                                                        <th class="small" data-breakpoints="xs sm md" title="subjectOfEmail">Subject
                                                            Of Email</th>
                                                        <th class="small" data-breakpoints="" title="recipients	">Recipients</th>
                                                        <th class="small" data-breakpoints="xs sm" title="date">Date</th>
                                                        <th class="small text-right" data-breakpoints="xs" title="paymentProcessing">Quick
                                                            Links</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a class="text-info" href="javascript:void(0)" data-toggle="modal"
                                                                data-target="#emailModal">Reminder for Event </a></td>
                                                        <td>0</td>
                                                        <td>48 hr before event</td>
                                                        <td class="text-right">
                                                            <a href="#">Emails</a>
                                                            <span class="ml-2 mr-2">|</span>
                                                            <a href="#">Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="new_attendee_email.php" class="btn btn-primary mt-4">Create New Attendee Email</a>
                </form>
                <!-- Order Tabke -->
            </div>
        </div>
    </div>
</section>


<!-- modal -->
<!-- Copy to ContactList modal -->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
    <div class="modal-dialog  modal-center modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Review of the message sent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <iframe src="emailTemplates/email-1.php" width="100%" height="700px" frameborder="0"></iframe>
                </div>
            </form>
        </div>
    </div>
</div>