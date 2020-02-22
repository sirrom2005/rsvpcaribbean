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
                            <li>RSVP Services</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
			<!-- RSVP SERVICES -->
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-5 text-lg-left">
                            <h1>RSVP Services</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <section class="nxp">
                        <!-- RD Parallax-->
                        <div>
                            <div>
                                <div class="shell">
                                    <div class="range range-xs-center">
                                        <div class="cell-xs-10 cell-sm-11 cell-lg-12">
                                            <div class="range range-xs-center">
                                                <div class="cell-sm-6 cell-lg-4">
                                                    <div>
                                                        <h4 class="offset-top-30 text-bold"><a data-toggle="collapse" href="#demo">Individual Volunteering Service</a></h4>
                                                        <div class="collapse"id="demo">
                                                            <p class="inset-right-7p">You have thought about giving back to those in need, exploring the 
                                                            Caribbean and making sure that you live – not just exist. You have wondered what it would be like to
                                                            live for a while in a developing country and experience the real situations that exist, not just
                                                            what is advertised as the tourist product. RSVP Caribbean offers the solution to these wondering
                                                            thoughts and will coordinate a one of a kind, safe and affordable volunteering experience for you.
                                                            The Individual Volunteering Service is a trip for a person who will be travelling alone, or with less than 5
                                                            friends, to volunteer in the Caribbean. You can choose from any of the advertised programmes. Volunteers can
                                                            select a programme based on their interests, skills and background. Dependent on your date of arrival,
                                                            other volunteers will already be in-country and there is always 24/7 staff support. Please see 
                                                            <a href="information.php">Programme and Project Information</a> for  full list of offerings.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell-sm-6 cell-lg-4">
                                                <div>
                                                        <h4 class="offset-top-30 text-bold"><a data-toggle="collapse" href="#demo2">Group Volunteering Service</a></h4>
                                                        <div class="collapse" id="demo2">
                                                            <p class="inset-right-7p">If you want to experience the Caribbean with your friends, colleagues
                                                            or family, we have the right projects just for you. Through our Group Volunteering Service we
                                                            organize trips for groups such as universities, churches, community groups, sports teams, service
                                                            learning groups (faculty-led or student-led), medical campaigns, friends, families and any other group
                                                            that wants to volunteer in the Caribbean. You can choose from one of the advertised projects. Please
                                                            see <a href="group-trip.php">Group Trip Projects</a> for full list of offerings. You can also tell us about
                                                            your specific needs and we will tailor a project just for your group. RSVP Caribbean will work with you to
                                                            determine the specific objectives of your trip and then prepare a timetable which will be sent to the
                                                            group leader prior to arrival. You don’t have to do it alone, get your group together and 
                                                            <a href="contact-us.php">Contact Us</a> for more details.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell-sm-6 cell-lg-4">
                                                <div>
                                                        <h4 class="offset-top-30 text-bold"><a data-toggle="collapse" href="#demo3">Internship and Dissertation Service</a></h4>
                                                        <div class="collapse" id="demo3">
                                                            <p class="inset-right-7p">The Caribbean is an interesting and exciting place to earn your university credits;
                                                            volunteering in the Caribbean provides the opportunity to do just that. The Caribbean offers you a different
                                                            perspective on a number of issues, as it is made up of developing countries. You will see, observe and learn about issues
                                                            that you may never see in your country. Our systems, procedures, resources and ability to creatively use what we have available
                                                            is a must see. Don’t do your internship and dissertation in your country – what fun is that? Do it in the Caribbean
                                                            with RSVP. If you are a volunteer who has specific requirements related to your university studies and would like to
                                                            achieve these objectives on a project in the Caribbean then please see <a href="internship.php">Internship and
                                                            Dissertation Projects</a> and <a href="contact-us.php">Contact Us</a> today. A full description of the internship is
                                                            required which will be passed on to the partner agency. Any associated forms which must be completed need to
                                                            be sent before acceptance so we can determine if we have a suitable internship for you.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell-sm-6 cell-lg-4">
                                                <div>
                                                        <h4 class="offset-top-30 text-bold"><a data-toggle="collapse" href="#demo4">Summer Volunteering Service</a></h4>
                                                        <div class="collapse" id="demo4">
                                                            <p class="inset-right-7p">No-one wants to sit at home for the summer. Everyone wants to do something fun, exciting and
                                                            meaningful. RSVP Caribbean offers carefully tailored projects for high school students (16-18 years old) who want to
                                                            volunteer during the summer (June – August). As a volunteer you will work on projects that will change your life and the
                                                            lives of persons that you will work with. You will leave the Caribbean country you have selected with a sense of purpose
                                                            and fulfillment. This project is designed to provide ongoing support to volunteers while in-country as you are fully
                                                            chaperoned and parents and guardians can take comfort in knowing that that their children will receive special attention. RSVP
                                                            Caribbean will prepare a timetable which will be sent to you and your parents prior to arrival. Please see 
                                                            <a href="summer.php">Summer Projects</a> for full list of offerings. <a href="apply.php">Apply Now</a> –
                                                            don't be left out of this incredible experience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell-sm-6 cell-lg-4">
                                                <div>
                                                        <h4 class="offset-top-30 text-bold"><a data-toggle="collapse" href="#demo5">Spring Break Volunteering Service</a></h4>
                                                        <div class="collapse" id="demo5">
                                                            <p class="inset-right-7p">Do something different for spring break. Do something that will allow you to
                                                            experience life in another country while helping those in need. If you are a university student who wants
                                                            to use your spring break in a productive way, then RSVP Caribbean has the right project for you. These short-term
                                                            projects are customized to suit the limited timeframe but also ensure that the volunteering experience is
                                                            mutually beneficial. Please see <a href="spring.php">Spring Break Projects</a> for full list of
                                                            offerings. <a href="apply.php">Apply Now</a> – don't be left out of this incredible experience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell-sm-6 cell-lg-4">
                                                <div>
                                                        <h4 class="offset-top-30 text-bold"><a data-toggle="collapse" href="#demo6">Corporate Volunteering Service</a></h4>
                                                        <div class="collapse" id="demo6">
                                                            <p class="inset-right-7p">Our corporate volunteering service is designed for corporate teams
                                                            to increase innovation, improve leadership skills, encourage a culture of giving and contribute to sustainable
                                                            development. The Corporate Volunteering Service experience improves team building
                                                            skills, bolsters group dynamics, supports the development of problem-solving skills, fosters
                                                            resilience, highlights the importance of giving and promotes corporate social responsibility. It
                                                            allows for a greater understanding of cross-cultural issues, stimulates creativity, challenges leaders
                                                            and the team to operate outside of their comfort level and contributes to a shared learning experience.
                                                            Employers can send a group of their employees to volunteer in the Caribbean for short periods so that the
                                                            activity does not affect productivity. Employers can also use this as a performance incentive whereby
                                                            employees are awarded a trip to the Caribbean to volunteer and enjoy the culture. Please see <a href=
                                                            "corporate.php">Corporate Projects</a>. You can also tell us about your specific needs and we will
                                                            tailor a project just for your group. RSVP Caribbean will work with you to determine the specific objectives
                                                            of your trip and then prepare a timetable which will be sent to the group leader prior to arrival.
                                                            <a href="contact-us.php">Contact Us</a> for more details and we will coordinate a once  in a lifetime
                                                            experience for your team.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell-sm-6 cell-lg-4">
                                                <div>
                                                        <h4 class="offset-top-30 text-bold"><a data-toggle="collapse" href="#demo7">Professional Volunteering Service</a></h4>
                                                        <div class="collapse" id="demo7">
                                                            <p class="inset-right-7p">If you have been working in your field but need to experience how
                                                            others in your field operate in a developing country then RSVP Caribbean has just the project for you.
                                                            Professional volunteering allows for a mutual learning experience. You bring your skills and expertise to
                                                            the partner agency but you also learn from them. Some processes may be similar, others quite different but
                                                            in the end, all the persons involved would have benefited from the process. So if you are qualified and
                                                            have been working in your field for at least one year and would like to give of your time, skills and
                                                            expertise on a programme in the Caribbean why not volunteer with us? Please see <a href=
                                                            "professional.php">Professional Projects</a> for
                                                            more details.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell-sm-6 cell-lg-4">
                                                <div>
                                                        <h4 class="offset-top-30 text-bold"><a data-toggle="collapse" href="#demo8">Language Lesson Service</a></h4>
                                                        <div class="collapse" id="demo8">
                                                            <p class="inset-right-7p">Do you want to improve your English while in the Caribbean?
                                                            Then choosing the language lesson service is just for you. Language immersion provides,
                                                            possibly, the very best way to improve your use of a second language; the immersion is
                                                            inevitable if you visit a Caribbean country. English is the first language of most Caribbean
                                                            islands and as such, we are able to teach written and conversational English very well. A trained teacher
                                                            will facilitate these structured lessons with volunteers. If you would rather learn
                                                            Patois which is the dialect of Jamaica then you can – yeah mon (yes you can)! A competent Patois
                                                            teacher will facilitate these structured lessons with volunteers. Please see <a href=
                                                            "language-lesson.php">Language  Lessons</a> for more details.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell-sm-10 cell-lg-4">
                                                <div>
                                                        <h4 class="offset-top-30 text-bold"><a data-toggle="collapse" href="#demo9">Customized Volunteering Service</a></h4>
                                                        <div class="collapse" id="demo9">
                                                            <p class="inset-right-7p">If you have checked out the programmes and projects but
                                                            you are not seeing anything of interest to you please <a href="contact-us.php">Contact Us</a>
                                                            and let us know. If you have a particular interest then complete the <a href="contact-us.php">Enquiry
                                                            Form</a> and our team at RSVP Caribbean will research your interest and let you know if it is
                                                            possible. If it's  possible we will do everything to make it happen.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>    
            
            <?php /*
            <section class="context-dark bg-gray-base">
              <!-- RD Parallax-->
              <div data-on="false" data-md-on="true" class="rd-parallax">
                <div data-speed="0.35" data-type="media" data-url="images/backgrounds/76496956.jpg" class="rd-parallax-layer"></div>
                <div data-speed="0" data-type="html" class="rd-parallax-layer">
                  <div class="shell section-254">&nbsp;</div>
                </div>
              </div>
            </section>
            */ ?>
            
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