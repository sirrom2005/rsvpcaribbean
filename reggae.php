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
                    <h2><span class="big">Projects</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="programmeandproject.php">Programmes and Projects</a></li>
                            <li><a href="programmeandproject.php">Projects</a></li>
                            <li>Reggae Music and Dance Project</li>
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
                            <h1>Reggae Music and Dance Project</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                            <ul class="custom-item-list">
                                <li><strong>Location:</strong> Jamaica</li>
                                <li><strong>Types of Partners:</strong> Musicians, reggae artistes, recording studios, dance studios, community groups</li>
                                <li><strong>Population Served:</strong> Children and adults</li>
                                <li><strong>Age Group Served:</strong> All</li>
                                <li><strong>Minimum Stay:</strong> From 1 week</li>
                                <li><strong>Sustainable Development Goal:</strong> Sustainable Cities and Communities</li>
                                <li><strong>Project Requirements:</strong> No specific requirement from partners. Volunteers who want to 
                                learn more about reggae music and the development of Jamaican dance are encouraged to apply. 
                                Volunteers with studies or experience in music, cultural development, history, literature, dance or 
                                any related area are suitable.</li>
                                <li><strong>Work Schedule:</strong> 5 hours per day, Monday – Friday</li>
                                <li><strong>Activities:</strong> Weekly workshops and cultural events</li>
                                <li><strong>Accommodation Type:</strong> Host Family</li>
                                <li><strong>Price:</strong> From $1,900USD per person, <a href="prices-jamaica.php">convert to your currency</a>. 
                                Please see <a href="prices-jamaica.php">Programme and Project Price</a> for Jamaica</li>
                                <li><strong>Meals Included:</strong> Breakfast and dinner (adapted to dietary requirements as necessary)</li>
                                <li><strong>What is Included:</strong> 24-hour support, accommodation, programme, three meals, transportation to and 
                                from the airport, taxi cost from host family to partner agency, please see 
                                <a href="what-included.php">What is Included</a> for a full list</li>
                                <li><strong>What is Not Included:</strong> Airfare, daily lunch, internet, laundry, travel and health insurance, 
                                see <a href="what-not-included.php">What is Not Included</a>  
                                for a full list</li>
                                <li><strong>Start Dates:</strong> Flexible</li>
                                <li><strong>Age of Volunteer:</strong> Must be 16+</li>
                            </ul>
                        <div class="section-18">
                            <p>Jamaican music has evolved into a worldwide brand that has many people singing, dancing and having fun. 
                            From mento, ska, rocksteady, reggae, dub music, dancehall, ska, jazz and a mix of styles, Jamaican music is one of the 
                            most listened to in the world. While there are many contributors to the development of reggae music, the legend Bob 
                            Marley is credited with reggae music being the pulse of what persons move to worldwide. It is said that anywhere you go 
                            in the world, even in some very remote areas and you start singing “One Love” persons know the song. In 1999 "One Love" 
                            was named the anthem of the millennium and it is one of the most played song in history. Every city, town, village, 
                            province, parish, county, state, country with its people rock, dance and create a vibe from the music. The depth of 
                            reggae music, social commentary, transformative power and positive vibration is extraordinary. The world has embraced 
                            the music and often it is a reference point for mood change, healing and harmony.</p>
                            
                            <p>With widespread technology we know reggae songs by Bob Marley and other artistes such as Peter Tosh, Gregory Isaacs, 
                            Beres Hammond, Jimmy Cliff, Burning Spear, Dennis Brown, Ziggy Marley, Bunny Wailer, Damian Marley, Shaggy, Sean Paul and 
                            many others are just a click away. However, a click cannot compare to the real thing of being in Jamaica, getting the history 
                            of the music, working alongside artistes and musicians, relating to the people and involvement in the music atmosphere of the 
                            country. Without a doubt that cultural immersion will provide firsthand knowledge and experience about reggae music.</p>
                            
                            <p>Volunteers will get the opportunity to interact with and work alongside Jamaican musicians and artistes and observe how 
                            the music is recorded, edited and produced. Volunteers will also participate in workshops with various musicians and learn 
                            more about the music and visit different activities that promote reggae music. You will learn more about the different types of dance, 
                            visit dance studios and become a part of the dance culture.</p>  

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