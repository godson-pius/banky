<?php $page_title = "Online Banking";
require_once('components/header.php') ?>
<!-- Header end-->


<main>
    <!-- BreadCrumb start -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-widget  breadcrumb-widget-3 pt-200 pb-200"
            style="background-image: url(img/breadcrumb/bg-3.jpg);">

            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="breadcrumb-content pt-100">
                            <h1>ONLINE BANKING</h1>
                            <ul>
                                <li><a href="http://localhost/BANKY/index">home</a></li>
                                <li>Online banking</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BreadCrumb end -->
    <main>
        <section class="section-base">
            <div class="container">
                <div class="row row-fit-lg">
                    <div class="col-lg-8">
                        <p class="title wow fadeInUp" data-wow-delay="0.9s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; display: block; margin-block-start: 1em; margin-block-end: 1em; margin-inline-start: 0px; margin-inline-end: 0px; font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 40px;  margin-top: 100px; margin-bottom: 20px;">
                            Check the box(es) below to select the service(s) for which you are applying and
                            then complete the personal information fields. Read the various disclosures and if you agree
                            click the "Submit" button at the bottom of the page.<br>
                            <span class="bg-warning">NB: * Indicates a required field</span>
                        </p>
                        <h3 class="fw-bold" style="color: rgb(0, 71, 103);margin-top: 25px; margin-bottom: 20px;">Bank
                            Services</h3><br>
                        <div class="form-check title wow fadeInUp" data-wow-delay="0.9s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <input type="checkbox" id="onlineBanking" name="service[]" value="Online Banking" required
                                class="form-check-input">
                            <label for="onlineBanking" class="form-check-label">Online Banking</label>
                        </div>
                        <div class="form-check title wow fadeInUp" data-wow-delay="0.9s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <input type="checkbox" id="loan" name="service[]" value="Loan" required
                                class="form-check-input">
                            <label for="loan" class="form-check-label">Loan</label>
                        </div>

                        <p>
                        </p>
                        <h3 class="fw-bold" style="color: rgb(0, 71, 103);margin-top: 25px; margin-bottom: 20px;">Bank
                            Services</h3><br>
                        <form action="#" class="form-box form-ajax" method="post" data-email="example@domain.com">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname <span class="text-danger">*</span></label>
                                        <input id="firstname" name="Firstname *" placeholder="Firstname" type="text"
                                            class="form-control" required="" ; class="form-control rounded-10"
                                            style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="middlename">Middle name<span class="text-danger">*</span></label>
                                        <input id="middlename" name="Middle Name or Initial"
                                            placeholder="Middle name or Initial" type="text"
                                            ;class="form-control rounded-10" style="height: 55px;" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname <span class="text-danger">*</span></label>
                                        <input id="lastname" name="Lastname" placeholder="Lastname *" type="text" ;
                                            class="form-control rounded-10" style="height: 55px;" class="form-control"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                                        <input id="dob" name="Date of Birth" placeholder="(mm/dd/yy)" type="date" ;
                                            class="form-control rounded-10" style="height: 55px;" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="street">Current Street Address <span
                                                class="text-danger">*</span></label>
                                        <input id="street" name="Current Street Address"
                                            placeholder="Current Street Address *" type="text" ;
                                            class="form-control rounded-10" style="height: 55px;" class="form-control"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <input id="city" name="City *" placeholder="City *" type="text"
                                            ;class="form-control rounded-10" style="height: 55px;" class="form-control"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="state">Primary Phone Number <span
                                                class="text-danger">*</span></label>
                                        <input id="state" name="State" placeholder="State *" type="text"
                                            ;class="form-control rounded-10" style="height: 55px;" class="form-control"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="country">Secondary Phone Number<span
                                                class="text-danger">*</span></label>
                                        <input id="country" name="Country" placeholder="Country *" type="text"
                                            ;class="form-control rounded-10" style="height: 55px;" class="form-control"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="primaryphone">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input id="primaryphone" name="Primary phone number"
                                            placeholder="Primary Phone Number *" type="tel"
                                            ;class="form-control rounded-10" style="height: 55px;" class="form-control"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="secondaryphone">Occupation <span
                                                class="text-danger">*</span></label>
                                        <input id="secondaryphone" name="secondary phone number"
                                            placeholder="Secondary Phone Number" type="tel"
                                            ;class="form-control rounded-10" style="height: 55px;" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Marital Status<span class="text-danger">*</span></label>
                                        <input id="email" name="email address" placeholder="Email Address *"
                                            type="email" ;class="form-control rounded-10" style="height: 55px;"
                                            class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="occupation">Country <span class="text-danger">*</span></label>
                                        <input id="occupation" name="occupation" placeholder="Occupation *" type="text"
                                            ;class="form-control rounded-10" style="height: 55px;" class="form-control"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="maritalstatus">State <span class="text-danger">*</span></label>
                                        <select id="maritalstatus" ; class="form-control rounded-10"
                                            style="height: 55px;" class="form-control">
                                            <!-- <option>Single</option>
                                            <option>Married</option>
                                            <option>Widowed</option>
                                            <option>Divorced</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="gender" ;>Gender <span class="text-danger">*</span></label>
                                        <select id="gender" class="form-control rounded-10" style="height: 55px;">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-right">
                            <button class="btn btn-primary m-6 mt-4" type="submit">SUBMIT</button>
                        </div>

                        <p></p>
                    </div>

                    <div class="col-lg-4">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed"
                                style="box-shadow: 0 10px px rgba(0, 0, 0, 0.15); transition: all .5s; background-color: rgb(255, 255, 255); border-radius: 5px; position: relative; overflow: hidden; margin-top: 50px; padding: 100px">
                                <i class="im-monitor-phone"></i>
                                <div class="caption">
                                    <h2>Great Rates!</h2>
                                    <p>Great Rates!</p>
                                </div>
                            </div>


                            <div class="grid-item">
                                <div class="cnt-box cnt-box-top-icon boxed"
                                    style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15); transition: all .5s; background-color: rgb(255, 255, 255); border-radius: 5px; position: relative; overflow: hidden; margin-top: 50px; padding: 100px">
                                    <i class="im-bar-chart2"></i>
                                    <div class="caption">
                                        <h2>Growing in Jonesboro</h2>
                                        <p>
                                            Royal Union Financial Park
                                        </p>
                                    </div>
                                </div>
                            </div><br>


                            <div class="grid-item">
                                <div class="cnt-box cnt-box-top-icon boxed"
                                    style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15); transition: all .5s; background-color: rgb(255, 255, 255); border-radius: 5px; position: relative; overflow: hidden; margin-top: 50px; padding: 100px">
                                    <i class="im-bar-chart2"></i>
                                    <div class="caption">
                                        <h2>Stop. Think. Connect.</h2>
                                        <p>
                                            A campaign to promote safer online practices.
                                        </p>
                                    </div>
                                </div>
                            </div><br>
                        </div>

        </section>
    </main>
    <!-- Content start here -->

    <section class="pt-140 pb-100 get-touch-area bg_white">
        <div class="container">

            <!-- Start writing code from here -->

            <p></p>



        </div>
    </section>
    <!-- Content ends here -->

</main>

<!-- footer start -->
<?php require_once('components/footer.php'); ?>
<!-- footer end -->

<!-- Back to top button -->
<a id="back-to-top" title="Back to Top"></a>

<!-- JS here -->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery.smoothscroll.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>