<?php $page_title = "Online Banking"; require_once('components/header.php') ?>
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
                                    <li>Online Banking</li>
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
                <div class="row row-fit-lg">
                    <div class="col-lg-8">
                        <p>
                            * Indicates a required field.<br><br>

                            Check the box(es) below to select the service(s) for which you are applying and then complete 
                            the personal information fields. Read the various disclosures and if you agree click the "Submit" 
                            button at the bottom of the page. <br><br>

                        </p><h2>Bank Service</h2><br>
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Online Banking
                         </label><br>
                         <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Loan
                         </label>
                        <p></p><br>

                        <p>
                            </p><h2>Personal Information</h2><br>

                           
                            <form id="UCiFI" action="thtmekit/scripts/php/contact-form.php" class="form-box form-ajax form-ajax-wp" method="post" data-email="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input id="FName" name="FName" placeholder="First Name:" type="text" class="input-text" required=""><br>
                                        <input id="LName" name="LName" placeholder="LastName:" type="text" class="input-text" required=""><br>
                                        <input id="Address" name="Address" placeholder="Current Street Address:" type="text" class="input-text" required=""><br>
                                        <input id="Number" name="Number" placeholder="Primary Phone:" type="number" class="input-text" required=""><br>
                                        <input id="Email" name="Email" placeholder="Email Address:" type="email" class="input-text" required=""><br>
                                        <input id="Marital" name="Marital" placeholder="Marital Status:" type="text" class="input-text" required=""><br>

                                        <label for="state">State :  </label>
                                        <select class="form-control" id="state" required="">
                                          <option>State1</option>
                                          <option>State2</option>
                                          <option>State3</option>
                                          <option>State4</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <input id="MName" name="MName" placeholder="Middle Name:" type="text" class="input-text" required=""><br>
                                        <input id="FName" name="FName" placeholder="Date of Birth:" type="text" class="input-text" required=""><br>
                                        <input id="city" name="city" placeholder="City:" type="text" class="input-text" required=""><br>
                                        <input id="Secondary Phone" name="Secondary Phone" placeholder="Secondary Phone:" type="text" class="input-text" required=""><br>
                                        <input id="Marital" name="Marital" placeholder="Occupation: " type="text" class="input-text" required=""><br>
                                        <input id="Country" name="Country" placeholder="Country:" type="text" class="input-text" required=""><br>
                                        <label for="sel1">Gender :</label>
                                        <select class="form-control" id="Gender" required="">
                                          <option>Male</option>
                                          <option>Female</option>
                                          <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="space-xs">
                                <button class="btn btn-xs" type="submit">Submit This Application</button><br><br>
                                <!-- <div class="success-box">
                                    <div class="alert alert-success">
                                        Congratulations. Your message has been sent successfully.
                                    </div>
                                </div>
                                <div class="error-box">
                                    <div class="alert alert-warning">
                                        Error, please retry. Your message has not been sent.
                                    </div>
                                </div> -->
                            </form>
                                
                        <p></p>
                    </div>
                     
                     <div class="col-lg-4">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-monitor-phone"></i>
                                <div class="caption">
                                    <h2>Great Rates!</h2>
                                    <p>
                                        Great Rates!
                                    </p>
                                </div>
                            </div>
                        </div><br>
                    
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-top-icon boxed">
                            <i class="im-bar-chart2"></i>
                            <div class="caption">
                                <h2>Growing in Jonesboro</h2>
                                <p>
                                    Horizon Trustco Financial Park
                                </p>
                            </div>
                        </div>
                    </div><br>

                    <div class="grid-item">
                        <div class="cnt-box cnt-box-top-icon boxed">
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
            
    <footer class="light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Horizon Trustco</h3>
                    <p>Begin your journey with us today to enable us constantly improve your ing experiences.</p>
                    <!-- <div class="icon-links icon-social icon-links-grid social-colors">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="twitter"><i class="icon-twitter"></i></a>
                        <a class="instagram"><i class="icon-instagram"></i></a>
                        <a class="pinterest"><i class="icon-pinterest"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <h3>Resources</h3>
                    <ul class="icon-list icon-line">
                        <li><a href="contacts">About us </a></li>
                        <li><a href="contacts">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="text-list text-list-line">
                        <li><b>Address</b><hr><p>Vietnam</p></li>
                        <li><b>Email</b><hr><p>info@horizontrustco.com</p></li>
                        <li><b>Opening hours</b><hr><p>8:30AM - 4PM</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <span>© Horizon Trustco  2023.</span> -  <a href="privacy">Privacy policy</a>
                <span>Federal Deposit Insurance Corporation | <img src="media/fdic.png" width="30" alt=""> </span>
            </div>
        </div>

        <link rel="stylesheet" href="themekit/media/icons/iconsmind/line-icons.min.css">
        <script src="themekit/scripts/jquery.min.js"></script>
        <script src="themekit/scripts/main.js"></script>
        <script src="themekit/scripts/parallax.min.js"></script>
        <script src="themekit/scripts/glide.min.js"></script>
        <script src="themekit/scripts/magnific-popup.min.js"></script>
        <script src="themekit/scripts/tab-accordion.js"></script>
        <script src="themekit/scripts/imagesloaded.min.js"></script>
        <script src="themekit/scripts/progress.js" async=""></script>
        <script src="themekit/scripts/custom.js" async=""></script>
        <script src="themekit/scripts/contact-form/contact-form.js" async=""></script>
        <script src="themekit/scripts/maps.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl7p8SWg-5kLe7i-usdYCu5m3eVllMDTs"></script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
            }
        </script>
    </footer>
    

</div></div></section></main>

                    

            </div>
        </section>
        <!-- Content ends here -->

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