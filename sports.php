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
                            <li>Sports Programme</li>
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
                        <div class="cell-lg-5 text-lg-left">
                            <h1>Sports Programme</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                            <ul class="custom-item-list">
                                <li><b>Location:</b> Grenada, Jamaica, St.  Lucia</li>
                                <li><b>Types of Partners:</b> Early Childhood,  Primary, Junior High and High Schools</li>
                                <li><b>Population Served:</b> Children</li>
                                <li><b>Age Group Served:</b> 3-6 years, 6-12 years, 12+ years</li>
                                <li><b>Number of People Cared For:</b> 15+, 35+ (varies for each partner)</li>
                                <li><b>Minimum Stay:</b> From 2 weeks</li>
                                <li><b>Sustainable Development Goal:</b>  Quality Education</li>
                                <li><b>Programme Requirements:</b> No specific  requirement from partners, however a good
                                command of English is required. No TOEFL training is required. Volunteers with studies
                                or experience in teaching, sports development, sports medicine or any related area are suitable.</li>
                                <li><b>Work Schedule:</b> 5 hours per day, Monday – Friday</li>
                                <li><b>Activities:</b> Weekly workshops and cultural events</li>
                                <li><b>Accommodation Type:</b> Host Family</li>
                                <li>
                                    <b>Price:</b> From $1,850USD per person, <a href="prices-jamaica.php">convert to your currency</a>.
                                    Please see <a href="prices-jamaica.php">Programme and Project Price</a> for each country
                                </li>
                                <li><b>Meals Included:</b> Breakfast and dinner (adapted to dietary requirements as necessary)</li>
                                <li>
                                    <b>What is Included:</b> 24-hour support, accommodation, programme, two meals,
                                    transportation to and from the airport, taxi cost from host family to partner
                                    agency, please see <a href="what-included.php">What is Included</a> for a full list
                                </li>
                                <!-- li><b>What is Included:</b> 24-hour support, accommodation, programme, two meals,
                                transportation to and from the airport, taxi cost from host family to partner agency, please see a for a full list</li -->
                                <li>
                                    <b>What is Not Included:</b> Airfare, daily lunch, internet, laundry, travel and health
                                    insurance, please see <a href="what-not-included.php">What is Not Included</a> for a full list
                                </li>
                                <li><b>Start Dates:</b> Flexible</li>
                                <li><b>Age of Volunteer:</b> Must be 16+</li>
                            </ul>
                        <div class="section-18">
                            <p>Involvement in sporting activities is very important to the people of the Caribbean. There is
                            an inner drive and passion that is hard to explain and nothing unites the Caribbean more than sports.
                            Jamaica is often referred to as the "sprint capital" of the world given its athletic prowess
                            and continued dominance in track and field. Jamaica celebrates a rich and world-renowned history in
                            track and field, it is home to the fastest man in the world; the living legend Usain Bolt. Jamaica
                            also has the fastest woman in the world Shelly-Ann Fraser-Pryce. While Jamaica has produced some great
                            athletes, this is also true for many Caribbean countries and the strength and dominance of
                            Caribbean athletes sets the region apart. Caribbean athletes compete with and outshine top athletes
                            across the world who have access to better facilities and equipment. What the Caribbean does
                            possess is a proven coaching approach and more importantly a mindset that is indigenous to the region.</p>
                            <p>The people of the Caribbean also have a love for football (soccer). Jamaica was the first English
                            speaking Caribbean nation to qualify for the World Cup in 1998 and got to the final of the Gold Cup in
                            2015; defeating excellent teams such as Costa Rica and the USA on the way. The Caribbean also has a
                            very good cricketing history with the West Indies team although, for the past decade or more, the
                            dominance has not been that evident. The fact remains that many of the world’s outstanding
                            cricketers have been from the region. As at July 2015, Jamaica was ranked 4th in the world in
                            netball; which is also a popular sport in the Caribbean. With this rich legacy, the Caribbean is
                            very keen on sports development and volunteers can play a key role in teaching sports in schools.</p>
                            <p>Sports volunteers can work in different schools with various age groups; early childhood
                            institutions (3-6 years), primary school (6-12 years), primary and junior high schools and high
                            schools (12-18 years). Your role as a volunteer is to work alongside a Physical Education teacher and
                            assist with the sport being taught at your time of arrival. This includes one or more of the
                            following: athletics, football (soccer), basketball, netball and cricket.</p>
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