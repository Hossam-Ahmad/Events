<div class="page">
    <div class="event-view">

        <div class="event-bg-cover">
            <img src="<? echo $root_path?>assets/img/demo/4.jpeg" alt="">
        </div>
        <div class="container container-sm bg-white">
            <div class="wrapper">
                <div class="event-card row m-0">
                    <img src="<? echo $root_path?>assets/img/demo/4.jpeg" class="event-img col-lg-3 col-md-4 p-0" alt="">
                    <article class="event-body m-0 col-lg-9 col-md-8">
                        <div class="date">
                            <p class="date-month">Nov</p>
                            <p class="date-day text-muted">14</p>
                        </div>
                        <div class="description">
                            <h6 class="title font-weight-bold">
                                Get Your Masters or PhD in the U.S. (Alexandria)
                            </h6>
                            <h6 class="organizer text-muted">
                                by <a href="javascript:void(0)" class="text-muted">Organizer EducationUSA At
                                    AMIDEAST/Alexandria</a>
                            </h6>
                            <small class="text-muted">
                                <p>Wed, Nov 14, 5:30pm</p>
                                <p>Amideast, Alexandria</p>
                            </small>
                            <p>Free</p>
                        </div>
                    </article>
                </div>
                <div class="action-row">
                    <!-- register = > free event
                            details = > free/paid event with end sales
                            tickets =? paid event
                         -->
                    <a href="javascript:void(0)" class="btn btn-primary larg-action col-lg-3 col-md-4" data-toggle="modal"
                        data-target="#checkoutBox">Register</a>
                    <div class="event-actions">
                        <div class="d-flex">
                            <button class="event-action-btn" title="Share" data-toggle="modal" data-target="#shareBox">
                                <i class="icon-share"></i>
                            </button>
                            <button class="event-action-btn toggle" title="Save" data-toggle="active" data-parent=".event-actions">
                                <i class="icon-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-lg-3 col-md-4">
                        <div class="section">
                            <h6 class="heading font-weight-bold">Date and time</h6>
                            <p class="text-muted text-small">Sat, Nov 17, 2018, 10:00 AM – Sun, Nov 18, 2018, 7:00 PM
                                EET</p>
                            <a href="javascript:void(0)" class="text-small" data-toogle="modal" data-target="#calenderBox">Add
                                to Calendar</a>
                        </div>
                        <section>
                            <h6 class="heading font-weight-bold">Location</h6>
                            <p class="text-muted text-small">AMIDEAST Alexandria
                                3 El Faraana St. Azarita.
                                Alexandria
                                Alexandria, Alexandria</p>
                        </section>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="section">
                            <h6 class="heading font-weight-bold">Description</h6>
                            <div class="dec-body text-muted text-small">
                                <p>StartupZ Fair is the first specialized employment fair targeting Startups in Egypt
                                    that:</p>
                                <ul>
                                    <li>
                                        <p>Support Startups to fulfill their recruitment needs with economical
                                            budget.</p>
                                    </li>
                                    <li>
                                        <p>Connect Startups with high calibers matching their needs</p>
                                    </li>
                                    <li>
                                        <p>Provide the startups with a real opportunity for market exposure </p>
                                    </li>
                                    <li>
                                        <p>Offer mentorship opportunities in business, technical and marketing
                                            aspects
                                        </p>
                                    </li>
                                    <li>
                                        <p>Help them to meet founders and executives from top startups and SMEs and
                                            investors from top reputable incubators in Egypts to exchange
                                            experience
                                            and
                                            provide the environment for potential partnership.</>
                                    </li>
                                </ul>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aspernatur
                                    accusantium assumenda velit amet officiis laudantium eligendi iusto? Adipisci eum
                                    dolores vel ipsum debitis modi hic optio recusandae temporibus? Adipisci!</p>
                            </div>
                        </div>
                        <div class="section">
                            <h6 class="heading font-weight-bold">Tags</h6>
                            <ul class="tags text-small">
                                <li>
                                    <a href="javascript:void(0)">Family & Education</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Seminar</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Things To Do In Alexandria</a>
                                </li>
                            </ul>
                        </div>
                        <div class="section">
                            <h6 class="headgin font-weight-bold">Share with Friends</h6>
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
                </div>
                <hr>
                <section class="organizer-section">
                    <div class="text-center">
                        <img src="<? echo $root_path?>assets/img/people/2.jpg" alt="">
                        <a href="organization">Organizer EducationUSA At AMIDEAST/Alexandria</a>
                        <p class="text-muted">Organizer of Tips on CV Writing by EducationUSA at Amideast Alexandria</p>
                        <div class="d-flex">
                            <a href="javascript:void(0)" class="btn btn-outline btn-outline-default toggle" data-toggle="active">Follow</a>
                            <a href="javascript:void(0)" class="btn bg-transparent">Contact</a>
                        </div>
                    </div>
                </section>
                <section class="map">
                    <div class="map-container" id="mapid"></div>
                </section>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script>
    var map = L.map('mapid').setView([51.505, -0.09], 13);
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('Event Location.')
        .openPopup();
</script>
