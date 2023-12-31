            <footer id="page-footer" class="bg-body">
                <div class="content py-0">
                    <div class="row font-size-sm">

                        <div class="col-lg-6 col-sm-12 order-sm-1 text-center text-sm-left">
                            <a class="font-w600" href="https://horizontrustco.com" target="_blank">Royal Union</a> &copy; <span data-toggle="year-copy"></span>

                            <!-- <span class="float-right">Federal Deposit Insurance Corporation</span> -->
                        </div>

                        <div class="col-lg-6 col-sm-12 order-sm-1 text-center text-sm-left">
                            <img class="float-right" src="../media/fdic.png" width="50" alt="">
                        </div>
                        
                    </div>

                </div>
            </footer>
            <!-- END Footer -->
            </div>
            <!-- END Page Container -->

            <!--
            Dashmix JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out ../admin/assets/_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the ../admin/assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            ../admin/assets/js/core/jquery.min.js
            ../admin/assets/js/core/bootstrap.bundle.min.js
            ../admin/assets/js/core/simplebar.min.js
            ../admin/assets/js/core/jquery-scrollLock.min.js
            ../admin/assets/js/core/jquery.appear.min.js
            ../admin/assets/js/core/js.cookie.min.js
        -->
            <script src="../admin/assets/js/dashmix.core.min.js"></script>

            <!--
            Dashmix JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at ../admin/assets/_js/main/app.js
        -->
            <script src="../admin/assets/js/dashmix.app.min.js"></script>

            <script>
                document.getElementById('printBtn').addEventListener('click', () => {
                    window.print()
                })
            </script>
            </body>

            </html>