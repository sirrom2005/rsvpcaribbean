<?php 
include_once('config/config.php');
include_once('classes/site.class.php');
$obj = new site();
$price = null;
$key = explode('_%_', base64_decode(filter_input(INPUT_GET, 'key')));

if(isset($key[3]) && isset($key[4]) && isset($key[5]) && isset($key[6])){
    $dStart = new DateTime($key[5]);
    $dEnd   = new DateTime($key[6]);
    $dDiff  = $dStart->diff($dEnd);
    $dDiff->format('%R');
    $week   = ceil($dDiff->days/7);
    $extraCost = 0;
    
    if($week>8){
        $extraWeek = $week - 8;
        $extraCost = $extraWeek * 200;
        $week = 8;
    }
    
    $sql = "SELECT wk$week AS price, name, type FROM project_category WHERE name IN "
            . "(SELECT `name` FROM project_category WHERE id = ".$key[3].") AND country_id =".$key[4];
    $rs = $obj->getResultSet($sql);
    $price = $rs[0]['price'] + $extraCost; 
}                             
?>
<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">
<head>
    <!-- Site Title-->
    <title>RSVP - Checkout</title>
    <meta charset="utf-8">
    <meta content="telephone=no" name="format-detection">
    <meta content=
    "width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    name="viewport">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
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
                                <a href="index.html"><img alt='' height='94'
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
        <section class="breadcrumb-classic first-bc-margin">
            <div class="shell section-34 section-sm-50">
                <div class="range range-lg-middle">
                    <div class=
                    "cell-lg-2 veil text-center reveal-sm-block cell-lg-push-2">
                    <span class="icon-lg mdi mdi-newspaper icon icon-white">
                        </span>
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Make Payment</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <!--li>
                                <a href="apply.php">Apply Now</a>
                            </li-->
                        </ul>
                    </div>
                </div>
            </div><svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
    <polyline points="0,0 60,0 29,29"></polyline>
</svg>
        </section><!-- Page Content-->
        <main class="page-content">

            <section class="section-18 apply-must">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>Make Payment</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-sm-top-50 section-fawq">
                        <div class="rsvp-applicationform">
                            <div style="text-align: center;">  
                            <h3><span style="color:blue;">Your Application Was Successfully Submitted</span></h3>    
                            <h4>Pay deposit: $300 USD</h4>
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="amount" value="300.00">
                                <input type="hidden" name="item_name" value="RSVP Caribbean Application Form Deposit">
                                <input type="hidden" name="business" value="admin@rsvpcaribbean.com">
                                <input type="hidden" name="first_name" value="<?php echo (isset($key[1]))? $key[1] : ''?>">
                                <input type="hidden" name="last_name" value="<?php echo (isset($key[2]))? $key[2] : ''?>">
                                <input type="hidden" name="email" value="<?php echo (isset($key[0]))? $key[0] : ''?>">
                                <input type="hidden" name="cbt" value="Return to rsvpcaribbean.com">
                                <input type="hidden" name="return" value="https://www.rsvpcaribbean.com/payment-status.php">
                                <input type="hidden" name="cancel_return" value="https://www.rsvpcaribbean.com/payment-status.php?action=cancel">
                                <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_paynow_cc_144x47.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                            
                            <?php if(false){ 
                                $itemName = ($rs[0]['type']==1)? "Project" : "Programme";
                                $itemName .= " Fee For ".$rs[0]['name'];
                            ?>
                            <h5>Or</h5>
                            <h4><?php echo $itemName;?>: <?php echo number_format($price,2,'.',',').' USD';?></h4>
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="amount" value="<?php echo $price;?>">
                                <input type="hidden" name="item_name" value="RSVP Caribbean <?php echo  $itemName;?>">
                                <input type="hidden" name="business" value="admin@rsvpcaribbean.com">
                                <input type="hidden" name="first_name" value="<?php echo (isset($key[1]))? $key[1] : ''?>">
                                <input type="hidden" name="last_name" value="<?php echo (isset($key[2]))? $key[2] : ''?>">
                                <input type="hidden" name="email" value="<?php echo (isset($key[0]))? $key[0] : ''?>">
                                <input type="hidden" name="cbt" value="Return to rsvpcaribbean.com">
                                <input type="hidden" name="return" value="https://www.rsvpcaribbean.com/payment-status.php">
                                <input type="hidden" name="cancel_return" value="https://www.rsvpcaribbean.com/payment-status.php?action=cancel">
                                <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_paynow_cc_144x47.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
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
</body>
</html>