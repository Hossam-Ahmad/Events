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
                    <i class="list-icon icon-text-width pr-3 text-primary"></i>
                    <h4>Text Link Widget</h4>
                </div>
            </div>
            <div class="page-sidemenu-body">
                <form action="" class="form-light">
                    <div class="row mb-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Enter text for your link</label>
                                <input type="text" id="linkText" value="Text to link" class="form-control text-color"
                                    style="color:#007bff">
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>
                                    Choose your link colors
                                </label>
                                <input type="text" class="demo form-control" value="#007bff" data-plugin="colorpicker"
                                    data-target=".text-color" data-type="color" data-hidden="true">
                                <input type="hidden" id="linkColor" value="#007bff">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <button class="btn btn-primary" type="button" data-toggle="generate" data-target="#codeLink"
                                data-link="https://www.hubb-event.com/e/artist-tickets-14578539805?ref=elink">Create
                                Your Widget</button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label for="">Copy and paste this code for use on a webpage</label>
                            <textarea class="form-control font-weight-normal" id="codeLink" readonly=readonly></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6>Post your text links widget to social networks</h6>
                            <ul class="social-share-list">
                                <li>
                                    <a href="javascript:void(0)" class="icon-facebook"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="icon-messenger"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="icon-envelope"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="icon-instagram"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="icon-twitter"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>