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
                            <li>About Us</li>
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
                            <h1><a name="overview"></a>Overview of RSVP</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    
                    <p>RSVP Caribbean Volunteers was conceptualized and developed based on the need for suitable, affordable and  safe needs-based 
                    programmes and projects for volunteers who wish to come to the Caribbean. RSVP Caribbean offers programmes and projects that are 
                    properly researched and make a meaningful difference. If you give of your time as a volunteer you need to know that it was worth it, 
                    you need to know that it was useful, you need to know that the company truly cares about the programmes, projects and communities that 
                    you work in and that is what RSVP Caribbean does - Respond...Discover...Change Lives.</p>
                    
                    <p><img class="img-thumbnail pull-right" src="images/about_us.jpg" alt="RSVP Caribbean Volunteers" style="width: 300px; margin: 10px;"> 
                    RSVP Caribbean Volunteers  is a registered company with its head office in Jamaica and sub-offices across the Caribbean. The focus is on 
                    the Caribbean because the socio-economic issues such as illiteracy; poor health services and facilities; inadequate access to, or, unaffordable health care; 
                    high unemployment; poverty; improper sanitation in schools and communities; lack of access to basic necessities (food, clothing and 
                    shelter); insufficient programmes for the elderly, the homeless and persons with disabilities and many other issues continue to be a 
                    challenge in Caribbean islands. As a volunteer you can accept the invitation from RSVP Caribbean to come and do your part to positively 
                    change the lives of persons through the various volunteer programmes - Respond...Discover...Change Lives.</p>
                    
                    <p>RSVP Caribbean Volunteers coordinates safe, affordable, high quality needs-based programmes and projects for overseas volunteers 
                    from any country who want to give of their time, skills and resources to their chosen location. The company manages and coordinates 
                    all aspects of the volunteer's experience including, but not limited to, providing the necessary information about the programmes, 
                    projects and accommodation as well as advice on the culture, travel and volunteering requirements. Ongoing support before arrival 
                    and while volunteers are in-country is an important part of the service provided. RSVP Caribbean Volunteers provides efficient service 
                    for the entire volunteering experience and takes the burden off the volunteers. Let us take the hassle out of your volunteering 
                    experience - why not RSVP today?</p>
                    
                    <p>The RSVP Caribbean Volunteers Team has over 20 years combined experience in volunteer placement and working with volunteers from 
                    over 40 countries. The team members have vast cultural exposure based on their extensive international travel experience; which includes 
                    the countries of our volunteers and, of course, the Caribbean nations that will facilitate the RSVP Caribbean Volunteers experience. As a 
                    result, RSVP Caribbean has first-hand knowledge of what it means to live and work in the Caribbean; which is coupled with our sound knowledge 
                    of the Caribbean's hospitality, travel and tourism industry. RSVP Caribbean is very passionate about helping others which is an extension 
                    of the fact that we believe 100% in what we do and, as a result, have been active in volunteering on various programmes and projects for 
                    many years.</p>
                    
                </div>
            </section>
            
            <!-- Our Approach -->
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>Our Approach</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    
                    <h4>Issues and Needs-Based Programmes and Projects</h4>
                    
                    <p>All programmes and projects are based on specific situations that have been highlighted through research, consultations and reports. RSVP Caribbean cannot fix everything but we
                    believe in doing our part to change lives.</p>
                    
                    <h4>Sustainable Development Goals</h4>
                    
                    <p>All programmes and projects are linked to the global sustainable development goals that many Caribbean islands are signatories to. These are specific local, national, regional and
                    international priorities that are critical in improving the lives of persons. Of the seventeen (17)  sustainable development goals, RSVP Caribbean through the work of its
                    volunteers will focus on seven (7) of these goals. These are <strong class="blue">no poverty, good  health and well-being, quality education, clean water and sanitation, decent work and economic growth,
                    sustainable cities and communities and climate action</strong>. Every action or task undertaken by a volunteer is connected to a framework for short, medium and long-term improvements.</p>
                    
                    <h4>Community Impact</h4>
                    
                    <p>The communities and partners are the greatest assets and beneficiaries. RSVP Caribbean believes in tangible outcomes and so the programmes and projects are developed with the sole purpose of
                    ensuring that over time there are visible differences within the populations that we serve. Our local partners are vital to this process and we recognize, appreciate and honour that.</p>
                    
                    <h4>Strategic Focus</h4>
                    
                    <p>RSVP will focus on one region – the Caribbean. This is important as it allows careful in-depth research, assessment, intervention and monitoring and evaluation of programmes and
                    projects within a specific context. The similarities and differences across the Caribbean allows for case studies, communities of practice and documenting best practices. This targeted approach
                    fosters better impact and use of resources.</p>
                    
                </div>
            </section>
            
            <section class="context-dark bg-gray-base">
              <!-- RD Parallax-->
              <div data-on="false" data-md-on="true" class="rd-parallax">
                <div data-speed="0.35" data-type="media" data-url="images/backgrounds/000016475829.jpg" class="rd-parallax-layer"></div>
                <div data-speed="0" data-type="html" class="rd-parallax-layer">
                  <div class="shell section-254">&nbsp;</div>
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