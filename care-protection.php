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
                            <li>Child Care and Protection Programme </li>
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
                            <h1>Child Care and Protection Programme </h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                      <ul class="custom-item-list">
                          <li><b>Location:</b> Grenada, Jamaica, St. Lucia</li>
                          <li><b>Types of Partners:</b> Orphanages, child care facilities, children's homes, homes for 
                          persons with disabilities, government agencies</li>
                          <li><b>Population Served:</b> Children, persons with disabilities</li>
                          <li><b>Age Group Served:</b> 0-25 years</li>
                          <li><b>Number of People Cared For:</b> 20+ (varies for each partner)</li>
                          <li><b>Minimum Stay:</b> From 1 week</li>
                          <li><b>Sustainable Development Goal:</b> Good Health and Well-Being</li>
                          <li><b>Programme Requirements:</b> No specific requirement from some partners so anyone with a
                          love for children and the passion to serve can join the programme. Volunteers with studies or
                          experience in social work, psychology, sociology or any related area are suitable.</li>
                          <li><b>Work Schedule:</b> 5 hours per day, Monday – Friday</li>
                          <li><b>Activities:</b> Weekly workshops and cultural events</li>
                          <li><b>Accommodation Type:</b> Host Family</li>
                          <li>
                              <b>Price:</b> From $1,400USD per person, <a href="prices-jamaica.php">convert to your currency</a>.
                              Please see <a href="prices-jamaica.php">Programme and Project Price</a> for each country.
                          </li>
                          <li><b>Meals Included:</b> Breakfast and dinner (adapted to dietary requirements as necessary)</li>
                          <li>
                              <b>What is Included:</b> 24-hour support, accommodation, programme, two meals,
                              transportation to and from the airport, taxi cost from host family to partner
                              agency, please see <a href="what-included.php">What is Included</a> for a full list
                          </li>
                          <li>
                              <b>What is Not Included:</b> Airfare, daily lunch, internet, laundry, travel and health
                              insurance, please see <a href="what-not-included.php">What is Not Included</a> for a full list
                          </li>
                          <li><b>Start Dates:</b> Flexible</li>
                          <li><b>Age of Volunteer:</b> Must be 16+</li>
                      </ul>
                    </div>
                </div>
            </section>
            <section class="section-18">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h4>Volunteering with Children</h4>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>Many children in the Caribbean face various
                                challenges. This includes, but is not limited
                                to, abandonment, neglect, abuse, trafficking
                                and general lack of care. Different
                                organizations that seek to help in addressing
                                these issues need extra support staff to carry
                                out their daily activities. The aim of the
                                Child Care and Protection Programme is to
                                provide assistance to children from difficult
                                backgrounds. Many of them do not receive the
                                type of care, affection and education they
                                deserve so volunteers play an important role in
                                helping in these areas.</p>
                                <p>As a volunteer you will have the opportunity
                                to work with children in orphanages, child care
                                facilities, children’s homes, homes for persons
                                with disabilities and government agencies. Some
                                of these children are abused, neglected or have
                                no one to care for them. Volunteers provide
                                that added support to the facilities and they
                                are able to help in the daily care and
                                stimulation for the children, provide
                                individual or group interventions that support
                                their emotional, psychological and physical
                                growth and development as some children require
                                special attention. With some partner entities
                                the children live at the facilities while at
                                others they do not. Government agencies provide
                                support to children in need of care and
                                protection. However, the system is overburdened
                                with cases to be investigated, constant
                                follow-up is required and there is a great need
                                to provide counselling and psychological
                                support for children and families. Volunteers
                                can provide much needed support in these
                                areas.</p>
                                <p>Your role as the volunteer is to assist with
                                early childhood development for children by
                                helping to assess their development levels with
                                simple evaluation tools. This information is
                                then used to develop programmes designed to
                                improve their abilities and stimulate their
                                sensory, cognitive and motor skills through
                                dance, music, art and craft, games and role
                                play. It includes basic education and
                                interactive activities that promote growth and
                                development. Volunteers also keep a record for
                                each child. The general day to day care
                                (bathing, feeding, laundry, cleaning) of the
                                children and the environment is important to
                                ensure that children practice proper hygiene
                                and sanitation.</p>
                                <p>Volunteers will also be involved in
                                monthly outreach activities providing services
                                and support to children in need.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- RSVP CORE VALUES -->
            <section class="section-18">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h4>Volunteering with Special Needs Children</h4>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                        <div class="row">
                            <div class="col-md-12">
                                <p>For some partners the children being cared
                                for have mild to severe disabilities. Based on
                                their disabilities volunteers will assist in
                                activities that improve their emotional,
                                social, intellectual and physical development.
                                Volunteers with lots of energy and a desire to
                                work with special needs children are welcome to
                                join this project. Volunteers work at schools
                                or centres that have children with various
                                disabilities such as cerebral palsy, autism,
                                dyslexia, down syndrome and others. These
                                partners offer volunteers the opportunity to
                                work alongside local staff to help in the
                                classroom and with day to day activities,
                                providing care and attention for the children.
                                Some schools are divided into sections focusing
                                on visually impaired, hearing impaired and
                                physically disabled children; and volunteers
                                are assigned to help in one of these specific
                                areas.</p>
                            </div>
                        </div>
                    </div>
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