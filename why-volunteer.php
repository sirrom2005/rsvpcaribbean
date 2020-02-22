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
                            <li>Why Volunteer with RSVP?</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
		
        
        <!-- WHY VOLUNTEER WITH RSVP -->
        <section class="section-41">
                
                <div class="shell container">
                
                    <div class="range">
                        <div class="cell-lg-5 text-lg-left">
                            <h1>Why Volunteer with RSVP?</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    	
					         <p>RSVP Caribbean is based in Jamaica with key partners in different Caribbean islands. As nationals of the various countries 
                   the team understands the important needs that should be focused on and are committed to ensuring that volunteers make a meaningful 
                   difference while on their programmes. With RSVP Caribbean, the team focuses on impact while ensuring that all partners are considered 
                   in the process. </p>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demoa"><i class="fa fa-plus"></i> Accountability and Transparency</a></h4>
                                <div class="collapse" id="demoa">
                                    <p class="inset-right-7p">There is an unpaid Board of Directors that reviews the operations of the company every quarter to ensure that the volunteering
                                    experience is excellent and the community impact is evident. We comply with the highest standards of management, accountability, best
                                    practices and environmental stewardship. An annual report is also prepared and published.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demob"><i class="fa fa-plus"></i> Affordability</a></h4>
                                <div class="collapse" id="demob">
                                    <p class="inset-right-7p">Prices are reasonable and competitive; and RSVP Caribbean ensures value for money. The communities and partners benefit from
                                    the contributions made from programme and project fees.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#democ"><i class="fa fa-plus"></i> Communication</a></h4>
                                <div class="collapse" id="democ">
                                    <p class="inset-right-7p">RSVP Caribbean offers timely and accurate communication through our website, emails, personal webpage, telephone
                                    conversations and text messaging. All information is kept up-to-date and changes are quickly communicated.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demod"><i class="fa fa-plus"></i> Community Impact and Value for Money</a></h4>
                                <div class="collapse" id="demod">
                                    <p class="inset-right-7p">The purpose of RSVP Caribbean is to serve persons in needs and so the impact being made at the community level is noticeable.
                                    Where possible resources are bought from community businesses and through focused intervention RSVP Caribbean supports giving back to areas of need.
                                    Volunteers, host families, partners, communities and local businesses are all important in the process of changing lives.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demoe"><i class="fa fa-plus"></i> Expertise and Knowledge</a></h4>
                                <div class="collapse" id="demoe">
                                    <p class="inset-right-7p">All staff are competent, experienced and knowledgeable about the culture, requirements, programmes, projects,
                                    accommodation and way of life in each island. They will be able to answer all your questions and guide you based on your specific objectives for
                                    volunteering. We offer a Caribbean operated volunteering business that understands the Caribbean context. Each volunteer is directly assigned to one
                                    staff member pre-arrival and upon arrival to a Programme Coordinator who is their first point of contact. Two other staff members act as the next
                                    point of contact if for some reason the assigned staff member is not available.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demof"><i class="fa fa-plus"></i> Flexible Dates and Duration</a></h4>
                                <div class="collapse" id="demof">
                                    <p class="inset-right-7p">In most cases you choose your dates and how long you want to stay. Except for factors beyond our control such as school holidays,
                                    public holidays, group dates, natural disasters or community downtime; you are able to determine when you want to come and how long you want to stay.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demog"><i class="fa fa-plus"></i> Fun</a></h4>
                                <div class="collapse" id="demog">
                                    <p class="inset-right-7p">With all the work you will also have time for fun. Caribbean nationals know how to relax and have a good time – you will get to
                                    Discover while Changing Lives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demoh"><i class="fa fa-plus"></i> Good Standard Accommodations</a></h4>
                                <div class="collapse" id="demoh">
                                    <p class="inset-right-7p">All our accommodations are carefully checked to ensure safety, security and comfort. You will have the basic amenities –
                                    electricity, clean water, a comfortable bed, adequate storage and a lovely family who will treat you as one of their very own.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demoi"><i class="fa fa-plus"></i> High Quality Needs-Based Programmes and Projects</a></h4>
                                <div class="collapse" id="demoi">
                                    <p class="inset-right-7p">All programmes and projects are properly researched and linked to local, national, regional and international
                                    priorities and are specifically aimed at addressing key issues affecting individuals, groups and communities in different islands. You will receive
                                    information on your programme or project before you arrive. RSVP Caribbean has a wide network of partners with established programmes,
                                    project linkages and networks that are tapped into to source or create the best option for you. Our programmes and projects definitely make a tangible and
                                    noticeable difference. There is a pre-established plan for each programme and project with each partner; this plan and its expected outputs are
                                    implemented and followed for continuity and ease of tracking results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demoj"><i class="fa fa-plus"></i> Pre-Departure Support</a></h4>
                                <div class="collapse" id="demoj">
                                    <p class="inset-right-7p">Before arrival in country Team RSVP will provide on-going support through emails, calls, skype, Whatsapp and
                                    other options to ensure that the necessary support and information is communicated to all volunteers. Team RSVP knows about the Caribbean, is
                                    based in the Caribbean and understands the Caribbean context.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demok"><i class="fa fa-plus"></i> Responsible Volunteering</a></h4>
                                <div class="collapse" id="demok">
                                    <p class="inset-right-7p">At RSVP Caribbean we ensure that volunteering abroad is a benefit to the volunteer and the local organization. We provide
                                    all the information so volunteers can make informed and responsible choices and do not exploit people, animals, wildlife and the environment in a bid
                                    to promote what we do. We have a <a href="responsible-volunteering-policy.php">Responsible Volunteering Policy</a> that outlines how we operate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demom"><i class="fa fa-plus"></i> 24-Hour In-Country Support</a></h4>
                                <div class="collapse" id="demom">
                                    <p class="inset-right-7p">Upon arrival our team provides 24-hour support and can be called upon any day and at any time to provide assistance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demoo"><i class="fa fa-plus"></i> Safety and Security</a></h4>
                                <div class="collapse" id="demoo">
                                    <p class="inset-right-7p">Your safety is our number one priority. We ensure that programme, projects, accommodations and communities are safe
                                    for our volunteers to work and live by conducting risk assessments and preparing risk management and safety plans. We provide a detailed
                                    orientation the day after arrival which includes the necessary safety tips. Background and reference checks of staff, host families and volunteers are
                                    completed. We also have first aid qualified staff and proper emergency response planning.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demoq"><i class="fa fa-plus"></i> School/University Credits</a></h4>
                                <div class="collapse" id="demoq">
                                    <p class="inset-right-7p">If you are looking for school credits or to complete your internship or dissertation then RSVP Caribbean will
                                    provide that opportunity for you. You will also receive an academic reference and certificate if you have completed all the requirements of your volunteer agreement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demor"><i class="fa fa-plus"></i> Sustainability</a></h4>
                                <div class="collapse" id="demor">
                                    <p class="inset-right-7p">Volunteering with RSVP Caribbean will be short-term for most volunteers. Given our approach which is aligning what we do to the
                                    Sustainable Development Goals it is imperative that each volunteer programme and partner has a plan that facilitates achieving these overarching
                                    goals. Each volunteer’s tasks feed into that plan and so each volunteer builds on the work of previous volunteers. These goals and the work it
                                    necessitates is tied directly to empowering communities and building relationships that lead to growth in all programme areas. There is ongoing
                                    research and documentation, local needs being addressed, weekly visits to programmes and projects, staff training in specific programme areas, volunteer
                                    tasks linked to goals and plans with these plans being updated by each volunteer so that there is continuity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="why-accordion">
                                <h4 class="offset-top-30 text-bold">
                                <a data-toggle="collapse" href="#demos"><i class="fa fa-plus"></i> Welcome and Orientation</a></h4>
                                <div class="collapse" id="demos">
                                    <p class="inset-right-7p">Coming to a new country can be daunting but do not worry the RSVP Caribbean staff will be there to meet you at the airport and
                                    ensure that you are safely taken to your host family. The day after arrival you will be picked up from your host family by a staff member and you will
                                    get a full day of orientation so you can better understand your new environment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>
            
        </section>
        
        <?php /*
        <section class="context-dark bg-gray-base">
          <!-- RD Parallax-->
          <div data-on="false" data-md-on="true" class="rd-parallax">
            <div data-speed="0.35" data-type="media" data-url="images/backgrounds/volunteers-hands.jpg" class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html" class="rd-parallax-layer">
              <div class="shell section-254">&nbsp;</div>
            </div>
          </div>
        </section>
        */ ?>
        
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