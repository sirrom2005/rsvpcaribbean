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
                        "icon-lg mdi mdi-rotate-right icon icon-white"></span>
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Resources</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="resources.php">Resources</a></li>
                            <li>Travel Kit</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
            
            <!-- TRAVEL KIT -->
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>Travel Kit</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="section-18">
                            <p>This travel list provides suggestions on what
                            you should travel with. By no means is this list
                            exhaustive so ensure that you also do your research
                            and plan based on your needs and preferences.</p>
                            <ul class="custom-item-list">
                                <li>Small rucksack for daily and weekend travel
                                along with your main rucksack or suitcase</li>
                                <li>Light clothes for weekends, social
                                gatherings, church (not compulsory) and evening
                                wear</li>
                                <li>Light sweaters (1 or 2) – it rains
                                sometimes</li>
                                <li>Work clothes (details will be provided on
                                your RSVP webpage when you apply)</li>
                                <li>Bathing suit</li>
                                <li>Towels (2-3)</li>
                                <li>Sunglasses</li>
                                <li>Hat</li>
                                <li>Money belt</li>
                                <li>Ear plugs</li>
                                <li>Raincoat and small umbrella</li>
                                <li>Sneakers and comfortable shoes for
                                hiking</li>
                                <li>Flip flops and comfortable flat shoes</li>
                                <li>Water bottle</li>
                                <li>Small torch (flashlight)</li>
                                <li>Universal socket adaptor for cameras,
                                laptop, ipod, phones and other devices (The
                                Caribbean uses US and Canada’s two-pin style
                                plugs)</li>
                                <li>ATM card (Debit/Credit Cards) or US
                                travellers’ cheques, call your bank and advise
                                them of your travel plans so your card is not
                                blocked</li>
                                <li>American, Euro, Pounds, Canadian dollars
                                can be easily exchanged in the Caribbean</li>
                                <li>Mobile phone - check with your service
                                provider about the cost to use your phone in
                                the Caribbean</li>
                                <li>Photocopy all your important documents – 
                                passport information page, passport visa page
                                (if applicable), insurance policies, credit
                                card</li>
                                <li>A small book with the telephone numbers and
                                email addresses of your friends and
                                families</li>
                                <li>Toiletries (toilet tissue, lotion,
                                deodorant, body wash, bathing soap,
                                antibacterial soap, toothbrush, toothpaste,
                                hair moisturizers, shampoo, conditioner, hand
                                wipe, hand sanitizers, handwash, sanitary
                                towels/tampons, lip balm and any other
                                essentials)</li>
                                <li>Camera, ipod, laptop (for some
                                programmes)</li>
                                <li>Medication (if on prescribed
                                medication)</li>
                                <li>Sun protection cream and after-sun lotion
                                (very expensive locally)</li>
                                <li>Insect/mosquito repellents (at least
                                2-3)</li>
                                <li>Mosquito nets (optional)</li>
                                <li>Sleeping bags (optional) for travelling out
                                on weekends</li>
                                <li>Small English dictionary (if your English
                                is basic)</li>
                                <li>Books to read for your entertainment</li>
                            </ul>
                            <p><strong class="blue">You can also check various travel apps for
                            suggestions.</strong></p>
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