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
                <li>Prices - Breakdown of Your Fees</li>
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
        
            <img src="images/pie_chart.png" alt="" style="float: right; height: 150px; width: auto; margin: 20px;">
        
            <div class="shell container  ">
              
              <div class="range">
            		<div class="cell-lg-12 text-lg-left">
            			<h1>Breakdown of Your Fees</h1>
            			<hr class="divider bg-mantis hr-lg-left-0">
            		</div>
            	</div>
            
            <div class="section-18">
            <p>RSVP Caribbean is fully funded and operated based on the programme fees of volunteers. As such, every dollar you 
            spend with us is accounted for and the Regional Director has to report to a Board of Directors. Your programme 
            fees cover direct and indirect costs to manage, operate and sustain the programmes and projects, and contribute to the 
            local community. Your programme fee is spent based on the following general categories; all listed percentages are an approximation:</p>
            </div>
            
            <div class="clear clearfix"></div>
            
            <!-- h4>Research and Programme Development – 15%</h4 -->
            <p><img src="images/breakdown_fees_01.png" alt="" class="img-responsive"></p>
            
            <div class="section-18" style="background-color: #FF831F; color: #fff; padding: 10px">
            <p>It is important that all programmes and projects are addressing particular needs and over time there are improvements. As such, 
            we spend a lot of time researching programmes and projects to ensure that the work of the volunteers will be beneficial. It is also 
            essential that local partners are involved and so time is spent meeting and planning with partners. From this, the programme and 
            partner plans are developed. The start-up of new destinations involves significant investment in preparation for volunteers and 
            existing destinations require ongoing development and readjustment to ensure all stakeholders are satisfied.</p>
            </div>
            
            <!-- h4>Planning, Operating and Administrative Costs – 18%</h4 -->
            <p><img src="images/breakdown_fees_02.png" alt="" class="img-responsive"></p>
            
            <div class="section-18" style="background-color: #5D3488; color: #fff; padding: 10px">
            <p>Planning for all aspects of the volunteering experience is costly. There are various systems and procedures which have to be in 
            place and followed to ensure successful operations. This includes, but is not limited to, different systems, partnership alliance, 
            emailing, procurement and others which all influence how the head office, marketing offices and destinations operate. Given all the 
            partners involved – volunteers, staff, host families, drivers, partner agencies and all other stakeholders, there are many internal and 
            external planning, operation and administrative costs which are necessary to effectively and efficiently sustain the company. Each programme, 
            host family, and each element (transport, flight, visa, immigration, among others) is a non-stop 24-hour support system which has to be 
            carefully monitored at all times at different levels of the organization.</p>
            </div>
            
            <!-- h4>Volunteer Support (Acceptance to Programme Completion) – 18%</h4 -->
            <p><img src="images/breakdown_fees_03.png" alt="" class="img-responsive"></p>
            
            <div class="section-18" style="background-color: #009EDB; color: #fff; padding: 10px;">
            <p>Planning for and arranging the entire volunteering process requires considerable input from all staff particularly the Regional Director, 
            Marketing Executives, Programme Development Director, Programme Coordinators and administrative support staff. Through a coordinated system 
            each person is tasked with completing different aspects to prepare for a volunteer’s experience. As such, the head office is adequately 
            staffed to ensure this is done. We have to treat each volunteer as unique and ensure we pay attention to every detail to match your skills, 
            interests and preferences. There is frequent and timely communication with each volunteer before they arrive and full documentation so that 
            your programme and accommodation can be carefully selected. We assist with information on visas, permits, food, language, health, travel and 
            many other matters. We offer 24/7 emergency service for you and your family back home.</p>
            </div>
            
            <!-- h4>Direct In-country Costs – 25%</h4 -->
            <p><img src="images/breakdown_fees_04.png" alt="" class="img-responsive"></p>
            
            <div class="section-18" style="background-color: #FE005A; color: #fff; padding: 10px;">
            <p>There are many costs which directly relate to a volunteer while in-country. This includes but is not limited to accommodation, meals, 
            transportation to and from the airport, daily transportation, cultural events, materials for programme partners, orientation, workshops, 
            meetings, equipment, donations for programme partners, programme audits, 24-hour support and many other expenses. This also includes 
            experienced staff, office operations and community outreach activities. An office in each location is important to providing the necessary 
            support for all our volunteers. A specific portion of a volunteer’s programme fee goes towards a fund that directly supports projects at a 
            community level. This significantly helps in addressing priority needs in a community.</p>
            </div>
            
            <!-- h4>Organizing, Implementing and Monitoring Programmes and Projects – 14%</h4 -->
            <p><img src="images/breakdown_fees_05.png" alt="" class="img-responsive"></p>
            
            <div class="section-18" style="background-color: #FFCA00; color: #000; padding: 10px;">
            <p>A significant amount of time goes into organizing your programme and preparing your timetable. Once this is done there are weekly, 
            monthly and quarterly monitoring and evaluation reports to ensure that the sustainable development goals are being met. The monitoring and 
            evaluation of programmes and projects helps us to clearly see the areas of improvement, what needs to be adjusted, what areas to focus on, 
            best practices and lesson learned. This allows us to adjust our programme and partner plan as necessary to ensure the greatest impact.</p>
            </div>
            
            <!-- h4>Communication and Promotion – 10%</h4 -->
            <p><img src="images/breakdown_fees_06.png" alt="" class="img-responsive"></p>
            
            <div class="section-18" style="background-color: #0FB279; color: #fff; padding: 10px;">
            <p>The work of RSVP Caribbean has to be promoted across the region and the world. Within the Caribbean persons need to be more aware of 
            the work that is being done and how this impacts the region. Internationally in order to get more volunteers to come to the Caribbean 
            various activities are held. This includes career fairs, information sessions, presentations and meetings. To support these activities, 
            information packs, brochures and various promotional items are developed. Through our team, across the world, we take the time to advise 
            volunteers on why they should volunteer in the Caribbean, with us.</p>
            </div>
            
            <h4>In general your fees also support the following :</h4>
                        
            <ul class="custom-item-list"> 
            <li>Over twenty (20) long-term volunteer programmes and projects</li>
            <li>Staff in the Caribbean and across the world</li>
            <li>A senior staff member for each destination to ensure proper planning,  continuity of programmes and programme impact</li>
            <li>An experienced recruitment, operations and administrative team to manage all aspects of the volunteering experience</li>
            <li>Constant development, review and improvements to policies and procedures for volunteer planning, support and experience, training, 
            health and safety issues and communication and emergency  protocols</li>
            <li>Implementation of health and safety procedures</li>
            <li>Emergency funding where necessary</li>
            <li>Staff travel costs for recruitment, training and development</li>
            <li>Accommodation and meals for volunteers</li>
            <li>Orientation and training for volunteers</li>
            </ul>
            
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
