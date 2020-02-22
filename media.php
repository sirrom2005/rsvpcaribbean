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
    <div class="page about-t">
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
                                    <a href="index.html">
                                        <img style='margin-top: -35px;margin-left: -25px;' width='138' height='94' src='images/intense/logo-light.png' alt='' />
                                    </a>
                                </div>
                            </div>
                            <div class="rd-navbar-menu-wrap">
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-mobile-scroll">
                                        <!--Navbar Brand Mobile-->
                                        <div class="rd-navbar-mobile-brand">
                                            <a href="index.html">
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
      <section class="breadcrumb-classic first-bc-margin text-center">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-account-multiple icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Media</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.html">Home</a></li>
                <li>Media
                </li>
              </ul>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
    <polyline points="0,0 60,0 29,29" style="fill:#f42a18"></polyline>
</svg>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <!-- NEWS AND UPDATES  -->
        <section class="section-98 section-sm-40 vol-exp">
          <div class="shell container  ">
				<div class="range">
					<div class="cell-lg-12 text-lg-left">
						<h1>News and Updates</h1>
						<hr class="divider bg-mantis hr-lg-left-0">
					</div>
				</div>
				<div class="section-sm-top-50 section-media">
					<h4 class="sub-media-title">News Update </h4>  
					<p>RSVP Caribbean recently secured additional partnerships with orphanages, child care facilities, hospitals, health care centres in Jamaica, Grenada and St. Lucia. This will allow RSVP Caribbean to expand it operations and facilitate more volunteers on its programmes and projects. We are pleased that we have added to our growing list of partners who are committed to facilitating our volunteers – Respond…Discover…Change Lives.  </p>
					
					<div class="red-sig"> 
						<!-- <h5>PRESS RELEASE</h5><br /> -->
					</div>
					<div class="row"> 
						<div class="col-md-6 col-sm-6"> 
						<div class="photo-gallery"> 
						<ul class="resources-ul"> 
						<!-- <h4>Photo Gallery</h4> -->
<!-- <li>Child Care and Protection Programme </li><li> Teaching Programme  </li><li> Medicine Programme </li><li> Nursing Programme </li><li> Physiotherapy Programme </li><li> Dentistry Programme </li><li> Holistic Retreat Programme </li><li> Sports Programme </li><li> Humanitarian Programme </li><li> Environmental Awareness and Protection Programme </li><li> Entrepreneurship Programme </li><li> Rastafarian Programme </li><li> Youth and Community Development Programme </li><li> Internship and Dissertation Project </li><li> Professional Programme Project </li><li> Summer Project </li><li> Spring Break Project </li><li> Group Trip Project </li><li> Corporate Project </li><li> Language Lessons </li><li> Host Families </li><li> Grenada </li><li> Jamaica </li><li> St. Lucia </li> -->
						</ul>
					</div>
						</div>
						<div class="col-md-6 col-sm-6"> 
						<div class="video-gallery"> 
						<ul class="resources-ul"> 
						<!-- <h4>Video Gallery</h4> -->
<!-- <li>Child Care and Protection Programme </li><li> Teaching Programme  </li><li> Medicine Programme </li><li> Nursing Programme </li><li> Physiotherapy Programme </li><li> Dentistry Programme </li><li> Holistic Retreat Programme </li><li> Sports Programme </li><li> Humanitarian Programme </li><li> Environmental Awareness and Protection Programme </li><li> Entrepreneurship Programme </li><li> Rastafarian Programme </li><li> Youth and Community Development Programme </li><li> Internship and Dissertation Project </li><li> Professional Programme Project </li><li> Summer Project </li><li> Spring Break Project </li><li> Group Trip Project </li><li> Corporate Project </li><li> Language Lessons </li><li> Host Families </li><li> Grenada </li><li> Jamaica </li><li> St. Lucia </li> -->
						</ul>
					</div>
						</div>
					</div>
				</div>
        </section>	
        <section class="section-98 section-sm-40 blog-rsvp">
          <div class="shell container  ">
				<div class="range">
					<div class="cell-lg-12 text-lg-left">
						<h1>Blog </h1>
						<hr class="divider bg-mantis hr-lg-left-0">
					</div>
				</div>
				<div class="section-sm-top-50 section-media">
					<h4 class="sub-media-title">The People </h4>  
					<p>Every region has its own unique culture and way of life. Each island within the Caribbean offers a one of a kind experience but as a region there are a few things that the islands have in common. In this blog we want to share with you a little about the people of the Caribbean .</p>
					<p>The people of the Caribbean are easy going, warm and friendly. They take a gloomy day and make it pleasurable, they take a dull moment and make it extraordinary, they take a rainy day and make it into a family fun-filled day and they take a serious moment and  somehow find the humour in it. Despite various hardships, Caribbean people are eternal optimists who tend to look at the brighter side, prefer to see the glass as half full and explore opportunities that emerge from hardships. There is acknowledgement of the current situation but also a glimmer of hope that things can change – so the people will positively twist situations and “make fashion” to survive.</p>
					<p>With phrases like “never a dull moment”, “no problem” and “everything a everything”, there is the collective determination of the people to see the good in everything and so push beyond their limits and achieve  great success just by believing that all things are possible. A rainy day may cause gloom to many but not for Caribbean people as this is a time to get creative with games and invent recipes. There are some traditional menus for a rainy day such as soup, dumplings and curried chicken or rice with mackerel. Nothing is ever very serious to a Caribbean person, they see humour in everything and will always qualify something with a disclaimer “it is not funny but.” If everything is taken too seriously what a stiff region this would be so we lighten up things a bit. </p>
					<p>Strong, resilient, creative, warm, fun, talented and determined are just some of the words to describe the people of the Caribbean but don’t just take our word for it come and see for yourself. </p>
					<p><b>So why not Respond…and come to Discover more about the people of the Caribbean. </b></p>
					
					<div class="row"> 
						<!-- <div class="col-md-2 col-sm-2"> 
							<div class="single-media"> 
								<h4>TESTIMONIALS</h4>
								<i class="fa fa-certificate"></i>
								<p>Volunteers </p> <p>Partners  </p> <p> Host Families </p>
							</div>
						</div> 
						<div class="col-md-3 col-sm-3"> 
							<div class="single-media"> 
								<h4>VOLUNTEER STORIES </h4>
								<i class="fa fa-archive"></i>
							</div>
						</div> -->
						<div class="col-md-2 col-sm-2"> 
							<div class="single-media"> 
								<h4>Brochure  </h4>
								<a class="sp-media" href="#">Click to download </a>
							</div>
						</div><!-- 
						<div class="col-md-2 col-sm-2"> 
							<div class="single-media"> 
								<h4>NEWSLETTER   </h4>
								<i class="fa fa-envelope"></i>
								
							</div>
						</div> -->
						<div class="col-md-4 col-sm-4"> 
							<div class="single-media"> 
								<h4>Social Media  </h4>
								<ul class="social-media-link list-inline"> 
								                                        <li>
                                            <a class="icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon fa fa-youtube icon-xxs icon-circle icon-darkest-filled" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="#"></a>
                                        </li>
                                        <li>
                                            <a class="icon fa fa-instagram icon-xxs icon-circle icon-darkest-filled" href="#"></a>
                                        </li>
								</ul>
								
							</div>
						</div>
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
    </body>
</html>
