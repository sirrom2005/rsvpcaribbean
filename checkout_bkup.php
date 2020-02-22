<?php 
include_once('../../config/config.php');
include_once('../../classes/site.class.php');

//if(!isset($_SESSION['APPLICATION_FORM'])){header('location: apply.php'); exit();}

for ($i = 1; $i <= 12; $i++) {
    $data['months'][] = array(
        'text'  => strftime('%B', mktime(0, 0, 0, $i, 1, 2000)),
        'value' => sprintf('%02d', $i)
    );
}

$today = getdate();
$data['year_valid'] = array();
for ($i = $today['year']; $i < $today['year'] + 10; $i++) {
    $data['year_valid'][] = array(
        'text'  => strftime('%Y', mktime(0, 0, 0, 1, 1, $i)),
        'value' => strftime('%Y', mktime(0, 0, 0, 1, 1, $i))
    );
}

$data['cards'][] = array(
        'text'  => 'Visa',
        'value' => 'VISA'
);

$data['cards'][] = array(
        'text'  => 'MasterCard',
        'value' => 'MASTERCARD'
);

$data['cards'][] = array(
        'text'  => 'Discover Card',
        'value' => 'DISCOVER'
);

$data['cards'][] = array(
        'text'  => 'American Express',
        'value' => 'AMEX'
);
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
                    <h2><span class="big">Checkout</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="apply.html">Apply Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
    <polyline points="0,0 60,0 29,29" style="fill:#f42a18"></polyline>
</svg>
        </section><!-- Page Content-->
        <main class="page-content">

            <section class="section-98 section-sm-40 apply-must">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>Checkout</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-sm-top-50 section-fawq">
                        <div class="rsvp-applicationform">
                            <form class="form-horizontal" method="post" action="payment-status.php">
                                <fieldset id="payment">
                                  <legend>Credit Card Details</legend>
                                  <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-cc-type">Credit Card Type</label>
                                    <div class="col-sm-10">
                                      <select name="cc_type" id="input-cc-type" class="form-control">
                                        <?php foreach ($data['cards'] as $card) { ?>
                                        <option value="<?php echo $card['value']; ?>"><?php echo $card['text']; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-cc-number">Credit Card number</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="cc_number" value="" placeholder="Credit Card number" id="input-cc-number" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-cc-start-date"><span data-toggle="tooltip" title="Card Expire Date">Credit Card Expire Date</span></label>
                                    <div class="col-sm-3">
                                      <select name="cc_expire_month" id="input-cc-start-date" class="form-control">
                                        <?php foreach ($data['months'] as $month) { ?>
                                        <option value="<?php echo $month['value']; ?>"><?php echo $month['text']; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="col-sm-3">
                                      <select name="cc_expire_year" class="form-control">
                                        <?php foreach ($data['year_valid'] as $year) { ?>
                                        <option value="<?php echo $year['value']; ?>"><?php echo $year['text']; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-cc-cvv2">CVV</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="cc_cvv2" value="" placeholder="CCV" id="input-cc-cvv2" class="form-control" />
                                    </div>
                                  </div>
                                </fieldset>
                                <br style="clear: both;">
                                <div class="buttons">
                                    <div class="pull-left">
                                        <span id="siteseal" style="width:120px; display:block;"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=ZosiANjgN0UuKcQIzF1aTTGepQeb2wbdahGmuH2lF2gLl2C7LBORNAaMp6TJ"></script></span>
                                    </div>
                                    <div class="pull-left" style="padding-left:10px;"><img src="images/credit_cards.jpg" /></div>
                                    <div class="pull-right">
                                        <input type="submit" value="Pay now" id="button-confirm" data-loading-text="loading..." class="btn btn-primary" />
                                    </div>
                                </div><br style="clear: both;">
                              </form>
                            <hr>
                            <p>&nbsp;</p><p>&nbsp;</p>
                            <div style="text-align: center;">
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="VYGA4REG4M3SC">
                                    <table align="center">
                                    <tr><td><input type="hidden" name="on0" value="Programme">Programme</td></tr><tr><td><select name="os0">
                                         <option value="Child Care and Protection">Child Care and Protection $1,400.00 USD</option>
                                         <option value="Teaching">Teaching $1,850.00 USD</option>
                                         <option value="Medicine">Medicine $1,900.00 USD</option>
                                         <option value="Test Item">Test Item $1.00 USD</option>
                                    </select> </td></tr>
                                    </table>
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>

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
    <script>
        $(function() {
                $("#end_date").datepicker({dateFormat: 'yy-mm-dd'});
                $("#start_date").datepicker({dateFormat: 'yy-mm-dd'});
                $("#dob").datepicker({dateFormat: 'yy-mm-dd'});               
        });
    </script>
</body>
</html>