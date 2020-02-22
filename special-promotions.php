<?php 
include_once('config/config.php'); 
$fileInfo = pathinfo(__FILE__);
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <head>
    <!-- Site Title-->
    <title><?php echo isset($metaData[$fileInfo['filename']]['title'])? $metaData[$fileInfo['filename']]['title'] : $metaData['default']['title']; ?></title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="<?php echo isset($metaData[$fileInfo['filename']]['keywords'])? $metaData[$fileInfo['filename']]['keywords'] : $metaData['default']['keywords']; ?>">
    <meta name="description" content="<?php echo isset($metaData[$fileInfo['filename']]['description'])? $metaData[$fileInfo['filename']]['description'] : $metaData['default']['description']; ?>">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
                    <nav class="rd-navbar rd-navbar-default rd-navbar-transparent" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
					<div class="rd-navbar-inner">
                            <div class="navbar navbar-inverse navbar-fixed-top none-navbar">
                                <?php include('layout/top_menu.php'); ?>
                            </div>
                            <menu></menu>
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle">
                                    <span></span>
                                </button>
                                <!--Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a href="index.php">
                                        <img style='margin-top: -35px;margin-left: -25px;' width='138' height='94' src='images/intense/logo-light.png' alt='' />
                                    </a>
                                </div>
                            </div>
                            <div class="rd-navbar-menu-wrap">
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-mobile-scroll">
                                        <!--Navbar Brand Mobile-->
                                        <div class="rd-navbar-mobile-brand">
                                            <a href="index.php">
                                                <img style='margin-top: -35px;margin-left: -25px;' width='138' height="94" src='images/intense/logo-light.png' alt='' >
                                            </a>
                                        </div>
                                    </div>
                                    <!-- RD Navbar Nav-->
                                    <?php include('layout/main_menu.php'); ?>
									</div>
									</div>
									</div>
                    </nav>
                </div>
            </header>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic first-bc-margin">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 text-center veil reveal-sm-block cell-lg-push-2">
            <span class=" text-center icon-lg mdi mdi-calculator icon icon-white"></span></div>
            <div class="cell-lg-5  veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Prices</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.php">Home</a></li>
                <li>Prices - Special Promotions</li>
              </ul>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
            <polyline points="0,0 60,0 29,29"></polyline>
        </svg>
      </section>
      <!-- Page Content-->
      <main class="page-content">
		
        
        
        
        <section class="section-41">
              <div class="shell container  ">
              <div class="range">
                <div class="cell-lg-5 text-lg-left">
                    <h1>Special Promotions</h1>
                    <hr class="divider bg-mantis hr-lg-left-0">
                </div>
              </div>
      				<div class="section-18">
      					<ul class="custom-item-list no-bullets"> 
                  <li><span class="icon icon-darker-filled icon-xxs icon-circle mdi mdi-star"></span> Volunteer with your partner for a minimum of 
                  8 weeks and get a 5% discount each on your programme or project fee.</li>
                  <li><span class="icon icon-darker-filled icon-xxs icon-circle mdi mdi-star"></span> Volunteer for a minimum of 12 weeks and get a 5% discount.</li>
                  <li><span class="icon icon-darker-filled icon-xxs icon-circle mdi mdi-star"></span> If you were referred by a past volunteer you get 5% discount.</li>
                  <li><span class="icon icon-darker-filled icon-xxs icon-circle mdi mdi-star"></span> Get a loyalty card after your first trip and get 10% discount on your next trip to any RSVP Caribbean destination.</li>
                  <li><span class="icon icon-darker-filled icon-xxs icon-circle mdi mdi-star"></span> Volunteer for a minimum of 16 weeks and get 10% discount.</li>
                  <li><span class="icon icon-darker-filled icon-xxs icon-circle mdi mdi-star"></span> Deposit of $300USD must be paid and this is non-refundable.</li>
      					</ul>
                <p><cite>*Conditions Apply</cite></p>
      				</div>
          </div>
        </section>
		
      </main>
            <!-- Page Footer-->
            <!-- Default footer-->
            <?php include('layout/footer.php'); ?>
        </div>
        <!-- Global Mailform Output-->
        <div id="form-output-global" class="snackbars"></div>
        <!-- PhotoSwipe Gallery-->
        <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                        <button title="Share" class="pswp__button pswp__button--share"></button>
                        <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                        <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
                    <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Java script-->
        <script src="js/core.min.js"></script>
        <script src="js/script.js"></script>
        <script>
        $document.ready(function(){
            $('.update-price-btn').on('click', function(){
   
                var _ele = '#' + $(this).data('element');
                var _mode = $(this).data('mode');
                var _week = parseInt($(_ele).find('.extra-week:first').data('week'));
                
                if(_mode == 'plus'){ _week += 1; }else{ _week -= 1; }
                if(_week < 1){ _week = 1; }
                
                $(_ele).find('.extra-week:first').data('week', _week);
                $(_ele).find('.extra-week:first').php(_week);
                
                $(_ele + ' td.extra-week-price').each(function(index){
                    var _price = parseInt($(this).data('price'));
                    _price = _week * _price;
                    $(this).php('$' + _price + 'USD');
                });
                
            });
        });
        </script>
    </body>
</html>
