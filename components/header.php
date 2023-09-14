
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $page_title; ?></title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- CSS here -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/elegant-icons.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/all.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/nice-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/flatpickr.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/default.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img/logo/Logo-2.png" alt="">
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <!-- Header -->
    <header class="header">
        <div class="header-menu header-menu-4" id="sticky">
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="index.html">
                        <img class="main" src="img/logo/Logo.png" srcset="img/logo/Logo@2x.png 2x" alt="logo">
                        <img class="sticky" src="img/logo/Logo-2.png" srcset="img/logo/Logo-2@2x.png 2x" alt="logo">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav menu ms-auto">
                            <li class="nav-item dropdown submenu ">
                                <a href="index" class="nav-link dropdown-toggle active" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                            </li>

                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="loan.html" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Deposit Services
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                    data-bs-toggle="dropdown"></i>

                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="personal-checking">Personal Checkings</a></li>
                                    <li class="nav-item"><a class="nav-link" href="personal-savings">Personal Savings</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Business Checking">Business Checkings and Savings</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Retail Banking">Retail Banking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Rates">Rates</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Apply">Apply</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Card Services">Card Services</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Reorder Checks">Reorder Checks</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Switch Kit">Switch Kit</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Lending Services
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                    data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="personal-loans">Personal Loans</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Business-loans">Business Loans</a>
                                    <li class="nav-item"><a class="nav-link" href="mortgage-loans">Mortgage Loans</a>
                                    <li class="nav-item"><a class="nav-link" href="#">Agricultural Loans</a>
                                    <li class="nav-item"><a class="nav-link" href="loan-officers">Loan Officers</a>
                                    <li class="nav-item"><a class="nav-link" href="credit-card">Credit Cards</a>
                                    <li class="nav-item"><a class="nav-link" href="job-post.html">Credit Card LOGIN</a>
                                    <li class="nav-item"><a class="nav-link" href="lending-service-apply">Apply</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Resources
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                    data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu ">
                                    <li class="nav-item"><a class="nav-link" href="First Take.php">First Take</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Online Banking.php">Online Banking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Apply for Online Banking.php">Apply for Online Banking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Mobile Wallet - Learn More.php">Mobile Wallet - Learn More</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Debit Card . ID Safety.php">Debit Card / ID Safety</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Additional Services.php">Additional Services</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Telephone Banking.php">Telephone Banking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Security.php">Security</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Accessibilty.php">Accessibilty</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Get In Touch
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                    data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu ">
                                    <li class="nav-item"><a class="nav-link" href="contact">About us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact">Contact us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact">Location and Hours</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact">Bank News</a>
                                    <li class="nav-item"><a class="nav-link" href="contact">Careers</a>
                                    <li class="nav-item"><a class="nav-link" href="contact">Lost or Stolen Cards</a>
                                    <li class="nav-item"><a class="nav-link" href="contact">Forgot ONline Banking Password</a>
                                    <li class="nav-item"><a class="nav-link" href="contact">Coronavirus Update</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- <a class="theme-btn theme-btn-rounded-2 theme-btn-alt"
                            href="https://themeforest.net/item/royal Union-banking-business-loan-bootstrap5html-website-template/32788885?s_rank=9"
                            target="_blank">Buy Royal Union</a> -->
                        <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                            <label for="something" class="tab-btn tab-btns">
                                <ion-icon name="moon"></ion-icon>
                            </label>
                            <label for="something" class="tab-btn">
                                <ion-icon name="sunny"></ion-icon>
                            </label>
                            <label class=" ball" for="something"></label>
                            <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>