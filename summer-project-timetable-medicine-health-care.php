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
                            <li><a href="programmeandproject.php">Projects</a></li>
                            <li><a href="summer.php">Summer Projects</a></li>
                            <li>Summer Project Timetable - Medicine and Health Care</li>
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
                            <h1>Summer Project Timetable - Medicine and Health Care</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                                       
                    <p>This is an example of the schedule for the Medicine and Health Care Summer Project. This is subject to change and volunteers are 
                    provided with updates as necessary. If you have any questions send an email to <a href="mailto:info@rsvpcaribbean.com">info@rsvpcaribbean.com</a>.</p>
                    
                    <h2>Week 1</h2>
                    
                    <table class="table rsvp">
                     <thead>
                     <tr>
                      <th>Time</th>
                      <th>Sunday</th>
                      <th>Monday</th>
                      <th>Tuesday</th>
                      <th>Wednesday</th>
                      <th>Thursday</th>
                      <th>Friday</th>
                      <th>Saturday</th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                      <th>7:00am - 8:00am</th>
                      <td>Arrival</td>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                     </tr>
                     <tr>
                      <th>8:00am - 10:00am</th>
                      <td>Arrival</td>
                      <td>Tour</td>
                      <td>Rotations at Health Centre</td>
                      <td>Medical Workshop</td>
                      <td>Rotations at Health Centre</td>
                      <td>Medical Outreach: School</td>
                      <td>Travel to Ocho Rios</td>
                     </tr>
                     <tr>
                      <th>10:00am - 11:00am</th>
                      <td>Arrival</td>
                      <td>Welcome and Orientation</td>
                      <td>Rotation at Health Centre</td>
                      <td>Medical Workshop</td>
                      <td>Rotation at</td>
                      <td>Medical Outreach: School</td>
                      <td>Beach</td>
                     </tr>
                     <tr>
                      <th>11:00am - 12:00pm</th>
                      <td>Arrival</td>
                      <td>Presentation on Jamaica</td>
                      <td>Rotations at Health Centre</td>
                      <td>Medical Workshop</td>
                      <td>Rotations at Health Centre</td>
                      <td>Medical Outreach: School</td>
                      <td>Beach</td>
                     </tr>
                     <tr>
                      <th>12:00pm - 1:00pm</th>
                      <td>Arrival</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                     </tr>
                     <tr>
                      <th>1:00pm - 2:00pm</th>
                      <td>Arrival</td>
                      <td>Introduction to volunteer placement</td>
                      <td>First Aid Training</td>
                      <td>Medical Outreach: School</td>
                      <td>First Aid Training</td>
                      <td>Tour of Hospital</td>
                      <td>Craft market</td>
                     </tr>
                     <tr>
                      <th>2:00pm - 4:00pm</th>
                      <td>Arrival</td>
                      <td>"Getting to Know You" session</td>
                      <td>First Aid Training</td>
                      <td>Medical Outreach: School</td>
                      <td>First Aid Training</td>
                      <td>Question and Answer with Doctor &amp; Nurse</td>
                      <td>Sightseeing and tour</td>
                     </tr>
                     <tr>
                      <th>4:00pm - 5:00pm</th>
                      <td>Arrival</td>
                      <td>Free Time</td>
                      <td>Free Time</td>
                      <td>Travel and Free Time</td>
                      <td>Free Time</td>
                      <td>Free Time</td>
                      <td>Travel to host family</td>
                     </tr>
                     <tr>
                      <th>5:00pm - 7:00pm</td>
                      <td>Dinner</td>
                      <td>Dinner</td>
                      <td>Patois Class</td>
                      <td>Culture Class</td>
                      <td>Reggae Dance Class</td>
                      <td>Free Time</td>
                      <td>Travel and dinner</td>
                     </tr>
                     <tr>
                      <th>7:00pm - 8:00pm</th>
                      <td>&nbsp;</td>
                      <td>Travel to host family and dinner</td>
                      <td>Travel to host family and dinner</td>
                      <td>Travel to host family and dinner</td>
                      <td>Travel to host family and dinner</td>
                      <td>Travel to host family and dinner</td>
                      <td>&nbsp;</td>
                     </tr>
                     </tbody>
                    </table>
                    
                    <h2>Week 2</h2>
                    
                    <table class="table rsvp">
                     <thead> 	
                     <tr>
                      <th>Time</th>
                      <th>Sunday</th>
                      <th>Monday</th>
                      <th>Tuesday</th>
                      <th>Wednesday</th>
                      <th>Thursday</th>
                      <th>Friday</th>
                      <th>Saturday</th>
                     </tr>
                     <thead>
                     <tbody>
                     <tr>
                      <th>7:00am - 8:00am</th>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                      <td>Pickup from host family</td>
                      <td>Departure</td>
                      </td>
                     </tr>
                     <tr>
                      <th>8:00am - 10:00am</th>
                      <td>Travel to YS Falls</td>
                      <td>Rotations at Health Centre</td>
                      <td>Medical Outreach: Community</td>
                      <td>Medical Outreach: Community</td>
                      <td>First Aid Training</td>
                      <td>Neurology Workshop</td>
                      <td>Departure</td>
                     </tr>
                     <tr>
                      <th>10:00am - 11:00am</th>
                      <td>YS Falls</td>
                      <td>Rotations at Health Centre</td>
                      <td>Medical Outreach: Community</td>
                      <td>Medical Outreach: Community</td>
                      <td>First Aid Training</td>
                      <td>Internal Medicine Workshop</td>
                      <td>Departure</td>
                     </tr>
                     <tr>
                      <th>11:00am - 12:00pm</th>
                      <td>YS Falls</th>
                      <td>Rotations at Health Centre</td>
                      <td>Medical Outreach: Community</td>
                      <td>Medical Outreach: Community</td>
                      <td>First Aid Training</td>
                      <td>Internal Medicine Workshop</td>
                      <td>Departure</td>
                     </tr>
                     <tr>
                      <th>12:00pm - 1:00pm</th>
                      <td>Lunch</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                      <td>Lunch</td>
                     </tr>
                     <tr>
                      <th>1:00pm - 2:00pm</th>
                      <td>Travel</td>
                      <td>Paediatrics Workshop</td>
                      <td>Medical Outreach: Community</td>
                      <td>Medical Outreach: Community</td>
                      <td>Visit to Health Care Facility</td>
                      <td>Closing Event</td>
                      <td>Departure</td>
                     </tr>
                     <tr>
                      <th>2:00pm - 4:00pm</th>
                      <td>Lovers' Leap</td>
                      <td>General Surgery Workshop</td>
                      <td>Medical Outreach: Community</td>
                      <td>Medical Outreach: Community</td>
                      <td>Visit to Health Care Facility</td>
                      <td>Free Time</td>
                      <td>Departure</td>
                     </tr>
                     <tr>
                      <th>4:00pm - 5:00pm</th>
                      <td>Travel to host family</td>
                      <td>Free Time</td>
                      <td>Travel and Free Time</td>
                      <td>Travel and Free Time</td>
                      <td>Travel and Free Time</td>
                      <td>Free Time</td>
                      <td>Departure</td>
                     </tr>
                     <tr>
                      <th>5:00pm - 7:00pm</th>
                      <td>Travel and Dinner</td>
                      <td>Activities in the Town</td>
                      <td>Cooking Class</td>
                      <td>Free Time</td>
                      <td>Karaoke</td>
                      <td>Free Time</td>
                      <td>Departure</td>
                     </tr>
                     <tr>
                      <th>7:00pm 8:00pm</th>
                      <td>&nbsp;</td>
                      <td>Travel to host family and dinner</td>
                      <td>Travel to host family and dinner</td>
                      <td>Travel to host family and dinner</td>
                      <td>Travel to host family and dinner</td>
                      <td>Travel to host family and dinner</td>
                      <td>&nbsp;</td>
                     </tr>
                     </tbody>
                    </table>
                    
                </div>
            </section>
        </main>
		<!-- Page Footer-->
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