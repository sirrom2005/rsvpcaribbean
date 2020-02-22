<?php 
include_once('config/config.php'); 
$fileInfo = pathinfo(__FILE__);
?>
<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">
<head>
    <!-- Site Title-->
    <title><?php echo isset($metaData[$fileInfo['filename']]['title'])? $metaData[$fileInfo['filename']]['title'] : $metaData['default']['title']; ?></title>
    <meta charset="utf-8">
    <meta content="telephone=no" name="format-detection">
    <meta content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta name="keywords" content="<?php echo isset($metaData[$fileInfo['filename']]['keywords'])? $metaData[$fileInfo['filename']]['keywords'] : $metaData['default']['keywords']; ?>">
    <meta name="description" content="<?php echo isset($metaData[$fileInfo['filename']]['description'])? $metaData[$fileInfo['filename']]['description'] : $metaData['default']['description']; ?>">
    <link href="images/favicon.ico" rel="icon" type="image/x-icon">
    <!-- Stylesheets-->
    <?php include_once('layout/css.php'); ?>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
        <![endif]-->
</head>
<body>
    <!-- Page-->
    <div class="page about-t">
        <!-- Page Head-->
        <header class="page-head slider-menu-position">
            <!-- RD Navbar Transparent-->
            <div class="rd-navbar-wrap no-home-mn">
                <nav class="rd-navbar rd-navbar-default rd-navbar-transparent"
                data-lg-auto-height="true" data-lg-layout="rd-navbar-static"
                data-lg-stick-up="true" data-md-layout="rd-navbar-fixed">
                    <div class="rd-navbar-inner">
                        <div class=
                        "navbar navbar-inverse navbar-fixed-top none-navbar">
                            <?php include('layout/top_menu.php'); ?>
                        </div>
                        <menu></menu><!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                             <button class="rd-navbar-toggle"
                            data-rd-navbar-toggle=
                            ".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <a href="index.php"><img alt='' height='94'
                                src='images/intense/logo-light.png' style=
                                'margin-top: -35px;margin-left: -25px;' width=
                                '138'></a>
                            </div>
                        </div>
                        <div class="rd-navbar-menu-wrap">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <!--Navbar Brand Mobile-->
                                    <div class="rd-navbar-mobile-brand">
                                        <a href="index.php"><img alt=''
                                        height="94" src=
                                        'images/intense/logo-light.png' style=
                                        'margin-top: -35px;margin-left: -25px;'
                                        width='138'></a>
                                    </div>
                                </div><!-- RD Navbar Nav-->
                                <?php include('layout/main_menu.php'); ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header><!-- Classic Breadcrumbs-->
        <section class="breadcrumb-classic section-pattern2 first-bc-margin text-center">
            <div class="shell section-34 section-sm-50">
                <div class="range range-lg-middle">
                    <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2">
                        <img src="images/icon_projectmanagement.png" alt="" style="height: 72px; width: 72px;" alt="">
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Programmes</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="programmeandproject.php">Programmes and Projects</a></li>
                            <li><a href="programmeandproject.php">Programmes</a></li>
                            <li>Health and Wellness Retreat Programme</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>Health and Wellness Retreat Programme</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                      <ul class="custom-item-list">
                          <li><b>Location:</b> Jamaica</li>
                          <li><b>Types of Partners:</b> Retreat Centre</li>
                          <li><b>Number of Persons Per Group:</b> 15</li>
                          <li><b>Minimum Stay:</b> From 4 weeks</li>
                          <li><b>Sustainable Development Goal:</b> Good Health and Well-Being</li>
                          <li><b>Programme Requirements:</b> Volunteers must require special intervention if suffering
                          from psychological or mental health problems.</li>
                          <li><b>Activity Schedule:</b> 5-7 hours per day, Monday – Friday with various activities on the weekend</li>
                          <li><b>Accommodation Type:</b> Retreat group setting</li>
                          <li>
                              <b>Price:</b> From $4,400USD per person, <a href="prices-jamaica.php">convert to your currency</a>.
                              Please see <a href="prices-jamaica.php">Programme and Project Price</a> for Jamaica
                          </li>
                          <li><b>Meals Included:</b> Breakfast, lunch and dinner (adapted to dietary requirements as necessary)</li>
                          <li><b>What is Included:</b> 24-hour support, accommodation, programme, two meals,
                          transportation to and from the airport, taxi cost from retreat centre to outreach
                          activities, please see <a href="what-included.php">What is Included</a> for a full list</li>
                          <li><b>What is Not Included:</b> Airfare, daily lunch, internet, laundry, travel and health
                          insurance, please see <a href="what-not-included.php">What is Not Included</a> for a full list</li>
                          <li><b>Start Dates:</b> Fixed dates, see <a href="information.php">Programme and Project Information</a> for dates</li>
                          <li><b>Age of Volunteer:</b> Must be 16+</li>
                      </ul>
                        <div class="section-18">
                            <p>The Caribbean offers the ideal healing environment for persons who want to get away from
                            the rigors of life in their home country and come to Jamaica to focus on their personal health and
                            wellness. The Health and Wellness Retreat Programme is located in a tranquil, relaxing and healing
                            environment that is safe and secure, and promotes caring for each other. Volunteers who want to come
                            to Jamaica for their own health and wellness can come and participate in a holistic retreat. Based
                            on the physical, emotional, psychological and mental needs a customized programme will be
                            developed for each volunteer. Volunteers will live in a residential type setting with a structured
                            programme for four days each week and then participate in outreach activities once each week.
                            This programme is advertised for fixed dates and will accommodate 15-20 volunteers in each group.
                            Volunteers have to commit to at least one month on the programme.</p>
                            <p>We also offer the retreat to families who want to work on their relationships and resolve any
                            emotional issues they may be experiencing. If you would like to take your family on the Health and
                            Wellness Programme <a href="contact-us.php">Request a Quote</a> now.</p>
                            <p>The types of specialists for each group will vary based on the needs of the group. However, RSVP
                            Caribbean has qualified nutritionists, psychologists, psychiatrists, counsellors, mental
                            health nurses, wellness coaches, doctors and nurses available to work with volunteers in individual and
                            group settings.</p>
                        </div>
                    </div>
                </div>
            </section>   
        </main><!-- Page Footer-->
        <!-- Default footer-->
        <?php include('layout/footer.php'); ?>
    </div><!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class=
                    "pswp__button pswp__button--close" title=
                    "Close (Esc)"></button> <button class=
                    "pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title=
                    "Toggle fullscreen"></button> <button class=
                    "pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=
                "pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left"
                title="Previous (arrow left)"></button> <button class=
                "pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div><!-- Java script-->
    <script src="js/core.min.js">
    </script> 
    <script src="js/script.js">
    </script>
</body>
</html>