<?
    if(isset($logout))
    {
        setcookie("login_status","",1);
        setcookie("user_name","",1);
        setcookie("user_email","",1);
        setcookie("user_id","",1);
        unset($_SESSION["login_status"]);
        unset($_SESSION["user_name"]);
        unset($_SESSION["user_email"]);
        unset($_SESSION["user_id"]);
    }
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="./">
        <img src="assets/img/logo-black.png" style="width:80px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- not visible if user in frontpage (home) -->
        <? if($page !=="home") if($page !=="all_events"){{ ?>
        <ul class="navbar-nav w-100">
            <form action="" class="w-100">
                <li class="nav-item">
                    <div class="input-group nav-search dropdown">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon-search"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control dropdown-toggle auto-close" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" placeholder="Search for events">
                        <!-- search dropdown -->
                        <div class="dropdown-menu fadeIn animated dur-05 w-100">
                            <a class="dropdown-item" href="#">Arts</a>
                            <a class="dropdown-item" href="#">Business</a>
                            <a class="dropdown-item" href="#">Classes</a>
                            <a class="dropdown-item" href="#">Food & Drink</a>
                            <a class="dropdown-item" href="#">Music</a>
                            <a class="dropdown-item" href="#">Parties</a>
                            <a class="dropdown-item" href="#">Sport & wellness</a>
                        </div>
                    </div>
                </li>
            </form>
        </ul>
        <? }} ?>
        <ul class="navbar-nav ml-auto">
            <!-- Notification -->
            <? if (isset($_SESSION["login_status"])){?>
            <li class="nav-item dropdown user-menu">
                <a class="nav-link dropdown-toggle notification-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="notificaion-holder">
                        <i class="icon-bell-o"></i>
                        <span class="counter">6</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-icons dropdown-menu-right fadeIn animated dur-05 notification-dropdown"
                    aria-labelledby="navbarDropdown">
                    <div class="dropdown-header text-uppercase">
                        <h6 class="m-0">Notification</h6>
                    </div>
                    <!-- container -->
                    <div class="notification-container">
                        <!-- Link -->
                        <a href="#" class="dropdown-item notification-area">
                            <img src="assets/img/icons/ico-1.png" class="notification-img" alt="">
                            <div class="notification-body small">
                                <p class="m-0">
                                    <strong>Don joe</strong>
                                    Published an event near you at
                                    <strong>Some Location</strong>
                                </p>
                                <time>1 min ago</time>
                            </div>
                        </a>
                        <!-- Link -->
                        <a href="#" class="dropdown-item notification-area">
                            <img src="assets/img/icons/ico-4.png" class="notification-img" alt="">
                            <div class="notification-body small">
                                <p class="m-0">
                                    <strong>Event name</strong>
                                    Canceled
                                </p>
                                <time>1:24 AM</time>
                            </div>
                        </a>
                         <!-- Link -->
                         <a href="#" class="dropdown-item notification-area">
                            <img src="assets/img/icons/ico-5.png" class="notification-img" alt="">
                            <div class="notification-body small">
                                <p class="m-0">
                                    new
                                    <strong>15</strong>
                                    tickets has been sold for 
                                    <strong>Event name</strong>
                                </p>
                                <time>1W</time>
                            </div>
                        </a>
                        <!-- Link -->
                        <a href="#" class="dropdown-item notification-area">
                            <img src="assets/img/icons/ico-2.png" class="notification-img" alt="">
                            <div class="notification-body small">
                                <p class="m-0">
                                    <strong>Don joe</strong>
                                    Published an event near you at
                                    <strong>Some Location</strong>
                                </p>
                                <time>1 min ago</time>
                            </div>
                        </a>
                        <!-- Link -->
                        <a href="#" class="dropdown-item notification-area">
                            <img src="assets/img/icons/ico-6.png" class="notification-img" alt="">
                            <div class="notification-body small">
                                <p class="m-0">
                                    <strong>Event name</strong>
                                    Canceled
                                </p>
                                <time>1:24 AM</time>
                            </div>
                        </a>
                         <!-- Link -->
                         <a href="#" class="dropdown-item notification-area">
                            <img src="assets/img/icons/ico-7.png" class="notification-img" alt="">
                            <div class="notification-body small">
                                <p class="m-0">
                                    new
                                    <strong>15</strong>
                                    tickets has been sold for 
                                    <strong>Event name</strong>
                                </p>
                                <time>1W</time>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer bg-light">
                        <a href="notifications">See all</a>
                    </div>
                </div>
            </li>
            <? } ?>
            <li class="nav-item">
                <a class="nav-link" href="browse_events">
                    <? echo $lang_eventFront_browseEvents; ?></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <? echo $lang_eventFront_organize; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right fadeIn animated dur-05" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">
                        <? echo $lang_eventFront_overview; ?></a>
                    <a class="dropdown-item" href="#">
                        <? echo $lang_eventFront_pricing; ?></a>
                    <a class="dropdown-item" href="#">
                        <? echo $lang_eventFront_blog; ?></a>
                    <a class="dropdown-item" href="#">
                        <? echo $lang_eventFront_resources; ?></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Help
                </a>
                <div class="dropdown-menu dropdown-menu-right fadeIn animated dur-05" aria-labelledby="navbarDropdown2">
                    <a class="dropdown-item" href="#">
                        <? echo $lang_eventFront_howItWorks; ?></a>
                    <a class="dropdown-item" href="#">
                        <? echo $lang_eventFront_whatDoesItCost; ?></a>
                    <a class="dropdown-item" href="#">
                        <? echo $lang_eventFront_whereIsMyTickets; ?></a>
                    <a class="dropdown-item" href="#">
                        <? echo $lang_eventFront_howToContactOraganization; ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <? echo $lang_eventFront_helpCenter; ?></a>
                </div>
            </li>
            <!-- not visible in create event page -->
            <? if ($page !== "create_event"){ ?>
            <li class="nav-item">
                <a class="nav-link action-link" href="create_event">
                    <? echo $lang_eventFront_createEvent; ?></a>
            </li>
            <? } ?>
            <!-- if user is logged in  -->
            <? if (isset($_SESSION["login_status"])){?>
            <li class="nav-item dropdown user-menu">

                    <a class="nav-link dropdown-toggle avatar-holder" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="nav-avatar d-flex align-items-center">
                            <img src="assets/img/people/1.jpg" class="avatar" alt="">
                            <p><? echo $_SESSION["user_name"] ?></p>
                        </div>
                    </a>

                <?
                    }
                ?>
                
                <div class="dropdown-menu dropdown-icons dropdown-menu-right fadeIn animated dur-05" aria-labelledby="navbarDropdown">
                    <a id="myTickets-nav" class="dropdown-item" href="tickets">
                        Tickets
                        <span class="counter">(3)</span>
                    </a>
                    <a id="myLikes-nav" class="dropdown-item" href="profile_likes">
                        Liked
                        <span class="counter">(2)</span>
                    </a>
                    <a id="myFollowing-nav" class="dropdown-item" href="profile_following">
                        Following
                        <span class="counter">(4)</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a id="myEvents-nav" class="dropdown-item" href="my_events">
                        Manage Events
                    </a>
                    <a class="dropdown-item" href="#">
                        Organizer Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        Contacts
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="account_settings">
                        Account Settings
                    </a>
                    <form action="./" method="post">
                        <input type="hidden" name="logout" value="1">
                        <button class="dropdown-item" type="submit"> Log out </button>
                    </form>
                </div>
            </li>
            <!-- not visible at login page -->
            <? if( $page !== "login" && !isset($_SESSION["login_status"])){ ?>
            <li class="nav-item signin-menu">
                <a class="nav-link" href="login">
                    <? echo $lang_login; ?></a>
            </li>
            <? } ?>
        </ul>
    </div>
</nav>