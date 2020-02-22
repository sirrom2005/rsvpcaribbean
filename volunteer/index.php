<?php 
include_once('../config/config.php'); 
$fileInfo = pathinfo(__FILE__);
$login = false;
//print_r($_SESSION); exit();
if(isset($_SESSION['_RaxDT.RSVP_SYS_ADMIN_TYPE']) && $_SESSION['_RaxDT.RSVP_SYS_ADMIN_TYPE'] == 2):
  $login = true;
  
  $data = array();
  
  if(isset($_GET['page']) && !empty($_GET['page'])):
  
    $mysqli = new mysqli(DBHOST, DBUSERNAME, DBPASSWORD, DBDATABASE);

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    
    $query = "SELECT * FROM view_volunteer_info WHERE id = '{$_GET['page']}' LIMIT 1";

    if ($result = $mysqli->query($query)) {
    
        /* fetch associative array */
        while ($row = $result->fetch_assoc())
            $data[] = $row;
    
        /* free result set */
        $result->free();
    }
    
  
  endif;
  
endif;
?>
<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">
<head>
    <!-- Site Title-->
    <title><?php echo isset($metaData[$fileInfo['filename']]['title'])? $metaData[$fileInfo['filename']]['title'] : $metaData['default']['title']; ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="images/favicon.ico" rel="icon" type="image/x-icon">
    <!-- Stylesheets-->
    <?php include_once('../layout/css.php'); ?>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
    <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using 
    an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
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
                            
                            <?php // TOP MENU ?>
                            
                            <ul id="rd-top-navbar" class="rd-navbar-nav pull-right">
                              <li><a href="https://www.facebook.com/rsvpcaribbean" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-facebook"></span></a></li>
                              <li><a href="https://www.twitter.com/rsvpcaribbean" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-twitter"></span></a></li>
                              <li><a href="https://www.linkedin.com/company/10657115" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-linkedin"></span></a></li>
                              <li><a href="https://www.instagram.com/rsvpcaribbean" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-instagram"></span></a></li>
                              <li><a href="https://www.snapchat.com/add/rsvpcaribbean" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-snapchat"></span></a></li>
                              <li><a href="mailto:info@rsvpcaribbean.com" style="text-transform: lowercase;"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-email"></span> info@rsvpcaribbean.com</a></li>
                              <li><a href="#"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-phone"></span> USA: 347 719 1901</a></li>
                              <li><a href="#"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-phone"></span> UK: 44 203 868 0208</a></li>
                              <li>
                                <a href="javascipt:void(null);"><strong>My Profile</strong></a>
                                <ul class="rd-navbar-dropdown">
                                  <?php if($login): ?>
                                  <li><a href="javascipt:void(null);">Personal Information</a></li>
                                  <li><a href="javascipt:void(null);">Change Password</a></li>
                                  <li><a href="javascipt:void(null);">My Programme / Project</a></li>
                                  <li><a href="javascipt:void(null);">Logout</a></li>
                                  <?php else: ?>
                                  <li><a href="javascipt:void(null);">Login</a></li>
                                  <?php endif; ?>
                                </ul>
                              </li>
                              <?php if($login): ?>
                              <li>
                                <a href="javascipt:void(null);"><strong>Media</strong></a>
                                <ul class="rd-navbar-dropdown">
                                    <li><a href="javascipt:void(null);">Photos</a></li>
                                    <li><a href="javascipt:void(null);">Videos</a></li>
                                    <li><a href="javascipt:void(null);">Newsletter</a></li>
                                </ul>
                              </li>
                              <li><a href="javascipt:void(null);"><strong>SiteMap</strong></a></li>
                              <?php endif; ?>
                            </ul>
                            
                            <?php // END TOP MENU ?>
                            
                        </div>
                        <menu></menu><!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                             <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <a href="/index.php" target="_blank"><img alt="RSVP Logo" src="/images/intense/logo-light.png" 
                                  style="height: 94px; width: 138px; margin-top: -35px; margin-left: -25px;"></a>
                            </div>
                        </div>
                        <div class="rd-navbar-menu-wrap">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <!--Navbar Brand Mobile-->
                                    <div class="rd-navbar-mobile-brand">
                                        <a href="/index.php" target="_blank"><img alt="RSVP Logo" src="/images/intense/logo-light.png" 
                                  style="height: 94px; width: 138px; margin-top: -35px; margin-left: -25px;"></a>
                                    </div>
                                </div><!-- RD Navbar Nav-->
                                
                                <?php // MAIN MENU ?>
                                
                                
                                <ul class="rd-navbar-nav">
                                  <li class="active"><a href="index.php" target="_blank"><span>Home</span></a></li>
                                  <?php if($login): ?>
                                  <li>
                                    <a href="javascript:void(null);"><span>General</span></a>
                                    <ul class="rd-navbar-dropdown">
                                      <li><a href="javascript:void(null);"><span class="text-middle">Terms and Conditions</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Fundraising</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Money Matters</span></a></li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(null);"><span>Invoice &amp; Payments</span></a>
                                    <ul class="rd-navbar-dropdown">
                                      <li><a href="javascript:void(null);"><span class="text-middle">View Invoice</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Make a Payment</span></a></li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(null);"><span>Pre-Departure</span></a>
                                    <ul class="rd-navbar-dropdown">
                                      <li><a href="javascript:void(null);"><span class="text-middle">Visa</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Flight</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Insurance</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Curriculum Vitae / Resume</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Medical Report</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Criminal Record Check</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Work Permit Exemption</span></a></li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(null);"><span>Programme and Project</span></a>
                                    <ul class="rd-navbar-dropdown">
                                      <li><a href="javascript:void(null);"><span class="text-middle">Volunteer Manual</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Accommodation</span></a></li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="javascript:void(null);"><span>Contact Us</span></a>
                                    <ul class="rd-navbar-dropdown">
                                      <li><a href="javascript:void(null);"><span class="text-middle">Pre-Departure</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">In Destination</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Upon Return Home</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Emergency Contact</span></a></li>
                                      <li><a href="javascript:void(null);"><span class="text-middle">Send a Question</span></a></li>
                                    </ul>
                                  </li>
                                  <?php endif; ?>
                                  <li><a href="/index.php" target="_blank"><span>Visit Web Site</span></a></li>
                                </ul>
                                
                                <?php // END MAIN MENU ?>
                                
                                
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
                        <span class="icon-lg mdi mdi-account-multiple icon icon-white"></span>
                    </div>
                    <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Welcome: <?php echo $data[0]['firstname'] . " " . $data[0]['lastname']; ?></span></h2>
                    </div>
                    <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                      <!-- ul class="list-inline list-inline-dashed p">
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                      </ul -->
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
            
            <?php if(!$login): ?>
            <section>
              <div class="shell">
                <div class="range">
                  <div class="section-110 section-cover range range-xs-center range-xs-middle">
                    <div class="cell-xs-8 cell-sm-6 cell-md-4">
                      <div class="panel section-34 section-sm-41 inset-left-20 inset-right-20 inset-sm-left-20 inset-sm-right-20 inset-lg-left-30 inset-lg-right-30 bg-white shadow-drop-md">
                        <!-- Icon Box Type 4--><span class="icon icon-circle icon-bordered icon-lg icon-default mdi mdi-account-multiple-outline"></span>
                        <div>
                          <div class="offset-top-24 text-darker big text-bold">Login to your account</div>
                          <p class="text-extra-small text-dark offset-top-4">Enter your credentials below</p>
                        </div>
                        <!-- RD Mailform-->
                        <form action="javascript:void(null);" data-form-output="form-output-global" data-form-type="contact" method="post" class="text-left offset-top-30">
                          <div class="form-group">
                            <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-account-outline"></span></span>
                              <input id="login-your-login" placeholder="Your Login" type="text" name="login" data-constraints="@Required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group offset-top-20">
                            <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-lock-open-outline"></span></span>
                              <input id="login-your-password" placeholder="Your Password" type="password" name="password" data-constraints="@Required" class="form-control">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-sm btn-icon btn-block btn-primary offset-top-20">Sign In <span class="icon mdi mdi-arrow-right-bold-circle-outline"></span></button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <?php endif; ?>
            
            <?php if($login): ?>
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-5 text-lg-left">
                            <h1>{Titile}</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    
                    <p>{content}</p>
                    
                </div>
            </section>
            <?php endif; ?>
            
        </main><!-- Page Footer-->
        <!-- Default footer-->
        <?php include('../layout/footer.php'); ?>
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
    <script src="/js/core.min.js"></script> 
    <script src="/js/script.js"></script>
</body>
</html>