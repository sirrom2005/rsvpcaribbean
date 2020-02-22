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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css">
    <style type="text/css">
    .qtip-content{ font-size: 12px; }
    .qtip-content ul{
      margin: 0;
      padding: 0 0 0 10px; 
    }
    .qtip-tipsy { background: #0179D2; }
    .hasTooltip{ display: inline; }
    </style>
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
                    <h2><span class="big">Programmes and Projects</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="programmeandproject.php">Programmes and Projects</a></li>
                            <li>Programme and Project Information</li>
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
                            <h1>Programme and Project Information</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                        <div class="programme-infor">
                            <p>This information relates to all services (individual, group, internship and dissertation, professional, summer, spring break, corporate, English lessons, patois lessons and customized). It
                            provides information on the programmes and projects, how it relates to the global sustainable development goals, the age requirements, programme and project requirements, available dates and
                            minimum stay. You can also <a href="contact-us.php">Contact Us</a> at <a href="mailto:info@rsvpcaribbean">info@rsvpcaribbean</a> if you have any questions.</p>
                        </div>
                        <div class="info-table projects">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Programmes and Projects</th>
                                        <th>Global Sustainable Development Goal</th>
                                        <th>Age Requirement</th>
                                        <th>Programme and Project Requirements</th>
                                        <th>Offered</th>
                                        <th>Minimum Stay</th>
                                        <th>Destinations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="icon icon-rect icon-darker-filled fa fa-child"></i> Child Care and Protection Programme</td>
                                        <td>Good Health and Well-Being</td>
                                        <td>16+</td>
                                        <td>No specific requirement for some orphanages and day care centre. Volunteers with interest, studies or  experience in social 
                                        work, psychology, sociology or any related area are suitable.</td>
                                        <td>All year round</td>
                                        <td>1 week</td>
                                        <td>Jamaica, Grenada, St. Lucia</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon icon-rect icon-darker-filled mdi mdi-human-male-female"></i> Elderly Care Programme</td>
                                        <td>Good Health and Well-Being</td>
                                        <td>16+</td>
                                        <td>No specific requirement for some partners.<br />
                                        Volunteers with interest, studies or experience in social work, psychology, sociology or any related area are suitable.</td>
                                        <td>All year round</td>
                                        <td>1 week</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-book"></i> Teaching Programme</td>
                                        <td>Quality Education</td>
                                        <td>16+</td>
                                        <td>No specific requirement for teaching in early childhood, primary or high school. However, a good command of English is required. 
                                        Volunteers with interest, studies or experience in teaching, early childhood development or any related area are suitable.</td>
                                        <td>2nd week in January – 2nd week in June<br>
                                        2nd week in September – 1st week in December<br>
                                        Due to school holidays</td>
                                        <td>2 weeks</td>
                                        <td>Jamaica, Grenada, St. Lucia</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-h-square"></i> Medicine and Health Care Programme</td>
                                        <td>Good Health and Well-Being</td>
                                        <td>18+</td>
                                        <td>No specific requirement for pre-medical volunteers. Volunteers will only be able to observe.<br>
                                        Medical students will also only observe and any practical work will be at the discretion of the partner.<br>
                                        Professionals will be asked to register to do practical work, to observe only no registration is required. RSVP
                                        Caribbean will guide you through the simple registration process.</td>
                                        <td>All year round</td>
										                    <td>2 weeks</td>
                                        <td>Jamaica, Grenada, St. Lucia</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-user-md"></i> Nursing Programme</td>
                                        <td>Good Health and Well-Being</td>
                                        <td>18+</td>
                                        <td>No specific requirement for pre-nursing volunteers. Volunteers will only be able to observe.<br>
                                        Nursing students will also only observe and any practical work will be at the discretion of the partner.<br>
                                        Professionals will be asked to register to do practical work, to observe only no registration is required. RSVP 
                                        Caribbean will guide you through the simple registration process.</td>
                                        <td>All year round</td>
										                    <td>2 weeks</td>
                                        <td>Jamaica, Grenada, St. Lucia</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon icon-rect icon-darker-filled"><img src="images/icon_physiotherapy.png" alt=""></i> Physiotherapy Programme</td>
                                        <td>Good Health and Well-Being</td>
                                        <td>18+</td>
                                        <td>Volunteers should have completed at least one year of physiotherapy studies (observation only), over two years any practical work will be at the discretion of partners.<br>
                                        Professionals will be asked to register with to do practical work, to observe only no registration is required. 
                                        RSVP Caribbean will guide you through the simple registration process.</td>
                                        <td>All year round</td>
                                        <td>2 weeks</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon icon-rect icon-darker-filled"><img src="images/icon_dentistry.png" alt=""></i> Dentistry Programme</td>
                                        <td>Good Health and Well-Being</td>
                                        <td>18+</td>
                                        <td>Volunteers should have completed at least one year of physiotherapy studies (observation only), over two years any practical work will be at the discretion of partners.<br>
                                        Professionals will be asked to register with to do practical work, to observe only no registration is required. 
                                        RSVP Caribbean will guide you through the simple registration process.</td>
                                        <td>All year round</td>
                                        <td>2 weeks</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-soccer-ball-o"></i> Sports Programme</td>
                                        <td>Quality Education</td>
                                        <td>16+</td>
                                        <td>No specific requirement for teaching in early childhood, primary or high school. However, a good command of English is required. 
                                        Volunteers with interest, studies or experience in teaching, sport development, sports medicine or any related areas are suitable.</td>
                                        <td>2nd week in January – 2nd week in June<br>
                                        2nd week in September – 1st week in December<br>
                                        Due to school holidays</td>
                                        <td>2 weeks</td>
                                        <td>Jamaica, Grenada, St. Lucia</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-medkit"></i> Humanitarian Programme</td>
                                        <td>No Poverty</td>
                                        <td>16+</td>
                                        <td>No specific requirement.<br>
                                        Volunteers with interest, studies or experience in building, engineering, construction, 
                                        architecture, renovations, painting, carpentry, and plumbing are most suitable.</td>
                                        <td>All year round</td>
                                        <td>1 week</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-recycle"></i> Environmental Awareness and Protection Programme</td>
                                        <td>Clean Water and Sanitation</td>
                                        <td>18+</td>
                                        <td>Volunteers with experience and studies in marine biology, waste water management, environmental education, watershed management, tropical ecology,
                                        climate change adaptation, sustainable development or any other related fields are most suitable.</td>
                                        <td>All year round</td>
                                        <td>2 weeks</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-briefcase"></i> Entrepreneurship Programme</td>
                                        <td>Decent Work and Economic Growth</td>
                                        <td>18+</td>
                                        <td>Volunteers with experience and studies in business development, entrepreneurship, accounting, finance, marketing, sales, human resource
                                        management or any other related fields are suitable.</td>
                                        <td>All year round</td>
                                        <td>4 weeks</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon icon-rect icon-darker-filled"><img src="images/icon_youth.png" alt=""></i> Youth and Community Development Programme</td>
                                        <td>Sustainable Cities and Communities</td>
                                        <td>18+</td>
                                        <td>No specific requirement, volunteers who want to learn more about community development in the Caribbean and who want to contribute to changing lives.</td>
                                        <td>All year round</td>
                                        <td>2 weeks</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-heart"></i> Health and Wellness Retreat Programme </td>
                                        <td>Good Health and Well-Being</td>
                                        <td>16+</td>
                                        <td>No specific requirements, volunteers must require special intervention if suffering from psychological, mental or health issues.</td>
                                        <td>
                                          <div class="hasTooltip"><a href="#">View dates</a></div>
                                          <div style="display: none;">
                                            <ul>
                                              <li>September 1-30, 2016</li>
                                              <li>November 1-30, 2016</li>
                                              <li>January 1-31, 2017</li>
                                              <li>March 1-31, 2017</li>
                                              <li>May 1-31, 2017</li>
                                              <li>July 1-31, 2017</li>
                                              <li>September 1-30, 2017</li>
                                              <li>November 1-30, 2017</li>
                                            </ul>
                                          </div>
                                          (Minimum 15 persons required in each group)
                                        </td>
                                        <td>4 weeks</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-music"></i> Reggae Music and Dance Project </td>
                                        <td>Sustainable Cities and Communities</td>
                                        <td>18+</td>
                                        <td>No specific requirement. Volunteers who want to learn more about the reggae music are encouraged to apply.<br><br>
                                        Volunteers with interest, experience and studies music, in cultural development, history, literature or any related areas are suitable.</td>
                                        <td>All year round</td>
                                        <td>1 week</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon icon-rect icon-darker-filled"><img src="images/icon_lion.png" alt=""></i> Rastafarian Culture Project</td>
                                        <td>Sustainable Cities and Communities</td>
                                        <td>18+</td>
                                        <td>No specific requirement. Volunteers who want to learn more about the Rastafarian culture are encouraged to apply.<br><br>
                                        Volunteers with interest, experience and studies in cultural development, history, literature or any related areas are suitable.</td>
                                        <td>All year round</td>
                                        <td>1 week</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-graduation-cap"></i> Internship and Dissertation Projects<br><br>
                                        Child Care and Protection, Teaching, Medicine and Health Care, Nursing, Physiotherapy, Dentistry, Sports, Humanitarian, Environmental Awareness and Protection,
                                        and Rastafarian Culture</td>
                                        <td>Good Health and Well-Being<br>
                                        No Poverty<br>
                                        Quality Education<br>
                                        Sustainable Cities and Communities<br>
                                        Climate Action</td>
                                        <td>18+</td>
                                        <td>Completed at least one year of
                                        study in relevant field</td>
                                        <td>See specific programme details</td>
                                        <td>See specific programme details</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon icon-rect icon-darker-filled"><img src="images/icon_scroll.png" alt=""></i> Professional Projects<br><br>
                                        Child Care and Protection, Teaching, Medicine and Health Care, Nursing, Physiotherapy, Dentistry, Sports, Humanitarian, Environmental Awareness and Protection,
                                        and Rastafarian Culture</td>
                                        <td>Good Health and Well-Being<br>
                                        No Poverty<br>
                                        Quality Education<br>
                                        Sustainable Cities and Communities</td>
                                        <td>21+</td>
                                        <td>At least a Bachelor's Degree and
                                        one year work experience relevant to
                                        the programme</td>
                                        <td>See specific programme details</td>
                                        <td>See specific programme details</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-sun-o"></i> Summer Projects<br><br>Child Care and Protection, Humanitarian, Sports and Medicine and Health Care</td>
                                        <td>Good Health and Well-Being<br>No Poverty<br>Quality Education</td>
                                        <td>16-18</td>
                                        <td>Please see <a href="summer.php">Summer Project</a></td>
                                        <td>
                                          <div class="hasTooltip"><a href="#">View dates</a></div>
                                          <div style="display: none;">
                                            <p><b>Summer 2017</b></p>
                                            <p><b>Child Care and Protection</b></p>
                                            <ul>
                                              <li>Sunday, June 11, 2017 – Saturday, June 24, 2017</li>
                                              <li>Sunday, July 2, 2017 – Saturday, July 15, 2017</li>
                                              <li>Sunday, July 16, 2017 – Saturday, July 29, 2017</li>
                                            </ul>
                                            <p><b>Medicine and Health Care</b></p>
                                            <ul>
                                              <li>Sunday, June 11, 2017 – Saturday, June 24, 2017</li>
                                              <li>Sunday, July 2, 2017 – Saturday, July 15, 2017</li>
                                              <li>Sunday, July 16, 2017 – Saturday, July 29, 2017</li>
                                            </ul>
                                            <p><b>Humanitarian</b></p>
                                            <ul>
                                              <li>Sunday, July 2, 2017 – Saturday, July 15, 2017</li>
                                              <li>Sunday, July 16, 2017 – Saturday, July 29, 2017</li>
                                            </ul>
                                            <p><b>Sports</b></p>
                                            <ul>
                                              <li>Sunday, July 9, 2017 –Saturday, July 22, 2017</li>
                                              <li>Sunday, August 6, 2017 – Saturday August 19, 2017</li>
                                            </ul>
                                          </div>
                                        </td>
                                        <td>See specific programme details</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled mdi mdi-beach"></i> Spring Break Projects<br><br />Child Care and Protection, Medicine and Health Care and Humanitarian</td>
                                        <td>Good Health and Well-Being<br>No Poverty</td>
                                        <td>16+</td>
                                        <td>Please see <a href="spring.php">Spring Break Project</a></td>
                                        <td>
                                          <div class="hasTooltip"><a href="#">View dates</a></div>
                                          <div style="display: none;">
                                            <p><b>Spring Break 2017</b></p>
                                            <ul>
                                              <li>Sunday, February 26, 2017 – Saturday, March 4, 2017</li>
                                              <li>Sunday, March 5 2017 – Saturday March 11, 2017</li>
                                              <li>Sunday, March 12, 2017 – Saturday March 18, 2017</li>
                                            </ul>
                                            <p><b>Spring Break 2018</b></p>
                                            <ul>
                                              <li>Sunday, February 25, 2018 – Saturday, March 3, 2018</li>
                                              <li>Sunday, March 4 2018 – Saturday March 10, 2018</li>
                                              <li>Sunday, March 11, 2018 – Saturday March 17, 2018</li>
                                            </ul>
                                          </div>
                                        </td>
                                        <td>See specific programme details</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-group"></i> Group Trip Projects<br><br>
                                        Child Care and Protection, Teaching, Medicine and Health Care, Nursing, Sports, Humanitarian
                                        and Rastafarian Culture</td>
                                        <td>Good Health and Well-Being<br>
                                        No Poverty<br>
                                        Quality Education<br>
                                        Sustainable Cities and Communities</td>
                                        <td>16+</td>
                                        <td>Please see <a href="group-trip.php">Group Trip </a></td>
                                        <td>You select your dates and we will
                                        try our best to make it happen</td>
                                        <td>See specific programme details</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-black-tie"></i> Corporate Projects
                                        <br><br>
                                        Child Care and Protection, Teaching,
                                        Humanitarian, Rastafarian Culture, Sports,
                                        Medicine and Health Care, Nursing, Holistic Retreat
                                        Projects</td>
                                        <td>Good Health and Well-Being<br>
                                        No Poverty<br>
                                        Quality Education<br>
                                        Sustainable Cities and Communities</td>
                                        <td>20+</td>
                                        <td>At least one year work
                                        experience</td>
                                        <td>You select your dates and we will
                                        try our best to make it happen</td>
                                        <td>See specific programme details</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><a name="language_lesson"></a><i class="icon  icon-rect icon-darker-filled fa fa-comment"></i> Language Lesson Project
                                       <br></td>
                                        <td>Quality Education</td>
                                        <td>16+</td>
                                        <td>No requirements for English, a
                                        basic command of the English Language
                                        for patois</td>
                                        <td>All year round</td>
                                        <td>2 weeks</td>
                                        <td>Jamaica</td>
                                    </tr>
                                    <tr>
                                        <td><i class="icon  icon-rect icon-darker-filled fa fa-gear"></i> Customized Project
                                        <br></td>
                                        <td>Based on specific request</td>
                                        <td>21+</td>
                                        <td>Based on specific request</td>
                                        <td>Based on specific request</td>
                                        <td>Based on specific request</td>
                                        <td>Jamaica</td>
                                    </tr>
                                </tbody>
                            </table>
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
    <script src="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
    <script>
    $document.ready(function(){
      $('.hasTooltip').each(function() { // Notice the .each() loop, discussed below
          $(this).qtip({
              content: { text: $(this).next('div') }, 
              style: { classes: 'qtip-tipsy' }, 
              position: {
                  my: 'left middle', 
                  at: 'bottom right'
              }
          });
      });
    });
    </script>
</body>
</html>