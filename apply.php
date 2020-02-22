<?php 
ob_start();
include_once('config/config.php'); 
include_once('classes/site.class.php');
$page = filter_input(INPUT_GET, 'section');
$page = (empty($page))? 'application' : filter_input(INPUT_GET, 'section');
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
                    <div class="cell-lg-2 veil text-center reveal-sm-block cell-lg-push-2">
                    <span class="icon-lg mdi mdi-newspaper icon icon-white"></span>
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Apply Now</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="apply.php">Apply Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
    <polyline points="0,0 60,0 29,29"></polyline>
</svg>
        </section><!-- Page Content-->
        <main class="page-content">
            <section class="section-18">
                <div class="shell container">
					<div  style="margin-left:5px" class="range">
					<div class="cell-lg-12 text-lg-left">
					<h1>Apply Now</h1>
					<hr class="divider bg-mantis hr-lg-left-0">
					</div>
					</div>

                    <div class="section-18">
                        <div class="apply-sec">
                            <h4>How to Apply</h4>
                            <p>The application process with RSVP Caribbean is simple. All you have to do is complete the <a href="#frm">Application Form</a> and follow some easy
                            steps. We ask that you carefully read the <a href="termsandcondition.php">Terms and Conditions</a> before you submit your application. Here are the steps in the application
                            process:</p>
                        </div>
                        <ul class="nav nav-tabs faq-nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">1. APPLYING ONLINE</a></li>
                            <li><a data-toggle="tab" href="#menu1">2. APPLYING OVER THE PHONE</a></li>
                            <li><a data-toggle="tab" href="#menu2">3. AFTER YOU APPLY</a></li>
                        </ul>
                        <div class="tab-content faq-tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <div class="apply-tab">
                                    <p>a) Fully complete the <a href="#frm">Application Form</a>. If you do not have all the information we still encourage
                                    you to complete and submit the application and we will get back to you for additional information. The more complete the
                                    application the quicker it will be processed.</p>
                                    <p>b) If you would like to discuss any aspect of the <a href="#frm">Application Form</a> please call us at +1 876 569 5918
                                    between 8:30am and 4:30pm Monday – Thursday and 8:30am – 3:30pm on Fridays EST or send an email to <a href="mailto:info@rsvpcaribbean.com">info@rsvpcaribbean.com</a> and we
                                    will be happy to assist.</p>
                                    <p>c) A non-refundable deposit of $300USD is required with your application. This is part of the overall project fee and not an extra cost.</p>
                                    <p>d) Once we have received your application and deposit fee you will get an email notification.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="menu1">
                                <div class="apply-tab">
                                    <p>a) Please call +1 876 569 5918 between 8:30am and 4:30pm Monday – Thursday and 8:30am – 3:30pm on Fridays EST and a staff
                                    will assist you in completing the application form. Please review the <a href="#frm">Application Form</a> and have
                                    on hand the necessary information so we can assist you better.</p>
                                    <p>b) A non-refundable deposit of $300USD is required with your application. This is part of the overall project fee and not an extra cost.</p>
                                    <p>c) Once we have received your application and deposit fee you will get an email notification .</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="menu2">
                                <div class="apply-tab">
                                    <p>a) Within 5 working days you will receive an acceptance email.</p>
                                    <p>b) Within 10 working days you will receive a call.</p>
                                    <p>c) Within 15 working days of acceptance you will receive a formal welcome to our programme. You will receive your personal RSVP webpage with your username and
                                    password. This webpage provides all the necessary information to prepare you for your trip. This page is kept up-to-date and you will be informed when new information
                                    is added. If you do not have easy access to the internet and prefer hard copies of information to be mailed to you then this option is available, just let us know. We
                                    also make calls to you at important intervals to prepare you for your trip. From your webpage you will receive the following information:</p>
                                    <div class="roman-apply">
                                        <p>I. General information about your chosen country</p>
                                        <p>II. Information on RSVP Caribbean staff</p>
                                        <p>III. Terms and Conditions IV. Programme Details (1 month before departure)</p>
                                        <p>V. Accommodation Details (1 month before departure)</p>
                                        <p>VI. Travel Tips</p>
                                        <p>VII. Fundraising Tips</p>
                                        <p>VIII. Travel Kit</p>
                                        <p>IX. Visa Information (if applicable to you)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a name="frm"></a>
                        <p>Please see the <a href="volunteering-experience.php">Volunteering Experience</a> for more details.</p>
                    </div>
                </div>
            </section>
            <section class="section-18 apply-must">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>Application Form</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18 section-fawq">
                        <div id="read_carefully">
                            <p>Please ensure that you carefully read <a href="#top">How to Apply</a> and <a href="termsandcondition.php">Terms and  Conditions</a> before you apply. If you need help click
                            on Online Chat or call +1 876 569 5918. The information you provide is kept strictly confidential. This will take approximately 15 minutes 
                            to complete. Fields marked * are required.</p>
                        </div>
                        <div class="section-18 rsvp-applicationform">
                            <form name="apply" id="apply" method="post" action="">
                                <?php include_once('includes/apply/'.$page.'.php');?>
                            </form>
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
    </div>
    <!-- Java script-->
    <script src="js/core.min.js"> </script> 
    <script src="js/script.js"></script>
    <script src="js/apply.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
                $("#end_date").datepicker({dateFormat: 'yy-mm-dd'});
                $("#start_date").datepicker({dateFormat: 'yy-mm-dd'});
                $("#dob").datepicker({dateFormat: 'yy-mm-dd'});               
        });
        <?php
        if(isset($_SESSION['APPLICATION_FORM']['APPLICATION']) && $page=="about-yours-self"){ 
            foreach($_SESSION['APPLICATION_FORM']['APPLICATION'] as $key => $value){
                if($key != "state_id" && $key != "country_id" ){
        ?>
                $("#<?php echo $key;?>").val('<?php echo $value; ?>');   
        <?php 
                }
            }
        } 
        ?>
            
        <?php
        if(isset($_SESSION['APPLICATION_FORM']['PREFERENCE']) && $page=="application"){
            foreach($_SESSION['APPLICATION_FORM']['PREFERENCE'] as $key => $value){
                if($key != "project_category_id" && $key != "country_id" ){
        ?>
                $("#<?php echo $key;?>").val('<?php echo $value; ?>');   
        <?php 
                }
            }
        } 
        ?>
            
        <?php
        if(isset($_SESSION['APPLICATION_FORM']['EMERGENCY']) && $page=="emergency-contact"){
            foreach($_SESSION['APPLICATION_FORM']['EMERGENCY'] as $key => $value){
        ?>
            $("#<?php echo $key;?>").val('<?php echo $value; ?>');   
        <?php 
            }
        } 
        ?>
            
        <?php
        if(isset($_SESSION['APPLICATION_FORM']['EDUCATION']) && $page=="education-work"){
            foreach($_SESSION['APPLICATION_FORM']['EDUCATION'] as $key => $value){
        ?>
            $("#<?php echo $key;?>").val('<?php echo $value; ?>');   
        <?php 
            }
        } 
        ?>
        
        <?php
        if(isset($_SESSION['APPLICATION_FORM']['REFERENCE']) && $page=="reference"){
            foreach($_SESSION['APPLICATION_FORM']['REFERENCE'] as $key => $value){
                if($key != "country_id" && $key != "state_id" ){
        ?>
                $("#<?php echo $key;?>").val('<?php echo $value; ?>');   
        <?php 
                }
            }
        } 
        ?>
            
    </script>
</body>
</html>
<?php    
$value = ob_get_contents();
ob_end_clean();
echo $value;
?>