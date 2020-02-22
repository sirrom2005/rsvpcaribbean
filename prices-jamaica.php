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
                <li><a href="pricing.php">Prices</a></li>
                <li>Prices - Jamaica</li>
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
		
        <!-- PROGRAMME AND PROJECT PRICES - JAMAICA -->
		<section class="section-41">
            <div class="shell container">
            <div class="range">
                <div class="text-lg-left">
                    <h1>Price List - Programme and Project Prices - Jamaica</h1>
                    <hr class="divider bg-mantis hr-lg-left-0">
                </div>
            </div>
			<div class="section-18">
      
      <!-- Currency Converter Script - EXCHANGERATEWIDGET.COM -->
            <div class="exchangeratewidget">
              <div class="exchangeratewidget-inner"><a href="https://www.exchangeratewidget.com/">Currency Converter</a></div>
              <script type="text/javascript" src="//www.exchangeratewidget.com/converter.php?l=en&f=USD&t=EUR&a=1&d=F0F0F0&n=FFFFFF&o=000000&v=2"></script>
            </div>
            <!-- End of Currency Converter Script -->

				<div class="for-pricing-table"> 
				<div id="pricing-jamaica" class="info-table"> 
					<table class="table table-first"> 
						<thead> 
							<tr> 
								<th>Programmes / Projects</th>
								<th>1 Week </th>
								<th>2 Weeks </th>
								<th>3 Weeks </th>
								<th>4 Weeks </th>
								<th>5 Weeks </th>
								<th>6 Weeks </th>
								<th>7 Weeks </th>
								<th>8 Weeks </th>
								<th>
                  <span class="extra-week" data-week="9">9</span> Weeks 
                  <a class="update-price-btn" data-element="pricing-jamaica" data-mode="plus" href="javascript:void(null);"><i class="fa fa-plus"></i></a> 
                  <a class="update-price-btn" data-element="pricing-jamaica" data-mode="minus" href="javascript:void(null);"><i class="fa fa-minus"></i></a>
                </th>
							</tr>
						</thead>
						<tbody> 
							<tr> 
								<td>Child Care and Protection</td>
								<td>$1,500USD</td>
								<td>$1,950USD</td>
								<td>$2,300USD</td>
								<td>$2,700USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td class="extra-week-price" data-price-base="4300" data-price="200">$4,500USD</td>
							</tr>
              <tr> 
								<td>Elderly Care</td>
								<td>$1,500USD</td>
								<td>$1,950USD</td>
								<td>$2,300USD</td>
								<td>$2,700USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td class="extra-week-price" data-price-base="4300" data-price="200">$4,500USD</td>
							</tr>
							<tr> 
								<td>Teaching</td>
								<td>N/A</td>
								<td>$1,950USD</td>
								<td>$2,300USD</td>
								<td>$2,700USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td class="extra-week-price" data-price-base="4300" data-price="200">$4,500USD</td>
							</tr>
							<tr> 
								<td>Medicine and Health Care</td>
								<td>N/A</td>
								<td>$2,000USD</td>
								<td>$2,400USD</td>
								<td>$2,800USD</td>
								<td>$3,200USD</td>
								<td>$3,600USD</td>
								<td>$4,000USD</td>
								<td>$4,400USD</td>
								<td class="extra-week-price" data-price-base="4600" data-price="200">$4,600USD</td>
							</tr>
							<tr> 
								<td>Nursing</td>
								<td>N/A</td>
								<td>$2,000USD</td>
								<td>$2,400USD</td>
								<td>$2,800USD</td>
								<td>$3,200USD</td>
								<td>$3,600USD</td>
								<td>$4,000USD</td>
								<td>$4,400USD</td>
								<td class="extra-week-price" data-price-base="4400" data-price="200">$4,600USD</td>
							</tr>
							<tr> 
								<td>Physiotherapy</td>
								<td>N/A</td>
								<td>$2,000USD</td>
								<td>$2,400USD</td>
								<td>$2,800USD</td>
								<td>$3,200USD</td>
								<td>$3,600USD</td>
								<td>$4,000USD</td>
								<td>$4,400USD</td>
								<td class="extra-week-price" data-price-base="4400" data-price="200">$4,600USD</td>
							</tr>
							<tr> 
								<td>Dentistry</td>
								<td>N/A</td>
								<td>$2,000USD</td>
								<td>$2,400USD</td>
								<td>$2,800USD</td>
								<td>$3,200USD</td>
								<td>$3,600USD</td>
								<td>$4,000USD</td>
								<td>$4,400USD</td>
								<td class="extra-week-price" data-price-base="4400" data-price="200">$4,600USD</td>
							</tr>
                            <tr> 
								<td>Sports</td>
								<td>N/A</td>
								<td>$1,950USD</td>
								<td>$2,300USD</td>
								<td>$2,700USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td class="extra-week-price" data-price-base="4300" data-price="200">$4,500USD</td>
							</tr>
              <tr> 
								<td>Humanitarian</td>
								<td>$1,600USD</td>
								<td>$2,000USD</td>
								<td>$2,400USD</td>
								<td>$2,800USD</td>
								<td>$3,200USD</td>
								<td>$3,600USD</td>
								<td>$4,000USD</td>
								<td>$4,400USD</td>
								<td class="extra-week-price" data-price-base="4400" data-price="200">$4,600USD</td>
							</tr>
              <tr> 
								<td>Environmental Awareness<br />and Protection </td>
								<td>N/A</td>
								<td>$1,950USD</td>
								<td>$2,300USD</td>
								<td>$2,700USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td class="extra-week-price" data-price-base="4300" data-price="200">$4,500USD</td>
							</tr>`
              <tr> 
								<td>Entrepreneurship</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>$2,800USD</td>
								<td>$3,200USD</td>
								<td>$3,600USD</td>
								<td>$4,000USD</td>
								<td>$4,400USD</td>
								<td class="extra-week-price" data-price-base="4400" data-price="200">$4,600USD</td>
							</tr>
              <tr> 
								<td>Youth and Community Development</td>
								<td>N/A</td>
								<td>$2,000USD</td>
								<td>$2,400USD</td>
								<td>$2,800USD</td>
								<td>$3,200USD</td>
								<td>$3,600USD</td>
								<td>$4,000USD</td>
								<td>$4,400USD</td>
								<td class="extra-week-price" data-price-base="4400" data-price="200">$4,600USD</td>
							</tr>
							<tr> 
								<td>Health and Wellness Retreat</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>$4,400USD</td>
								<td>$5,200USD</td>
								<td>$5,800USD</td>
								<td>$6,300USD</td>
								<td>$7,000USD</td>
								<td class="extra-week-price" data-price-base="7000" data-price="500">$7,500USD</td>
							</tr>
							<tr> 
								<td>Reggae Music and Dance</td>
								<td>$1,900USD</td>
								<td>$2,500USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td>$4,700USD</td>
								<td>$5,100USD</td>
								<td class="extra-week-price" data-price-base="5100" data-price="200">$5,300USD</td>
							</tr>
							<tr> 
								<td>Rastafarian Culture</td>
								<td>$1,600USD</td>
								<td>$2,000USD</td>
								<td>$2,500USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,500USD</td>
								<td>$5,000USD</td>
								<td class="extra-week-price" data-price-base="5000" data-price="200">$5,200USD</td>
							</tr>
							<tr> 
								<td>Internship and Dissertation</td>
								<td>N/A</td>
								<td>$2,100USD</td>
								<td>$2,500USD</td>
								<td>$2,900USD</td>
								<td>$3,300USD</td>
								<td>$3,700USD</td>
								<td>$4,100USD</td>
								<td>$4,500USD</td>
								<td class="extra-week-price" data-price-base="4500" data-price="200">$4,700USD</td>
							</tr>
							<tr> 
								<td>Professional</td>
								<td>$1,500USD</td>
								<td>$1,950USD</td>
								<td>$2,300USD</td>
								<td>$2,700USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td class="extra-week-price" data-price-base="4300" data-price="200">$4,500USD</td>
							</tr>
							<tr> 
								<td>Summer</td>
								<td>N/A</td>
								<td>$2,700USD</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
							</tr>
							<tr> 
								<td>Spring Break</td>
								<td>$1,000USD</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>N/A</td>
							</tr>
							<tr> 
								<td>Group trips (5-10 persons) </td>
								<td>$1,800USD</td>
								<td>$2,100USD</td>
								<td>$2,500USD</td>
								<td>$2,900USD</td>
								<td>$3,300USD</td>
								<td>$3,700USD</td>
								<td>$4,100USD</td>
								<td>$4,500USD</td>
								<td class="extra-week-price" data-price-base="4500" data-price="200">$4,700USD</td>
							</tr>
							<tr> 
								<td>Group trips (11-20 persons)</td>
								<td>$1,700USD</td>
								<td>$2,000USD</td>
								<td>$2,400USD</td>
								<td>$2,800USD</td>
								<td>$3,200USD</td>
								<td>$3,600USD</td>
								<td>$4,000USD</td>
								<td>$4,400USD</td>
								<td class="extra-week-price" data-price-base="4400" data-price="200">$4,600USD</td>
							</tr>
							<tr> 
								<td>Group trips (21+ persons)</td>
								<td>$1,600USD</td>
								<td>$1,900USD</td>
								<td>$2,300USD</td>
								<td>$2,700USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td class="extra-week-price" data-price-base="4300" data-price="200">$4,500USD</td>
							</tr>
							<tr> 
								<td>Corporate (5-10 employees)</td>
								<td>$1,800USD</td>
								<td>$2,100USD</td>
								<td>$2,500USD</td>
								<td>$2,900USD</td>
								<td>$3,300USD</td>
								<td>$3,700USD</td>
								<td>$4,100USD</td>
								<td>$4,500USD</td>
								<td class="extra-week-price" data-price-base="4500" data-price="200">$4,700USD</td>
							</tr>
							<tr> 
								<td>Corporate (11-20 employees)</td>
								<td>$1,700USD</td>
								<td>$2,000USD</td>
								<td>$2,400USD</td>
								<td>$2,800USD</td>
								<td>$3,200USD</td>
								<td>$3,600USD</td>
								<td>$4,000USD</td>
								<td>$4,400USD</td>
								<td class="extra-week-price" data-price-base="4400" data-price="200">$4,600USD</td>
							</tr>
							<tr> 
								<td>Corporate (21+ employees)</td>
								<td>$1,600USD</td>
								<td>$1,900USD</td>
								<td>$2,300USD</td>
								<td>$2,700USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td class="extra-week-price" data-price-base="4300" data-price="200">$4,500USD</td>
							</tr>
							<tr> 
								<td>English Lesson</td>
								<td>N/A</td>
								<td>$1,800USD</td>
								<td>$2,300USD</td>
								<td>$2,800USD</td>
								<td>$3,300USD</td>
								<td>$3,900USD</td>
								<td>$4,500USD</td>
								<td>$5,000USD</td>
								<td class="extra-week-price" data-price-base="5000" data-price="200">$5,200USD</td>
							</tr>
							<tr> 
								<td>English Lesson Add-on 10 hours</td>
								<td colspan="9">$400USD</td>
							</tr>
							<tr> 
								<td>English Lesson Add-on 20 hours</td>
								<td colspan="9">$750USD</td>
							</tr>
							<tr> 
								<td>English Lesson Add-on 30 hours</td>
								<td colspan="9">$1,050USD</td>
							</tr>
							<tr> 
								<td>English Lesson Add-on 40 hours</td>
								<td colspan="9">$1,400USD</td>
							</tr>
							<tr> 
								<td>Patois Lesson</td>
								<td>$1,500USD</td>
								<td>$1,900USD</td>
								<td>$2,400USD</td>
								<td>$2,900USD</td>
								<td>$3,400USD</td>
								<td>$4,100USD</td>
								<td>$4,600USD</td>
								<td>$5,100USD</td>
								<td class="extra-week-price" data-price-base="5300" data-price="200">$5,300USD</td>
							</tr>
							<tr> 
								<td>Patois Lesson Add-on 10 hours</td>
								<td colspan="9">$500USD</td>
							</tr>
							<tr> 
								<td>Patois Lesson Add-on 20 hours</td>
								<td colspan="9">$850USD</td>
							</tr>
							<tr> 
								<td>Patois Lesson Add-on 30 hours</td>
								<td colspan="9">$1,150USD</td>
							</tr>
							<tr> 
								<td>Patois Lesson Add-on 40 hours</td>
								<td colspan="9">$1,500USD</td>
							</tr>
							<tr> 
								<td>Customized</td>
								<td>$1,900USD</td>
								<td>$2,500USD</td>
								<td>$3,100USD</td>
								<td>$3,500USD</td>
								<td>$3,900USD</td>
								<td>$4,300USD</td>
								<td>$4,700USD</td>
								<td>$5,100USD</td>
								<td class="extra-week-price" data-price-base="5100" data-price="200">$5,300USD</td>
							</tr>
						</tbody>
					</table>
				</div>
				</div>
          <div class="please-note section-18">
					<h4>Please Note:</h4>
					<ul class="custom-item-list">
            <li>The price quoted is per person.</li>
            <li>A non-refundable deposit fee of $300USD must be paid before the processing of any application begins. 
            This is due when submitting your application.</li>
            <li>Combined projects attract an additional $100USD to cover administrative fees.</li>
            <li>$90USD for each extra day.</li>
            <li>There is no registration fee.</li>
            <li>Extension while in-country will attract $50USD for administrative fee plus the specific programme fee.</li>
            <li>All fees are due 90 days before departure or immediately if application is less than 90 days.</li>
            <li>The length of your programme is calculated from your arrival date to your departure date; if you will spend 
            all your time on the programme. If you are doing independent travel after your programme then your programme date is 
            your arrival date until your last date on the programme. Please ensure that your insurance covers your entire trip. </li>
            <li>If you stay on your programme over the agreed length of time reflected on your invoice you will be charged $90USD per day 
            to cover your food, accommodation and support.</li>
					</ul>
				</div>	
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
        <script src="js/numeral.min.js"></script>
        <script>
        $document.ready(function(){
          $('.update-price-btn').on('click', function(){
 
              var _ele = '#' + $(this).data('element');
              var _mode = $(this).data('mode');
              var _week = parseInt($(_ele).find('.extra-week:first').data('week')) - 8;
              
              if(_mode == 'plus'){ _week += 1; }else{ _week -= 1; }
              if(_week < 1){ _week = 1; }
              
              $(_ele).find('.extra-week:first').data('week', (_week + 8));
              $(_ele).find('.extra-week:first').html((_week + 8));
              
              $(_ele + ' td.extra-week-price').each(function(index){
                  var _price_base = parseInt($(this).data('price-base'));
                  var _price = parseInt($(this).data('price'));
                  _price = (_week * _price) + _price_base;
                  $(this).html('$' + numeral(_price).format('0,0') + 'USD');
              });
              
          });
        });
        </script>
    </body>
</html>
