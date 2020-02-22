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
                        <img src="images/icon_contact.png" alt="" style="height: 71px; width: 71px;">
                        <!-- span class="icon-lg mdi mdi-account-multiple icon icon-white"></span -->
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Contact Us</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
            
            <!-- OVERVIEW OF RSVP -->
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-5 text-lg-left">
                            <h1><a name="overview"></a>How to Find us</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                    <p>At all times you can communicate with a staff member in the Caribbean or one of our Marketing Executives overseas. 
                    We will answer your emailed questions within 48 hours on weekdays and 72 hours if received on a weekend. If you require 
                    additional information about volunteering with RSVP Caribbean these are some simple options, any information you
                    provide will be kept confidential.</p>    
                    </div>
                    <div class="section-18">
                    <address class="contact-info">
                        <dl>
                            <dt>Review our: </dt>
                            <dd><a href="pdf/RSVP_Brochure.pdf" target="_blank"><strong class="blue">Brochure</strong></a></dd>
                        </dl>
                        <dl>
                            <dt>Call Us:<br><br><br><br></dt>
                            <dd>
                              <a href="javascript:void(null);">JA: 876 569 5918</a><br>
                              <a href="javascript:void(null);">USA: 347 719 1901</a><br>
                              <a href="javascript:void(null);">UK: 44 203 868 0208</a><br>
                              <a href="javascript:void(null);">CA: 647 849 1045</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Email Us: </dt>
                            <dd><a href="mailto:info@rsvpcaribbean.com">info@rsvpcaribbean.com</a></dd>
                        </dl>
                        <dl>
                            <dt>Skype: </dt>
                            <dd><a href="javascript:void(null);">RSVPCaribbean</a></dd>
                        </dl>
                        <dl>
                            <dt>WhatsApp: </dt>
                            <dd><a href="javascript:void(null);">+1 876 569 5918</a></dd>
                        </dl>
                    </address>
                    <p><strong>Address RSVP Caribbean Head Office:</strong> P.O. Box 6432, Runaway Bay, St. Ann, Jamaica </p>
                    </div>
                    <div class="section-18">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Call Back Request Form
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <?php include_once('layout/call_back_request_form.php'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Enquiry Form
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <?php include_once('layout/enquiry_form.php'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Request a Quote and Timetable
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <?php include_once('layout/request_quote_timetable_form.php'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
            </section>
            
            <section class="section-sm-40">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>RSVP Events</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18 section-media">
                        <h4 class="sub-media-title">Online Information Sessions (Via Group Skype with Staff in the Caribbean)</h4>
                        <p>Send an email to <a href="mailto:info@rsvpcaribbean.com">info@rsvpcaribbean.com</a> and let us know which session you would like to be a part of. Please send your skype ID. 
                        These are Jamaican times. You can also email us and request a skype chat at another time if these dates and times are not suitable for you.</p>
                        <div class="contact-table">
                            <div class="info-table">
                                <table class="table table-first">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Venue/Medium</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>January 10, 2017</td>
                                            <td>10am and 2:00pm</td>
                                            <td>Skype</td>
                                        </tr>
                                        <tr>
                                            <td>January 24, 2017</td>
                                            <td>10am and 2:00pm</td>
                                            <td>Skype</td>
                                        </tr>
                                        <tr>
                                            <td>February 14, 2017</td>
                                            <td>10am and 2:00pm</td>
                                            <td>Skype</td>
                                        </tr>
                                        <tr>
                                            <td>February 28, 2017</td>
                                            <td>10am and 2:00pm</td>
                                            <td>Skype</td>
                                        </tr>
                                        <tr>
                                            <td>March 14, 2017</td>
                                            <td>10am and 2:00pm</td>
                                            <td>Skype</td>
                                        </tr>
                                        <tr>
                                            <td>March 28, 2017</td>
                                            <td>10am and 2:00pm</td>
                                            <td>Skype</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p><b>*Every 2nd and 4th Tuesday from April to December at 10:00am and 2:00pm</b></p>
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
    <script src="js/core.min.js"></script> 
    <script src="js/script.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>