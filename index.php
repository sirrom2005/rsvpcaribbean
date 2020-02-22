<?php 
include_once('config/config.php'); 
$fileInfo = pathinfo(__FILE__);
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
    <head>
        <!-- Site Title-->
        <title><?php echo isset($metaData[$fileInfo['filename']]['title'])? $metaData[$fileInfo['filename']]['title'] : $metaData['default']['title']; ?></title>
        <!-- meta name="keywords" content="rsvp,caribbean,volunteers,charity,donations">
        <meta name="description" content="rsvp caribbean volunteers providing voluntary service for Jamaica, Grenada, and St.Lunci" -->
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="google-site-verification" content="buMyhKLTvtaStAX4HwUM2vRCmZSsMVXj7zcQ9Yt8PmE" />
		    <meta name="msvalidate.01" content="2FAD7D44208A7C309415F0ECB0FB57E7" />
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
        <div class="page ">
            <div class="page-loader page-loader-variant-1">
                <div>
                    <img class='img-responsive' style='margin-top: -20px;margin-left: -18px;' width='330' height='67' src='images/intense/logo-big.png' alt='' />
                    <div class="offset-top-41 text-center">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
            <!-- Page Head-->
            <header class="page-head slider-menu-position">
                <!-- RD Navbar Transparent-->
                <div class="rd-navbar-wrap">
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
                <!--Swiper-->
                <?php include('layout/banner.php'); ?>
                
            </header>
            <!-- Page Contents-->
            <main class="page-content">
            
                <!-- section class="section-98">&nbsp;</section -->
                
                <?php /*/ ?>
                <!-- Welcome-->
                <section id="home-section-welcome" class="rsvp-margin rsvphomesection-one section-98 section-md-110">
                    <div class="shell">
                        <div class="range range-xs-center">
                            <div class="cell-md-7">
                               <h3>About RSVP Caribbean</h3>
							   <p style="line-height: 35px;">RSVP Caribbean Volunteers was conceptualized and developed based on the lack of suitable, affordable and safe needs-based programmes and projects for volunteers who wish to come to the Caribbean. RSVP Caribbean offers programmes and projects that are properly researched and make a meaningful difference. If you give of your time as a volunteer you need to know that it was worth it, you need to know that it was useful, you need to know that the company truly cares about the programmes, projects and communities that you work in and that is what RSVP Caribbean does – Respond…Discover…Change Lives.</p>
                            </div>
							<div class="col-md-5"> 
								<div class="home-feature-img"> 
									<img class="img-responsive img-rounded img-thumbnail" src="images/home-img-new.jpg" alt="RSVP Caribbean" />
								</div>
							</div>
                        </div>
                    </div>
                </section>
                <?php //*/ ?>
                
                <?php /*/ ?>
                <!-- Section main future-->
                <section class="context-dark">
                    <section class="section-66 section-pattern section-top-50 bg-orange-custom section-triangle section-triangle-bottom">
                        <div class="shell">
                            <div class="range range-sm-center">
                                <h2><span class="big"> RESPOND…DISCOVER…CHANGE LIVES.</span></h2>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                            <polyline points="0,0 60,0 29,29" style="fill:#f42a18"></polyline>
                        </svg>
                    </section>
                </section>
                <!-- Button Ansi-->
                <?php //*/ ?>
				
                <?php /*/ ?>
                <!-- About Us-->
                <section>
                    <div data-on="false" data-md-on="true" class="rd-parallax">
                    <div data-speed="0.35" data-type="media" data-url="images/backgrounds/background-189361982.jpg" class="rd-parallax-layer"></div>
                    <div data-speed="0" data-type="html" class="rd-parallax-layer"  style="background-color: rgba(0, 0, 0, 0.8);">
                    <div class="shell section-98 section-md-110">
                        <div class="range range-xs-center section-top-124 section-bottom-110">
                            <div class="cell-xs-10 cell-sm-11 cell-lg-12">
                              <div class="range range-xs-center" style="color: #fff; text-align: center;">
                                <div class="cell-sm-6 cell-lg-4">
                                  <!-- Icon Box Type 4-->
                                  <span class="icon icon-circle icon-bordered icon-outlined icon-orange1-filled">
                                    <li class="fa fa-info-circle"></li>
                                  </span>
                                  <div>
                                    <h4 class="text-uppercase offset-top-30 text-bold">Our Approach</h4>
                                    <div class="inset-left-7p inset-right-7p" style="text-align: left;">
                                        <ul class="home-ul"> 
        									<li>Issues and Needs-Based Programmes<br>and Projects</li>
        									<li>Sustainable Development Goals</li>
        									<li>Strategic Focus</li>
        									<li>Community Impact</li>
        								</ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="cell-sm-6 cell-lg-4 offset-top-66 offset-sm-top-0">
                                  <!-- Icon Box Type 4-->
                                  <span class="icon icon-circle icon-bordered icon-outlined icon-blue1-filled">
                                    <li class="fa fa-child"></li>
                                  </span>
                                  <div>
                                    <h4 class="text-uppercase offset-top-30 text-bold">Volunteering with Children</h4>
                                    <div class="inset-left-7p inset-right-7p" style="text-align: justify;"><p>Many children in the Caribbean face various challenges. This includes, 
                                    but is not limited to, abandonment, neglect, abuse, trafficking and general lack of care. The aim of the Child Care 
                                    and Protection Programme is to provide assistance to children from difficult backgrounds.</p></div>
                                  </div>
                                </div>
                                <div class="cell-sm-6 cell-lg-4 offset-top-66 offset-lg-top-0">
                                  <!-- Icon Box Type 4-->
                                  <span class="icon icon-circle icon-bordered icon-outlined icon-carrot-filled">
                                    <li class="fa fa-users"></li>
                                  </span>
                                  <div>
                                    <h4 class="text-uppercase offset-top-30 text-bold">Board of Directors</h4>
                                    <div class="inset-left-7p inset-right-7p" style="text-align: left;">
                                    <ul class="home-ul"> 
										<li>Sefton L. Cummings<br>FCCA, FCA (Chairman) </li>
										<li>Fiona Hyman<br>CFA, FCCA (Director) </li>
										<li>Ruchelle Thomas<br>Licensed Professional Nurse, Legal Nurse Consultant, Entrepreneur, Life-Skills Coach and Mentor (Director) </li>
										<li>Wendy Tisdell (Director)</li>
									</ul>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </section>
                <!-- Buy Now-->
                <?php //*/ ?>
				
                <?php /*/ ?>
                <!-- Skills-->
                <!-- section style="background: #191919 url(images/background-two.png);" class="section-98 section-md-110 context-dark" -->
                <section style="background: #D43705" class="section-98 section-md-110 context-dark">
                    <div class="shell">
                        <div class="range">
                            <div class="cell-sm-8 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0">
                                <div class="range">
                                    <div class="cell-sm-6 cell-md-3 cell-md-preffix-0">
                                        <!-- Counter type 1-->
                                        <div class="counter-type-1">
                                            <div class="h1 text-center">
                                                <span data-step="3000" data-from="0" data-to="58249" class="big text-bold text-blue-gray counter"></span>
                                            </div>
											<div class="sp-icon">
                                                <hr class="divider bg-white">
											</div>
                                            <h6 class="text-uppercase text-center text-bold text-spacing-60 offset-top-20">Projects</h6>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6 cell-md-3 offset-top-66 offset-sm-top-0">
                                        <!-- Counter type 1-->
                                        <div class="counter-type-1">
                                            <div class="h1 text-center">
                                                <span data-speed="2500" data-from="0" data-to="246" class="big text-blue-gray text-bold counter"></span>
                                                <span class="big text-malibu text-bold">K</span>
                                            </div>
											<div class="sp-icon"> 
												<hr class="divider bg-white">
											</div>
                                            <h6 class="text-uppercase text-bold text-center text-spacing-60 offset-top-20">Happy Clients</h6>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6 cell-md-3 offset-top-66 offset-md-top-0">
                                        <!-- Counter type 1-->
                                        <div class="counter-type-1">
                                            <div class="h1 text-center">
                                                <span data-step="1500" data-from="0" data-to="1200" class="big text-bold text-blue-gray counter"></span>
                                            </div>
											<div class="sp-icon"> 
												<hr class="divider bg-white">
											</div>
                                            <h6 class="text-uppercase text-bold text-center text-spacing-60 offset-top-20">Hours of Coding</h6>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6 cell-md-3 offset-top-66 offset-md-top-0">
                                        <!-- Counter type 1-->
                                        <div class="counter-type-1">
                                            <div class="h1 text-center">
                                                <span data-speed="1300" data-from="0" data-to="834" class="big text-blue-gray text-bold counter"></span>
                                                <span class="big text-malibu text-bold">K</span>
                                            </div>
											<div class="sp-icon"> 
												<hr class="divider bg-white">
											</div>
                                            <h6 class="text-uppercase text-bold text-center text-spacing-60 offset-top-20">Lines of Code</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php //*/ ?>
				
                <?php /*/ ?>
                <!-- Features-->
                <section class="section-66 section-collar">
                    <div class="shell shell-wide offset-top-0">
                        <div class="range">
							<div class="col-sm-6 col-md-6"> 
								<div class="rsvps-services"> 
								<h4 class="offset-top-10"><span class="big">Even More Features Available</span></h4>
                                
                                <div style="padding-left:0" class="cell-sm-6 cell-xl-3 offset-top-50 offset-sm-top-0">
								<!-- Icon Box Type 2-->
								<div class="unit unit-sm unit-sm-horizontal text-sm-left">
								<div class="unit-body">
								<h4 class="text-bold text-uppercase offset-sm-top-14">Integrity</h4>
								</div>
								</div>
								</div>
								
                                <div style="padding-left:0" class="cell-sm-6 cell-xl-3 offset-top-50 offset-sm-top-0">
								<!-- Icon Box Type 2-->
								<div class="unit unit-sm unit-sm-horizontal text-sm-left">
								<div class="unit-body">
								<h4 class="text-bold text-uppercase offset-sm-top-14">Quality Service</h4>
								</div>
								</div>
								</div>
								
								<div style="padding-left:0" class="cell-sm-6 cell-xl-3 offset-top-50 offset-sm-top-0">
								<!-- Icon Box Type 2-->
								<div class="unit unit-sm unit-sm-horizontal text-sm-left">
								<div class="unit-body">
								<h4 class="text-bold text-uppercase offset-sm-top-14">Mutual Respect</h4>
								</div>
								</div>
								</div>
								
								<div style="padding-left:0" class="cell-sm-6 cell-xl-3 offset-top-50 offset-sm-top-0">
								<!-- Icon Box Type 2-->
								<div class="unit unit-sm unit-sm-horizontal text-sm-left">
								<div class="unit-body">
								<h4 class="text-bold text-uppercase offset-sm-top-14">Sustainability</h4>
								</div>
								</div>
								</div>
								
								</div>
							</div>
							<div class="col-md-6 col-sm-6"> 
								<div class="rsvps-services"> 
								<h4 class="offset-top-10"><span class="big">RSVP Services</span></h4>
                                
                                <div style="padding-left:0" class="cell-sm-6 cell-xl-3 offset-top-50 offset-sm-top-0">
								<!-- Icon Box Type 2-->
								<div class="unit unit-sm unit-sm-horizontal text-sm-left">
								<div class="unit-body">
								<h4 class="text-bold text-uppercase offset-sm-top-14">Individual Volunteering Service</h4>
								</div>
								</div>
								</div>
                                
                                <div style="padding-left:0" class="cell-sm-6 cell-xl-3 offset-top-50 offset-sm-top-0">
								<!-- Icon Box Type 2-->
								<div class="unit unit-sm unit-sm-horizontal text-sm-left">
								<div class="unit-body">
								<h4 class="text-bold text-uppercase offset-sm-top-14">Group Volunteering Service</h4>
								</div>
								</div>
								</div>
                                
                                <div style="padding-left:0" class="cell-sm-6 cell-xl-3 offset-top-50 offset-sm-top-0">
								<!-- Icon Box Type 2-->
								<div class="unit unit-sm unit-sm-horizontal text-sm-left">
								<div class="unit-body">
								<h4 class="text-bold text-uppercase offset-sm-top-14">Summer Volunteering Service</h4>
								</div>
								</div>
								</div>
                                
                                <div style="padding-left:0" class="cell-sm-6 cell-xl-3 offset-top-50 offset-sm-top-0">
								<!-- Icon Box Type 2-->
								<div class="unit unit-sm unit-sm-horizontal text-sm-left">
								<div class="unit-body">
								<h4 class="text-bold text-uppercase offset-sm-top-14">Service Language Lesson Service</h4>
								</div>
								</div>
								</div>
                                
                                <div style="padding-left:0" class="cell-sm-6 cell-xl-3 offset-top-50 offset-sm-top-0">
								<!-- Icon Box Type 2-->
								<div class="unit unit-sm unit-sm-horizontal text-sm-left">
								<div class="unit-body">
								<h4 class="text-bold text-uppercase offset-sm-top-14">Corporate Volunteering Service</h4>
								</div>
								</div>
								</div>
                                
								</div>
							</div>
                        </div>
                    </div>
                </section>
				<?php //*/ ?>
				
                <?php /*/ ?>
                <section style="background: #191919 url(images/backgrounds/background-02-481x360.png);" class="section-34 section-top-66 context-dark">
                    <h4 class="text-center">RSVP Member</h4>
                </section>
                <?php //*/ ?>
				
                <?php /*/ ?>
                <!-- section our team-->
                <section>
                
                    <div data-on="false" data-md-on="true" class="rd-parallax">
                    <div data-speed="0.35" data-type="media" data-url="images/backgrounds/background-76636648.jpg" class="rd-parallax-layer"></div>
                    <div data-speed="0" data-type="html" class="rd-parallax-layer" style="background-color: rgba(255, 255, 255, 0.5);">
                
                    <div class="shell section-top-50 section-bottom-110 rstr-tm">
                        <div class="range range-xs-center offset-top-66">
                            <div class="rsvp-member"> 
								<div class="col-md-4 col-sm-4"> 
								<div class="single-member"> 
									<img src="images/member-1.jpg" alt="" />
									<h4 class="membername">Ruchelle Thomas</h4>
								</div>
								</div>
								<div class="col-md-4 col-sm-4"> 
								<div class="single-member"> 
									<img src="images/member-2.jpg" alt="" />
									<h4 class="membername">Wendy</h4>
								</div>
								</div>
								<div class="col-md-4 col-sm-4"> 
								<div class="single-member"> 
									<img src="images/member-3.jpg" alt="" />
									<h4 class="membername">Fiona</h4>
								</div>
								</div>
							</div>
                        </div>
                    </div>
                    
                    </div>
                    </div>
                    
                </section>
                <?php //*/ ?>
                
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
    </body>
</html>