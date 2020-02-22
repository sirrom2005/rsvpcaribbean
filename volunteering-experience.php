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
                        <div class="navbar navbar-inverse navbar-fixed-top none-navbar">
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
                        <span class=
                        "icon-lg mdi mdi-account-multiple icon icon-white"></span>
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">About Us</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li>The Volunteering Experience</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
            
            <!-- THE VOLUNTEERING EXPERIENCE  -->
            <section class="section-41">
                <div class="shell container">
                    
                    <div class="range">
                        <div class="cell-lg-5 text-lg-left">
                            <h1>The Volunteering Experience</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    
                    <div class="section-18">
                      <table style="width: 100%; border-spacing: 0; border-collapse: separate;">
                        <tbody>
                          <tr>
                            <td><img src="images/volunteering_experience_step_01.png" alt="" class="img-responsive"></td>
                            <td><img src="images/volunteering_experience_step_02.png" alt="" class="img-responsive"></td>
                            <td><img src="images/volunteering_experience_step_03.png" alt="" class="img-responsive"></td>
                            <td><img src="images/volunteering_experience_step_04.png" alt="" class="img-responsive"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
        					 <div class="section-18">
        					    <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#step_01">Step 1</a></li>
                          <li><a data-toggle="tab" href="#step_02">Step 2</a></li>
                          <li><a data-toggle="tab" href="#step_03">Step 3</a></li>
                          <li><a data-toggle="tab" href="#step_04">Step 4</a></li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane fade in active" id="step_01">
                              <h3>Review Information</h3>
                              <ul class="custom-item-list">
                                  <li>Review <a href="information.php">Programme and Project Information</a> and 
                                    <a href="destinations.php">Destinations</a> – Volunteer</li>
                                  <li>Review <a href="termsandcondition.php">Terms and Conditions</a> – Volunteer</li>
                                  <li>Check <a href="prices-jamaica.php">Programme and Projects Price</a>, <a href="what-included.php">What 
                                    is Included</a> and <a href="what-not-included.php">What is Not Included</a> – Volunteer</li>
                                  <li><a href="contact-us.php">Contact Us</a> with questions – Volunteer</li>
                              </ul>
                          </div>
                          <div class="tab-pane fade" id="step_02">
                              <h3>Application</h3>
                              <ul class="custom-item-list">
                                  <li>Choose programme and destination – Volunteer</li>
                                  <li>Complete and submit <a href="apply.php">Application Form</a> and pay deposit – Volunteer</li>
                              </ul>
                          </div>
                          <div class="tab-pane fade" id="step_03">
                              <h3>Pre-Departure</h3>
                              <ul class="custom-item-list">
                                  <li>Acceptance email sent to volunteer within 5 working days – RSVP</li>
                                  <li>Volunteer will receive a call within 10 working days after your acceptance email – RSVP</li>
                                  <li>Volunteer will receive acceptance letter, volunteer manual, RSVP personal webpage, <a href="visa.php">Visa</a> 
                                    information (if applicable), <a href="flight.php">Flight</a> and <a href="travel-medical-insurance.php">Travel and Medical 
                                    Insurance</a> information reminder and all other information within 15 working days – RSVP</li>
                                  <li>Review RSVP personal webpage – Volunteer</li>
                                  <li>Review <a href="travel-kit.php">Travel Kit</a> and start planning – Volunteer</li>
                                  <li>Pay full programme fee 90 days before arrival or immediately if application is less than 90 days – Volunteer</li>
                                  <li>Email Travel and Medical insurance 60 days before arrival or immediately if application is less than 60 days -
                                  Volunteer</li>
                                  <li>Finalize programme, accommodation and all logistics – RSVP</li>
                                  <li>One month before departure volunteer will receive programme and accommodation details – RSVP</li>
                                  <li>Review information – Volunteer</li>
                                  <li>Start packing – Volunteer</li>
                                  <li>Two weeks before departure volunteer will receive details of the airport pickup driver – RSVP</li>
                                  <li>Final packing – Volunteer</li>
                                  <li>Final call two weeks before arrival - RSVP</li>
                              </ul>
                          </div>
                          <div class="tab-pane fade" id="step_04">
                              <h3>In the Caribbean</h3>
                              <ul class="custom-item-list">
                                  <li>A RSVP Caribbean driver will meet you at the airport – RSVP</li>
                                  <li>Orientation the day after arrival – RSVP</li>
                                  <li>Provide on-going support and coordinate events – RSVP</li>
                                  <li>Attend work, workshops, social activities, cultural events and enjoy the island – Volunteer</li>
                                  <li>Provide 24-hour support – RSVP</li>
                                  <li>Prepare departure information – RSVP</li>
                                  <li>Volunteer departs and tells others about the wonderful experience – Volunteer</li>
                              </ul>
                          </div>
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