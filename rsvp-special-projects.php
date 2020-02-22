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
    <div class="page">
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
        <section class="breadcrumb-classic first-bc-margin">
            <div class="shell section-34 section-sm-50">
                <div class="range range-lg-middle">
                    <div class="cell-lg-2 text-center veil reveal-sm-block cell-lg-push-2">
                    <!-- span class="icon-lg mdi mdi-package icon icon-white"></span -->
                    <img src="images/icon_donation.png" alt="" style="height: 72px; width: 72px;">
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Charity and Donations</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li>RSVP Special Projects</li>
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
                            <h1>RSVP Special Projects</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <p>Dependent on your time of arrival in a destination you will participate in various special projects that are coordinated by RSVP Caribbean each year, with your support, and the
                    support of our various partners. You can donate to any special project by clicking on the donate button or by emailing <a href= "mailto:foundation@rsvpcaribbean.com">foundation@rsvpcaribbean.com</a>.</p>
                </div>
            </section>
            
            <section class="section-41">
                <div class="shell container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-char-sec mission-vision box-icon box-icon-bordered">
                                <span class="icon icon-outlined icon-darker-filled mdi mdi-school"></span>
                                <h4>RSVP Back to School Project</h4>
                                <hr class="divider bg-mantis hr-lg-left-0">
                                <p>In August each year RSVP Caribbean provides back to school supplies to needy children in various communities 
                                across the Caribbean. This is coordinated at least 3 weeks before school reopens.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="single-char-sec mission-vision box-icon box-icon-bordered">
                                <span class="icon icon-outlined icon-darker-filled fa fa-tree"></span>
                                <h4>RSVP Christmas Project</h4>
                                <hr class="divider bg-mantis hr-lg-left-0">
                                <p>In December each year RSVP Caribbean sponsors and coordinates the distribution of toys to children, and supplies 
                                such as groceries, clothes and personal items to the elderly who are in need. This is coordinated at least 1 week 
                                before Christmas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-char-sec mission-vision box-icon box-icon-bordered">
                                <span class="icon icon-outlined icon-darker-filled mdi mdi-script"></span>
                                <h4>RSVP Scholarship and Education Fund</h4>
                                <hr class="divider bg-mantis hr-lg-left-0">
                                <p>Fifteen (15) needy students with good grades (5 each from the primary, high and university levels) will be sponsored 
                                each year. For each needy student, sponsorship will be for the duration of their time at the school they were attending 
                                when the sponsorship started; once they maintain an average at or above 85%. When those students have been fully supported 
                                then another set of students will be supported or, funds permitting, a new set of students will be supported each year.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="single-char-sec mission-vision box-icon box-icon-bordered">
                                <span class="icon icon-outlined icon-darker-filled mdi mdi-chair-school"></span>
                                <h4>RSVP Sponsor a Classroom Project</h4>
                                <hr class="divider bg-mantis hr-lg-left-0">
                                <p>There are many early childhood, primary and high schools in the Caribbean that are in need of additional classroom space. 
                                With 45+ students in each class and sometimes no wall separating the classrooms, the teaching and learning process is negatively
                                affected. It costs approximately $10,000USD to build and equip a classroom.</p>
                                <div class="exam-char">
                                <p>$10,000USD donation = 1 classroom = 45+ students helped directly = 1,500+ students helped indirectly</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-char-sec mission-vision box-icon box-icon-bordered">
                                <span class="icon icon-outlined icon-darker-filled fa fa-child"></span>
                                <h4>RSVP Sponsor a Child Project</h4>
                                <hr class="divider bg-mantis hr-lg-left-0">
                                <p>There are many children in child care facilities and poor communities who do not have the basic necessities to survive. 
                                Through your help you can sponsor a child each month for only $100USD. This goes towards their transportation cost to 
                                attend school, uniforms, books and lunch.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="single-char-sec mission-vision box-icon box-icon-bordered">
                                <span class="icon icon-outlined icon-darker-filled fa fa-soccer-ball-o"></span>
                                <h4>RSVP Sports Equipment Project</h4>
                                <hr class="divider bg-mantis hr-lg-left-0">
                                <p>Children and young adults in the Caribbean thrive on sports. There are many talented individuals who need support
                                through the various sporting programmes within schools and communities. This is your opportunity to assist RSVP 
                                Caribbean in sponsoring sports equipment, sports gear and resurfacing playing fields (football, tracks, netball courts, basketball courts).
                                </div>
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