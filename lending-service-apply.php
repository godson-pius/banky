<?php $page_title = "Personal Loan"; require_once('components/header.php') ?>
    <!-- Header end-->

        <!-- BreadCrumb start -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-widget  breadcrumb-widget-3 pt-200 pb-200"
                style="background-image: url(img/breadcrumb/bg-3.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <div class="breadcrumb-content pt-100">
                                <h1>JUMPSTART APPLICATION</h1>
                                <ul>
                                    <!-- <li><a href="index.html">home</a></li> -->
                                    <li>DEPOSIT SERVICES</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main>
        <section class="section-base p-5 m-5">
            <div class="container">

            <P class="mb-4">Check the box(es) below to select the service(s) for which you are applying and then complete the personal information fields. Read the various disclosures and if you agree click the "Submit" button at the bottom of the page.<br>
             <span class="fw-bold" style="background: yellow;">NB: * Indicates a required field.</span></P>

                <div class="title">
                    <h3 class="fw-bold">Bank Services</h3>
                </div>

                <div class="row row-fit-lg">  
                    <div>
                    <ul>
                                <li>-Online Banking</li>
                                <li>-Loan</li>
                            </ul>
                            <h3>Personal Information</h3>
                            <form action="themekit/scripts/contact-form/contact-form.php" class="form-box form-ajax" method="post" data-email="example@domain.com">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="firstname">Firstname *</label>
                <input id="firstname" name="Firstname *" placeholder="Firstname" type="text" class="form-control" required="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="middlename">Middle name</label>
                <input id="middlename" name="Middle Name or Initial" placeholder="Middle name or Initial" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="lastname">Lastname *</label>
                <input id="lastname" name="Lastname" placeholder="Lastname *" type="text" class="form-control" required="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="dob">Date of Birth *</label>
                <input id="dob" name="Date of Birth" placeholder="(mm/dd/yy)" type="date" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="street">Current Street Address *</label>
                <input id="street" name="Current Street Address" placeholder="Current Street Address *" type="text" class="form-control" required="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="city">City *</label>
                <input id="city" name="City *" placeholder="City *" type="text" class="form-control" required="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="state">State *</label>
                <input id="state" name="State" placeholder="State *" type="text" class="form-control" required="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="country">Country *</label>
                <input id="country" name="Country" placeholder="Country *" type="text" class="form-control" required="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="primaryphone">Primary Phone Number *</label>
                <input id="primaryphone" name="Primary phone number" placeholder="Primary Phone Number *" type="tel" class="form-control" required="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="secondaryphone">Secondary Phone Number</label>
                <input id="secondaryphone" name="secondary phone number" placeholder="Secondary Phone Number" type="tel" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="email">Email Address *</label>
                <input id="email" name="email address" placeholder="Email Address *" type="email" class="form-control" required="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="occupation">Occupation *</label>
                <input id="occupation" name="occupation" placeholder="Occupation *" type="text" class="form-control" required="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="maritalstatus">Marital Status *</label>
                <select id="maritalstatus" class="form-control">
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Divorced</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">Gender *</label>
                <select id="gender" class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
        </div>
    </div>
    <button class="btn btn-primary m-4" type="submit">SUBMIT</button>

</form>

                    
                    </div>  
                </div><br>           

            </div>
        </section>
    </main>

        <!-- footer start -->
        <?php require_once ('components/footer.php'); ?>
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