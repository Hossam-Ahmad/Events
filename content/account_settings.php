<section class="">
    <form action="">
        <div class="container">
            <div class="step-title">
                <span class="number"><i class="icon-account"></i></span>
                <span class="title">Account Information</span>
            </div>
            <div class="row pt-50 pb-50">
                <div class="col-md-3 col-lg-3">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="panel-avatar">
                                <img src="assets/img/people/1.jpg" class="w-100" alt="">
                                <div class="d-flex mt-2">
                                    <label for="changeAvatar" class="btn btn-default btn-sm btn-outline mb-0">Change</label>
                                    <input type="file" accept="image/*" class="hide" id="changeAvatar">
                                    <button class="btn bg-transparent btn-sm text-danger mr-2">Remove</button>
                                </div>
                                <small>Event account since Nov 24, 2014</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9">
                    <!-- account email adress -->
                    <div class="panel custom-panel">
                        <div class="panel-heading">
                            <h6>Account email address</h6>

                        </div>
                        <div class="panel-body">
                            <div class="d-flex justify-content-between">
                                <small>example@email.com</small>
                                <button class="btn btn-default btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Change
                                </button>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">New Email Address</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Your Current Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Save</button>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Information -->
                    <div class="panel custom-panel">
                        <div class="panel-heading d-flex justify-content-between">
                            <h6>Contact Information</h6>
                            <i class="collapse-controller icon-plus" data-toggle="collapse" data-target="#contactInformation"
                                aria-expanded="true" aria-controls="contactInformation"></i>
                        </div>
                        <div class="collapse show" id="contactInformation">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Prefix</label>
                                            <select class="form-control">
                                                <option value="" selected="selected">--</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Mx.">Mx.</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Prof.">Prof.</option>
                                                <option value="Rev.">Rev.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">First Name</label>
                                            <input type="text" class="form-control" value="Don" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Last Name</label>
                                            <input type="text" class="form-control" value="Joe" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Suffix</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Home Phone</label>
                                            <input type="text" class="form-control" value="+21213456789" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Cell Phone</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Job Title</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Company / Organization</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Website</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Blog</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Home Address -->
                    <div class="panel custom-panel">
                        <div class="panel-heading  d-flex justify-content-between">
                            <h6>Home Address</h6>
                            <i class="collapse-controller icon-plus" data-toggle="collapse" data-target="#homeAddress"
                                aria-expanded="false" aria-controls="homeAddress"></i>
                        </div>
                        <div class="collapse" id="homeAddress">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address 2</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-control-label">City</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Country</label>
                                            <select class="form-control">
                                                <option value="">Select a Country</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="EG" selected>Egypt</option>
                                                <option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Zip/Postal Code</label>
                                            <input type="text" class="form-control" value="21500" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Billing  Address -->
                    <div class="panel custom-panel">
                        <div class="panel-heading  d-flex justify-content-between">
                            <h6>Billing Address</h6>
                            <i class="collapse-controller icon-plus" data-toggle="collapse" data-target="#billingAddress"
                                aria-expanded="false" aria-controls="billingAddress"></i>
                        </div>
                        <div class="collapse" id="billingAddress">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address 2</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-control-label">City</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Country</label>
                                            <select class="form-control">
                                                <option value="">Select a Country</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="EG" selected>Egypt</option>
                                                <option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Zip/Postal Code</label>
                                            <input type="text" class="form-control" value="21500" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shipping Address -->
                    <div class="panel custom-panel">
                        <div class="panel-heading  d-flex justify-content-between">
                            <h6>Shipping Address</h6>
                            <i class="collapse-controller icon-plus" data-toggle="collapse" data-target="#shippingAddress"
                                aria-expanded="false" aria-controls="shippingAddress"></i>
                        </div>
                        <div class="collapse" id="shippingAddress">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address 2</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-control-label">City</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Country</label>
                                            <select class="form-control">
                                                <option value="">Select a Country</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="EG" selected>Egypt</option>
                                                <option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Zip/Postal Code</label>
                                            <input type="text" class="form-control" value="21500" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Work Address -->
                    <div class="panel custom-panel">
                        <div class="panel-heading  d-flex justify-content-between">
                            <h6>Work Address</h6>
                            <i class="collapse-controller icon-plus" data-toggle="collapse" data-target="#workAddress"
                                aria-expanded="false" aria-controls="workAddress"></i>
                        </div>
                        <div class="collapse" id="workAddress">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address 2</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-control-label">City</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Country</label>
                                            <select class="form-control">
                                                <option value="">Select a Country</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="EG" selected>Egypt</option>
                                                <option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Zip/Postal Code</label>
                                            <input type="text" class="form-control" value="21500" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-2">Save</button>
                </div>
            </div>
        </div>
    </form>
</section>