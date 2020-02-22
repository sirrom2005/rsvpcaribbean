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
                                        <a href="index.html"><img alt=''
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
                            <li>Child Care and Vulnerable Adult Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
            <!-- CHILD CARE AND VULNERABLE ADULT PROTECTION POLICY -->
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>Child Care and Vulnerable Adult Policy</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="section-18">
                            <p>RSVP Caribbean takes its role seriously in the
                            care and protection of children and all vulnerable
                            groups. In organizing and implementing our
                            programmes the safety, protection and well-being of
                            children is our number one priority. Most Caribbean
                            countries are signatories to the Convention on the
                            Rights of the Child and there are penalties for
                            breaches and so we work with our partner
                            organizations to ensure that the rights of children
                            are protected. We are committed to ensuring that
                            children and all programme beneficiaries are not
                            exposed to abuse, neglect, exploitation and
                            discrimination. Children and vulnerable adults
                            regardless of age, culture, disability, gender,
                            language, race, religious beliefs or sexual
                            identity must be treated fairly and with
                            respect.</p>
                            <p>Our responsibility is to ensure that procedures
                            are in place and policies and laws followed when
                            dealing with children. The Child Care and
                            Protection Act and all related laws for the
                            destinations that we work in are followed. At all
                            times the welfare of the child takes precedence
                            over anything else and we carefully manage the
                            interaction, care and protection of all
                            children.</p>
                            <p>All RSVP Caribbean staff, volunteers, host
                            families and partners are made aware of the Child
                            Care and Protection Policy and must adhere to it.
                            It is the responsibility of everyone involved to
                            ensure that children are protected. The policy is
                            intended to protect children and vulnerable adults
                            as well as volunteers and partner
                            organizations.</p>
                            <!-- h3>The Child Care and Protection Policy:</h3 -->
                            <ul class="custom-item-list">
                                <li>A child is considered to be any person
                                under 18 years.</li>
                                <li>A vulnerable adult is anyone in need of
                                care, protection and support based on but not
                                limited to disability, neglect, socio-economic
                                conditions and illness.</li>
                                <li>RSVP Caribbean carefully screens all staff,
                                volunteers, host families and partners; and
                                criminal record checks are completed for all
                                volunteers and staff.</li>
                                <li>RSVP Caribbean respects the rights of
                                children and vulnerable adults, families,
                                caregivers, communities, volunteers and
                                partners and always acts in the best interest
                                of the beneficiaries.</li>
                                <li>RSVP Caribbean will not condone any sexual
                                or physical abuse, mental harm, exploitation or
                                discrimination of any child or vulnerable
                                adult.</li>
                                <li>RSVP Caribbean ensures that we explain the
                                Child Care and Protection Policy before arrival
                                and upon arrival this is also done during
                                orientation by the Programme Coordinators who
                                will go through all aspects of the policy.
                                Volunteers get a copy of the policy and must
                                acknowledge in writing that they understand and
                                accept the policy.</li>
                                <li>RSVP Caribbean is committed to reporting
                                any of the above issues to the
                                authorities.</li>
                                <li>RSVP Caribbean takes deliberate steps to
                                prevent abuse, exploitation, neglect and
                                discrimination of children and vulnerable
                                adults.</li>
                                <li>RSVP Caribbean takes care in ensuring that
                                only appropriate language and age-appropriate
                                activities and actions are used at all
                                times.</li>
                                <li>RSVP Caribbean volunteers, staff and
                                partners should demonstrate great care when
                                interacting with any child or vulnerable adult.
                                At no time should any physical contact be
                                sexual or even possibly misconstrued as
                                sexual.</li>
                                
                            </ul>
                                    <h4>RSVP Caribbean volunteers and staff
                                    should not:</h4>
                                    <ul class="custom-item-list">
                                        <li>Take any child or vulnerable adult
                                        from the programme site without
                                        approval from programme
                                        supervisor.</li>
                                        <li>Take any child or vulnerable adult
                                        to their accommodation or house.</li>
                                        <li>Take any child or vulnerable adult
                                        out for any activity without approval
                                        from the programme supervisor.</li>
                                        <li>Share a bed with any child while on
                                        the programme.</li>
                                        <li>Buy gifts for any child or
                                        vulnerable adult from the programme
                                        site without approval from the
                                        programme supervisor.</li>
                                        <li>Take pictures or videos of any
                                        child or vulnerable adult without
                                        approval from programme supervisor; and
                                        pictures and videos should not belittle
                                        or degrade them.</li>
                                        <li>Act in any way that humiliates the
                                        child or vulnerable adult and show any
                                        form of emotional abuse.</li>
                                        <li>Act in any way that exerts physical
                                        force such as pushing, kicking,
                                        shoving, hitting, slapping or cause any
                                        fear, intimidation or distress to the
                                        child or vulnerable adult.</li>
                                        <li>Show any preferential treatment or
                                        discrimination or exclusion.</li>
                                    </ul>
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