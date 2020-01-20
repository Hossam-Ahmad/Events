<section class="bg-white">
    <form action="">
        <div class="container">
            <div class="step-title">
                <span class="number"><i class="icon-social"></i></span>
                <span class="title">Social Settings</span>
            </div>
            <div class="row pt-50 pb-50">
                <div class="col-md-12 col-lg-10">
                    <div class="panel">
                        <section id="notConnected">
                            <p>Connecting to Facebook will allow your friends to find you on HUBB Events</p>
                            <!-- remove data attribute in live version // its for demo purpose  only -->
                            <a href="#" class="btn bg-fb text-white" id="facebookConnect" data-toggle="replace" data-replace="#notConnected" data-replace-with="#connectedUser">
                                <i class="icon-facebook"></i>
                                <span>Connect</span>
                            </a>
                        </section>
                        <!-- If user is connected  -->
                        <!-- hide class is for demo purpose only -->
                        <section id="connectedUser" class="hide">
                            <div class="d-flex align-items-center" style="flex-wrap: wrap;">
                                <span class="icon-facebook bg-fb text-white btn mr-2"></span>
                                <p class="mb-0">Connected as <a href="#faceBookLink">Don Joe</a></p>
                                <a href="#" class="btn btn-default btn-outline ml-3">Dissconnect</a>
                            </div>
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" id="customSocialCheck0">
                                <label class="custom-control-label" for="customSocialCheck0">
                                    Show Friends what events I'm attending
                                </label>
                            </div>
                            <button class="btn btn-primary mt-4">Save Preferences</button>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>