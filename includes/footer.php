<footer>
    <? if (!isset($_SESSION["login_status"])){?>
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="row-item d-flex align-items-center">
                        <i class="icon icon-map-marker"></i>
                        <article class="text">
                            <p><? echo $lang_eventFront_location; ?></p>
                            <h5><? echo $lang_eventFront_city; ?></h5>
                        </article>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="row-item d-flex align-items-center">
                        <i class="icon icon-envelope"></i>
                        <article class="text">
                            <p><? echo $lang_eventFront_contactEmail1; ?></p>
                            <h5><a href="mailto:"><? echo $lang_eventFront_contactEmail2; ?></a></h5>
                        </article>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="row-item d-flex align-items-center">
                        <i class="icon icon-phone"></i>
                        <article class="text">
                            <p>100 800 1234 5555</p>
                            <h5>100 800 1234 5555</h5>
                        </article>
                    </div>
                </div>
            </div>
            <div class="row pt-50">
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex event-branding">
                        <img src="assets/img/logo-white.png" class="footer-logo" alt="logo">
                        <div class="social-links">
                            <h3 class="footer-title"><? echo $lang_eventFront_network; ?></h3>
                            <ul class="social-list">
                                <li>
                                    <a href="javascript:void(0)" class="icon-facebook"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="icon-twitter"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="icon-linkedin"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="icon-pinterest"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="icon-instagram"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="icon-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3 class="footer-title"><? echo $lang_eventFront_usefulLinks; ?></h3>
                    <ul class="footer-list">
                        <li>
                            <a href="javascript:void(0)"><? echo $lang_eventFront_howItWorks; ?></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">For Large & Complex Events</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><? echo $lang_eventFront_pricing; ?></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Content Standards</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">FAQs</a>
                        </li>

                        <li>
                            <a href="javascript:void(0)"><? echo $lang_eventFront_siteMap; ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3 class="footer-title"><? echo $lang_eventFront_findEvents; ?></h3>
                    <ul class="footer-list">
                        <li>
                            <a href="javascript:void(0)">Los Angeles Events</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">New York Events</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">San Francisco Events</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Chicago Events</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Nashville Events</a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">All Cities</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3 class="footer-title">Event Instagram</h3>
                    <ul class="insta-grid">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="icon-instagram insta-hover"></i>
                                <img src="assets/img/demo/2.jpg" alt="insta-img">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="icon-instagram insta-hover"></i>
                                <img src="assets/img/demo/5.jpeg" alt="insta-img">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="icon-instagram insta-hover"></i>
                                <img src="assets/img/demo/6.jpeg" alt="insta-img">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="icon-instagram insta-hover"></i>
                                <img src="assets/img/demo/8.jpeg" alt="insta-img">
                            </a>
                        </li>
                    </ul>
                    <p>Follow Our Instagram <a href="javascript:void(0)" class="text-accent">#HubbEvents</a></p>
                </div>
            </div>
        </div>
    </section>
    <? }?>
    <section class="footer-cc">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="copyright-text">
                        <p class="m-0">©2018 <a href="javascript:void(0)" class="text-accent">HUBB-events.com</a> <? echo $lang_eventFront_copyRights; ?>
                            with <i class="icon-heart"></i> by <a href="javascript:void(0)" class="text-muted"><strong>Hubb
                                    ucs</strong></a></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="footer-menu d-flex">
                        <ul class="footer-list d-flex m-0 short-link">
                            <li><a href="#"><? echo $lang_eventFront_contactUs; ?></a></li>
                            <li><a href="#"><? echo $lang_eventFront_aboutUs; ?></a></li>
                            <li><a href="#"><? echo $lang_eventFront_privacyPolicy; ?></a></li>
                        </ul>
                        <form action="">
                            <select name="" id="" class="form-control footer-select">
                                <option selected>
                                    <? echo $lang_english; ?>
                                </option>
                                <option>
                                    <? echo $lang_french; ?>
                                </option>
                                <option>
                                    <? echo $lang_spanish; ?>
                                </option>
                                <option>
                                    <? echo $lang_turk; ?>
                                </option>
                                <option>
                                    <? echo $lang_russian; ?>
                                </option>
                                <option>
                                    <? echo $lang_indian; ?>
                                </option>
                                <option>
                                    <? echo $lang_chinese; ?>
                                </option>
                                <option>
                                    <? echo $lang_portuges; ?>
                                </option>
                                <option>
                                    <? echo $lang_arabic; ?>
                                </option>
                                <option>
                                    <? echo $lang_german; ?>
                                </option>
                                <option>
                                    <? echo $lang_dutch; ?>
                                </option>
                                <option>
                                    <? echo $lang_italian; ?>
                                </option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>