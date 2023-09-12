<?php $page_title = "Personal Checking";
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
                            <h1>Apply</h1>
                            <ul>
                                <li><a href="http://localhost/BANKY/index">home</a></li>
                                <li>Apply</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BreadCrumb end -->

    <!-- Content start here -->
    <section class="pt-140 pb-100 get-touch-area bg_white">
        <div class="container">

            <!-- Start writing code from here -->

            <main>
                <section class="section-base">
                    <div class="container">
                        <p class="title wow fadeInUp" data-wow-delay="0.9s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 40px; color: rgb(0, 71, 103); margin-top: 25px; margin-bottom: 20px; display: block; margin-block-start: 1em; margin-block-end: 1em; margin-inline-start: 0px; margin-inline-end: 0px;">
                            Check the box(es) below to select the service(s) for which you are applying and then
                            complete the personal information fields. Read the various disclosures, and if you agree,
                            click the "Submit" button at the bottom of the page.
                            <br>
                            <mark style="background-color: yellow;">NB: <strong>*</strong> Indicates a required
                                field.</mark>

                        </p>

                        <hr class="my-4"> <!-- Use Bootstrap margin utility class my-4 for margin -->
                        <div class="title">
                            <h2 class="title wow fadeInUp" data-wow-delay="0.9s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; margin-bottom: 50px; margin-top: 30px; color: rgb(0, 71, 103);">
                                Bank Service</h2>
                        </div>

                        <div class="form-check" data-wow-delay="0.9s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; margin-block-start: 1em; margin-block-end: 1em; margin-inline-start: 0px; margin-inline-end: 0px; font-family: 'Roboto', sans-serif; font-weight: 400; font-size: 16px; line-height: 20px; margin-top: 25px; margin-bottom: 20px;">

                            <div class="form-check title wow fadeInUp" data-wow-delay="0.9s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <input type="checkbox" id="onlineBanking" name="service[]" value="Online Banking"
                                    required class="form-check-input">
                                <label for="onlineBanking" class="form-check-label">Online Banking</label>
                            </div>
                            <div class="form-check title wow fadeInUp" data-wow-delay="0.9s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <input type="checkbox" id="loan" name="service[]" value="Loan" required
                                    class="form-check-input">
                                <label for="loan" class="form-check-label">Loan</label>
                            </div>


                            <div class="title wow fadeInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <h2 style="margin-bottom: 50px; margin-top: 30px; color: rgb(0, 71, 103);">Personal Information</h2>
</div>

<form action="" class="form-box form-ajax" method="post" data-email="example@domain.com">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-6">
                <label for="firstname" class="form-label">Firstname <span class="text-danger">*</span></label>
                <input id="firstname" name="Firstname" placeholder="Firstname" type="text" class="form-control rounded-10" style="height: 55px;" required>
            </div>
            <div class="col-lg-6">
                <label for="middleName" class="form-label">Middle name</label>
                <input id="middleName" name="Middle Name or Initial" placeholder="Middle name or Initial" type="text" class="form-control rounded-10" style="height: 55px;">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-6">
                <label for="lastname" class="form-label">Lastname <span class="text-danger">*</span></label>
                <input id="lastname" name="Lastname" placeholder="Lastname" type="text" class="form-control rounded-10" style="height: 55px;" required>
            </div>
            <div class="col-lg-6">
                <label for="dateOfBirth" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                <input id="dateOfBirth" name="Date of Birth" placeholder="(mm/dd/yy)" type="date" class="form-control rounded-10" style="height: 55px;">
            </div>

            <div class="container">
    <div class="row mb-3">
        <div class="col-lg-6">
            <label for="firstname" class="form-label">Current Street Address <span class="text-danger">*</span></label>
            <input id="firstname" name="Firstname" placeholder="Firstname" type="text" class="form-control rounded-10" style="height: 55px;" required>
        </div>

        <div class="col-lg-6">
            <label for="middleName" class="form-label">City <span class="text-danger">*</span></label>
            <input id="middleName" name="Middle Name or Initial" placeholder="Middle name or Initial" type="text" class="form-control rounded-10" style="height: 55px;">
        </div>

        
        <div class="container">
    <div class="row mb-3">
        <div class="col-lg-6">
            <label for="firstname" class="form-label">State <span class="text-danger">*</span></label>
            <input id="firstname" name="Firstname" placeholder="Firstname" type="text" class="form-control rounded-10" style="height: 55px;" required>
        </div>

        <div class="col-lg-6">
            <label for="middleName" class="form-label">Country <span class="text-danger">*</span></label>
            <input id="middleName" name="Middle Name or Initial" placeholder="Middle name or Initial" type="text" class="form-control rounded-10" style="height: 55px;">
        </div>

        
        <div class="container">
    <div class="row mb-3">
        <div class="col-lg-6">
            <label for="firstname" class="form-label">Primary Phone Number <span class="text-danger">*</span></label>
            <input id="firstname" name="Firstname" placeholder="Firstname" type="text" class="form-control rounded-10" style="height: 55px;" required>
        </div>

        <div class="col-lg-6">
            <label for="middleName" class="form-label">Secondary Phone Number <span class="text-danger">*</span></label>
            <input id="middleName" name="Middle Name or Initial" placeholder="Middle name or Initial" type="text" class="form-control rounded-10" style="height: 55px;">
        </div>

        
        <div class="container">
    <div class="row mb-3">
        <div class="col-lg-6">
            <label for="firstname" class="form-label">Email Address <span class="text-danger">*</span></label>
            <input id="firstname" name="Firstname" placeholder="Firstname" type="text" class="form-control rounded-10" style="height: 55px;" required>
        </div>

        <div class="col-lg-6">
            <label for="middleName" class="form-label">Middle name <span class="text-danger">*</span></label>
            <input id="middleName" name="Middle Name or Initial" placeholder="Middle name or Initial" type="text" class="form-control rounded-10" style="height: 55px;">
        </div>

        
        <div class="container">
    <div class="row mb-3">
        <div class="col-lg-6">
            <label for="firstname" class="form-label">Occupation <span class="text-danger">*</span></label>
            <input id="firstname" name="Firstname" placeholder="Firstname" type="text" class="form-control rounded-10" style="height: 55px;" required>
        </div>

        <div class="col-lg-6">
            <label for="middleName" class="form-label">Marital Status <span class="text-danger">*</span></label>
            <input id="middleName" name="Middle Name or Initial" placeholder="Middle name or Initial" type="text" class="form-control rounded-10" style="height: 55px;">
        </div>

        <div class="col-lg-6">
            <label for="middleName" class="form-label">Gender <span class="text-danger">*</span></label>
            <input id="middleName" name="Middle Name or Initial" placeholder="Middle name or Initial" type="text" class="form-control rounded-10" style="height: 55px;">
        </div>
    </div>
        </div>

        <!-- Add more rows and columns as needed -->

    <!-- Add more rows with pairs of form fields -->
</div>

    </div>
</form>


                                <!-- Continue adding form fields -->
                                <button class="btn btn-primary" type="submit">SUBMIT</button>

                            </form>
                        </div>
                </section>
            </main>


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