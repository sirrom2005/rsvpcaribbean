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
                        <span class=
                        "icon-lg mdi mdi-account-multiple icon icon-white"></span>
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">About Us</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li>Team RSVP</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
			<!-- TEAM RSVP -->
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-5 text-lg-left">
                            <h1>Team RSVP</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <p>RSVP Caribbean is governed by a Board of Directors that ensures that there is accountability and transparency and that the best interest of the
                    volunteers and community is always at the forefront of any decision. These are unpaid professionals who give of their time and expertise. Each board member has
                    specific industry knowledge and uses his/her expertise to support the work of the staff across the Caribbean.</p>
                    <p>RSVP Caribbean also has a team that manages the day to day operations of the company; these are persons who are employed based on their specific talents and
                    expertise. The operations, administrative and programme support staff at RSVP are based in the Caribbean and
                    understand the specific context and are specialists in their area. The company employs overseas staff from
                    different nationalities in its marketing offices, promotes a culture of diversity and is an equal
                    opportunity employer. The Regional Director reports to the Board of Directors.</p>
                </div>
            </section>
			
            <!-- BOARD OF DIRECTORS -->
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-5 text-lg-left">
                            <h1>Board of Directors</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                      <div class="row section-18">
                          <div class="col-md-6 col-sm-6">
                              <div class="single-director thumbnail" style="min-height: 490px;">
                                  <h4>Sefton L. Cummings - FCCA, FCA (Chairman)</h4>
                                  <img src="images/sefton.jpg" alt="" class="img-circle img-thumbnail pull-left">
                                  <p class="small">Sefton Cummings has over 10 years management experience in the Credit Union
                                  movement serving in various capacities including Branch Manager, Operations
                                  Manager and currently Manager, Finance and Accounting. Prior to joining the Credit
                                  Union movement he held the position of Audit Senior at PricewaterhouseCoopers. As
                                  an Audit Senior he was responsible for planning and supervising audits to ensure
                                  reporting deadlines were met and that there was compliance with reporting standards. He
                                  was also assigned to several special projects because of his technical insight and keen attention to details.</p>
								                  <a data-toggle="collapse" href="#demonaa" style="color: #fff;">Read More</a>
                                  <div class="collapse" id="demonaa">
                                      <p class="inset-right-7p">Sefton has also served at leadership levels in other organizations. He has a passion for helping others and gives of his time and talents to his community, parish and country. He is currently serving as Elder and Treasurer of the Mount Edgecombe Seventh Day Adventist Church, Board Member of the Marjam Preparatory School and President of the Beverly Community Football Club. </p>
                                      <p class="inset-right-7p">He holds a diploma in Business Administration from the University of the West Indies and is a Chartered Accountant.</p>
                                      <p class="inset-right-7p">He loves football, is a big Arsenal fan and loves going to the beach. </p>
                                      <p class="inset-right-7p"><b>Motto:</b> "It is better to walk alone than with a crowd going in the wrong direction." </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                              <div class="single-director thumbnail" style="min-height: 490px;">
                                  <h4>Fiona Hyman - CFA, FCCA (Director)</h4>
                                  <img src="images/member-3.jpg" alt="" class="img-circle img-thumbnail pull-left">
                                  <p class="small">Fiona Hyman is a Senior Manager with over 10 years business advisory experience
                                  with PricewaterhouseCoopers (United Kingdom and Jamaica) providing Mergers and
                                  Acquisitions support services, due diligence valuations, financial modelling,
                                  corporate restructuring and financial reviews. Since 2009 Fiona has been advising
                                  clients on large and complex transactions and projects in the Caribbean, Middle East,
                                  Central and Eastern Europe and the UK. She works with large corporations, financial
                                  institutions, government agencies and private equity funds, principally on the
                                  full continuum of the transaction process, from initial analysis of financial and
                                  operational performance through the determination of the final purchase price.</p>
                                  <a data-toggle="collapse" href="#demonaaa" style="color: #fff;">Read More</a>
                                  <div class="collapse" id="demonaaa">
                                      <p class="inset-right-7p">She has a Bachelor of Science (Hons) in Applied Accounting from Oxford Brookes University in the UK and a Diploma in Accounting from the University of Technology of Jamaica. She is a Chartered Financial Analyst and Chartered Accountant. </p>
                                      <p class="inset-right-7p">She enjoys reading, travelling and exploring new cultures.</p>
                                      <p class="inset-right-7p"><b>Motto:</b> "By prayer and by work." </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 col-sm-6">
                              <div class="single-director thumbnail" style="min-height: 490px;">
                                  <h4>Ruchelle Thomas - Licensed Professional Nurse and Entrepreneur (Director)</h4>
                                  <img src="images/member-1.jpg" class="img-circle img-thumbnail pull-left">
                                  <p class="small">Ruchelle Thomas was born in a small city in Jamaica, then migrated to the Unites
                                  States of America as a teenage girl. She has always had a strong love for God,
                                  family and the community. Ruchelle began her career in the medical field in 1999 as
                                  a nurse with experience in hospitals and nursing homes, hospice care and home
                                  healthcare. She is also a legal Nurse Consultant, Quality Care Consultant and a
                                  certified Life Skills Coach and Instructor. Ruchelle is a seasoned entrepreneur who
                                  owns five successful businesses in Altanta, Georgia.</p>
                                  <a data-toggle="collapse" href="#demonaaaa" style="color: #fff;">Read More</a>
                                  <div class="collapse" id="demonaaaa">
                                      <p class="inset-right-7p">Ruchelle's passion in life is to give back and help those in need. She is the President for an awesome venture, where she's indulging in the rewards of being a steward. This is her non-profit organization called Helpers Health and Community Initiatives, which is geared towards helping poor and despaired communities locally and internationally, through the vehicle of healthcare. This includes medicines, medical supplies, food, clean water, clothing and education. Within this vehicle called Helpers Health and Community Initiatives is also a mission geared towards working with 'Girls without Fathers.' </p>
                                      <p class="inset-right-7p">Her education and experience in business growth and development has landed her as a member of the National Association of Professional Women. </p>
                                      <p class="inset-right-7p">Ruchelle is hardworking and committed to giving back to the less fortunate and creating a legacy for her two girls, Felicia and Ariel. Ruchelle is known for her leadership skills, creativity, and the ability to see the good in others. </p>
                                      <p class="inset-right-7p">She enjoys listening to music of all genres, dancing and watching a good movie.</p>
                                      <p class="inset-right-7p"><b>Motto:</b> "In order to serve others, one must first recognize his or her existence as part of this whole human experience. This experience is incomplete until we learn to love and serve each other." </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                              <div class="single-director thumbnail" style="min-height: 490px;">
                                  <h4>Wendy Tisdell (Director)</h4>
                                  <img src="images/member-2.jpg" alt="" class="img-circle img-thumbnail pull-left">
                                  <p class="small">Wendy has 25 years experience as Director - Finance and Operations of Prime
                                  Pump Propriety Limited Company with extensive experience in business and
                                  financial management. In 2009 after her volunteering experience in Jamaica she
                                  founded the BridgIT Water Foundation in Australia. The focus of the BridgIT Water
                                  Foundation is to provide safe, secure and sustainable water collection, storage and
                                  distribution systems in rural and peri-urban communities in developing
                                  countries and to provide these needy communities access to clean, safe water.
                                  The Foundation has completed projects in Jamaica, Bolivia, Tanzania, Nepal and is
                                  currently working on supporting projects in Ethiopia, India, Uganda and
                                  Malawi.</p>
                                  <a data-toggle="collapse" href="#demonav" style="color: #fff;">Read More</a>
                                  <div class="collapse" id="demonav">
                                      <p class="inset-right-7p">Wendy has responsibility for the planning, organizing, operating, marketing and financing of the Foundation. In 2015 Wendy was awarded the prestigious Order of Australia medal in recognition for outstanding contributions to Australia's international aid. </p>
                                      <p class="inset-right-7p">Wendy has an absolute fascination with different cultures and also the similarities between cultures.  She has a passion for travelling. </p>
                                      <p class="inset-right-7p"><b>Motto:</b> "We must love today. In our service of love to the poor, we are called to give them what they need today.  Today someone is hungry or thirsty, today someone is naked or homeless, and today someone is sick or dying.  Today someone is in need of the warmth of a human hand, or in need of a human voice.  It must be given today.  We must love today.  Tomorrow it may be too late." </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
            </section> 
            
            <section class="section-41">
                <div class="shell container">
						            <div class="range">
                            <div class="cell-lg-5 text-lg-left">
                                <h1>Staff</h1>
                                <hr class="divider bg-mantis hr-lg-left-0">
                            </div>
                        </div>
                        <div class="row section-18">
                            <div class="col-md-6 col-sm-6">
                                <div class="single-director thumbnail"  style="min-height: 540px;">
                                    <h4>Bridgette B. Barrett - Ph.D. (Regional Director)</h4>
                                    <img src="images/bridgette.jpg" alt="" class="img-circle img-thumbnail pull-left">
                                    <p class="small">Since 2008 Bridgette has successfully managed volunteer programmes in three cities across Jamaica. She coordinated all aspects of the volunteering experience and
                                    is very knowledgeable, creative, people-centred, volunteer-conscious, partner-aware and results-oriented. She has managed as few as 5 volunteers to as many as 120 volunteers at once, 
                                    and to date has worked with over 2,000 volunteers from over 40 countries. She has led a team which sees a monthly rating of 94% or more, volunteer satisfaction with their experience. Her
                                    extensive experience in volunteer programme and project management makes her a specialist who thrives on doing the best for the volunteers and all partners. She is
                                    very good at developing systems and procedures for maximum efficiency and naturally develops meaningful and lasting relationships with partners based on shared principles, collaboration, 
                                    mutual trust and respect.</p><a data-toggle="collapse" href=
                                    "#demonau" style="color: #fff;">Read More</a>
                                    <div class="collapse" id="demonau">
                                        <p class="inset-right-7p">Bridgette has been a Project Manager since 2005 and Consultant to local and international development organizations in Jamaica and has managed projects for 
                                        the Canadian International Development Agency, the Canadian High Commission and the New Zealand High Commission. She has worked on projects funded by the World Bank, European Union and 
                                        United States Agency for International Development. She has worked in other countries which include Turks and Caicos Islands, Grenada, St. Lucia, St. Vincent and the Grenadines and 
                                        Dominica and participated in cultural and professional development sessions in the Peru, the United Kingdom, Argentina, Bolivia, Australia, Bahamas and the United States of America. </p>
                                        <p class="inset-right-7p">Bridgette holds a Ph.D. in Conflict Analysis, Management and Resolution with a Community Development concentration; a Master of Science degree in Sociology and 
                                        a Bachelor of Science degree in Psychology.  </p>
                                        <p class="inset-right-7p">Her role is to manage the operation, administration and programme development of RSVP Caribbean and support the team and volunteers in ensuring that all parties 
                                        have a satisfactory experience.  </p>
                                        <p class="inset-right-7p">She enjoys spending time with her family, telling stories about her father, travelling, photography, playing dominoes, going to car shows, eating mangoes, 
                                        decorating and reading.  </p>
                                        <p class="inset-right-7p"><b>Motto:</b> "If I can help somebody as I pass along, then my living shall not be in vain." </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-director thumbnail"  style="min-height: 540px;">
                                    <h4>Shelly-Ann Cummings (Operations
                                    Director)</h4>
                                    <img src="images/shelly-ann.jpg" alt="" class="img-circle img-thumbnail pull-left">
                                    <p class="small">Shelly-Ann has worked in the hotel industry for 12 years in sales and reservations with 8 years in management and
                                    is very knowledgeable about the needs of clients from various countries across the world and local partners. She has
                                    extensive experience in managing groups for projects and conferences both internationally and locally. Shelly-Ann is
                                    an excellent problem solver, communicator and a hard worker. She is very calm, organized, positive and enjoys working
                                    with people. Her preference is to see the glass half full and it helps her to look at solutions and not problems.</p><a data-toggle="collapse" href=
                                    "#demonauu" style="color: #fff;">Read More</a>
                                    <div class="collapse" id="demonauu">
                                        <p class="inset-right-7p">Her passion though is teaching and she loves to work with young children. As such she enjoys all things related to education and learning 
                                        and is very creative in finding ways to get children to enjoy their education. </p>
                                        <p class="inset-right-7p">Her role is to ensure that all logistics related to the volunteers are effectively and efficiently coordinated.  </p>
                                        <p class="inset-right-7p">Shelly-Ann enjoys meeting and interacting with persons from diverse backgrounds, being creative with things and 
                                        situations and spending time with her children. </p>
                                        <p class="inset-right-7p"><b>Motto:</b> "Life is filled with things worth doing." </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-director thumbnail">
                                    <h4>Debbie Bailey (Marketing Executive)</h4>
                                    <!-- img src="images/bridgette.jpg" alt="" class="img-circle img-thumbnail pull-left" -->
                                    <p class="small">Debbie resides in Plantation, Florida, however she was born and raised in Manchester, Jamaica. She holds a Bachelors Degree in Accounting and a Masters in Finance. 
                                    If asked with whom are you most comfortable, her beaming response is always "with the less fortunate."  Debbie prides her love for humanity on her formative years.  She is from a home 
                                    that teaches the value of humanity. </p><a data-toggle="collapse" href="#staff03" style="color: #fff;">Read More</a>
                                    <div class="collapse" id="staff03">
                                        <p class="inset-right-7p">Among her many strong beliefs is the fact that "no one is better than I am and I am not better than another." Although her background is Accounting and 
                                        Finance, Debbie also possesses a flair to market and expand companies.  She is the proud owner of a Yacht Refinishing company in Florida where is able to maneuver the industry to 
                                        align her business with ideal partnerships. Her expertise also affords her the joy of consulting with many small businesses to make them profitable. </p>
                                        <p class="inset-right-7p"><b>Motto:</b> "Faith does not make things easy, it makes them possible."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single-director thumbnail">
                                    <h4>Carolyn Brown (Marketing Executive)</h4>
                                    <!-- img src="images/shelly-ann.jpg" alt="" class="img-circle img-thumbnail pull-left" -->
                                    <p class="small">An introvert by appearance, Carolyn possesses an exceptionally warm personality and finds delight in breaking new grounds to achieve her goals. She's passionate about 
                                    helping others, so it is no surprise that she earned her undergraduate degree in Psychology, and currently pursuing a graduate degree in Social Work, with emphasis on Community Development 
                                    and Leadership. </p><a data-toggle="collapse" href="#staff04" style="color: #fff;">Read More</a>
                                    <div class="collapse" id="staff04">
                                        <p class="inset-right-7p">She has years of experience working as a Programme Officer in a voluntary-based organization, and comes to RSVP with the required knowledge for identifying 
                                        and ensuring volunteers needs are met and matched with the right programme or project. A few of her leisure activities include: reading non-fiction novels, cooking, dancing/zumba, 
                                        travelling and chilling with family and friends. Her choice career will be in academia or local government.</p>
                                        <p class="inset-right-7p"><b>Motto:</b> "Being confident of this very thing, that He which hath begun a good work in you will perform it until the day of Jesus Christ." </p>
                                    </div>
                                </div>
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