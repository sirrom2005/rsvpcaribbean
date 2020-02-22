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
                        <div class="navbar navbar-inverse navbar-fixed-top none-navbar">
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
                            <li>Careers at RSVP</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
            
            <!-- CAREERS AT RSVP -->
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-5 text-lg-left">
                            <h1>Careers at RSVP</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                        <h3>Marketing Executive</h3>
                        <ul>
                            <li><strong>Location:</strong> Worldwide</li>
                            <li><strong>Start Date:</strong> March 13, 2017</li>
                            <li><strong>Contract Type:</strong> Part-time or Full-time</li>
                            <li><strong>Salary Type:</strong> Commission based with very attractive incentive package</li>
                            <li><strong>Department:</strong> Marketing</li>
                            <li><strong>Job Code:</strong> HO-MSD-ME-E2</li>
                        </ul>
                        <p>The Marketing Executive is responsible for recruiting volunteers for RSVP programmes and projects in the Caribbean. 
                        Your role is to promote the services of RSVP Caribbean to the target market by implementing the marketing plan and expose our 
                        services effectively to the market. The Marketing Executive will ensure that monthly marketing and sales targets are met and 
                        that there is a consistent and growing influx of volunteers.</p>
                        
                        <p><a class="btn btn-primary" style="color: #fff;" data-toggle="collapse" href="#marketing_executive_vacancy">View Vacancy</a></p>
                        
                        <div class="collapse" id="marketing_executive_vacancy">
                          <strong>Main roles and responsibilities:</strong>
                          <ul>
                            <li>Review strategic marketing plan for the company and develop specific marketing plan for execution</li>
                            <li>Develop leads list for various market segments</li>
                            <li>Frequently uses various strategies to market the services, programmes and projects of RSVP Caribbean</li>
                            <li>Plans and executes advertising and promotional activities</li>
                            <li>Organizes and attends events such as open days, information fairs, career days, seminars, conferences and 
                            exhibitions to promote the services of RSVP Caribbean</li>
                            <li>Manages customer relationships</li>
                            <li>Monitors competitors' services, sales and marketing activities</li>
                            <li>Establishes and maintains relationships with industry influencers and key strategic partners</li>
                            <li>Prepares monthly marketing activity reports - sales volume, potential sales and areas of proposed client expansion</li>
                            <li>Establishes and maintains a consistent corporate image throughout all services, promotional materials and events</li>
                          </ul>
                          
                          <strong>Requirements and Competencies:</strong>
                          <ul>
                            <li>At least a Bachelors Degree in Marketing or Sales or a related field</li>
                            <li>At least 3 years related marketing and sales experience with proven results</li>
                            <li>Ability to meet and surpass monthly, quarterly and yearly sales targets</li>
                            <li>A proven track record of designing marketing tools and strategies</li>
                            <li>Be fluent in English (both written and spoken) - knowledge of a second language such as German, Dutch, French, 
                            Japanese would be an asset</li>
                            <li>Very good understanding of the European and US markets</li>
                            <li>Very good interpersonal, leadership, management, business, presentation, communication, problem solving, analytical, 
                            negotiation, research, computer and writing skills</li>
                            <li>A customer-centred and results-oriented person who is a strategic thinker with high technical capacity</li>
                            <li>Ability to work on own initiative</li>
                            <li>High motivated and committed to results</li>
                          </ul>
                          
                          <p>This is a three-year contractual position, subject to a three-month probationary period. Contract is renewable 
                          if key performance indicators are met.</p>
                          
                          <p>Please send your cover letter and CV in one Microsoft Word or PDF document to <a href="mailto:hr@rsvpcaribbean.com">hr@rsvpcaribbean.com</a> 
                          with subject line Application - Marketing Executive. Only shortlisted applicants will be contacted. Closing date for applications is 
                          <strong>Friday</strong>, <strong>February 17, 2017</strong> at 4:00pm EST. <strong>No telephone calls, please.</strong></p>

                        </div>
                        
                    </div>
                    
                    <div class="section-18">
                        <h3>Marketing Director</h3>
                        <ul>
                            <li><strong>Location:</strong> Jamaica, Europe or North America</li>
                            <li><strong>Start Date:</strong> March 6, 2017</li>
                            <li><strong>Contract Type:</strong> Full-time</li>
                            <li><strong>Salary Type:</strong> Competitive salary package based on experience</li> 
                            <li><strong>Department:</strong> Marketing</li>
                            <li><strong>Job Code:</strong> HO-MSD-MD-E1</li>
                        </ul>
                        <p>The Marketing Director is responsible for the marketing, sales and branding of the company. He/she will be in charge of 
                        planning and implementing sales, marketing and service development strategies for the short, medium and long-term targeting 
                        existing and new markets. He/she will ensure that the monthly sales targets are being met and that there is continuous testing 
                        and measuring of strategies to determine effectiveness. The Marketing Director will manage a robust team who are adequately 
                        trained to meet targets. It is his/her responsibility to write or monitor all content (internal and external) and ensure that it 
                        is up-to-date, accurate, clear and concise for the customers. The Content Manager, Social Media Manager, Communications Officer 
                        and Marketing Executives report to the Marketing Director. </p>
                        
                        <p><a class="btn btn-primary" style="color: #fff;" data-toggle="collapse" href="#marketing_director_vacancy">View Vacancy</a></p>
                        
                        <div class="collapse" id="marketing_director_vacancy">
                          
                          <strong>Main roles and responsibilities:</strong>
                          <ul>
                            <li>Reviews and implement strategic marketing plan</li>
                            <li>Develops and implements strategic sales plan and forecast to achieve company objectives</li>
                            <li>Prepares sales manual, scripts and presentations</li>
                            <li>Develops and manages marketing and sales operating budgets</li>
                            <li>Plans and manages advertising and promotional activities including print, online, social media, career fairs, 
                            and information days/evenings among others</li>
                            <li>Develops and recommends service position, branding and price strategies to produce the highest possible 
                            long-term market share</li>
                            <li>Conducts market research and adjust marketing strategies to meet changes and competitive conditions</li>
                            <li>Monitors competitors' services, sales and marketing activities</li>
                            <li>Establishes and maintains relationships with industry influencers and key strategic partners</li>
                            <li>Prepares monthly marketing activity reports - sales volume, potential sales and areas of proposed client expansion</li>
                            <li>Establishes and maintains a consistent corporate image throughout all services, promotional materials and events</li>
                            <li>Directs sales forecasting activities and set performance goals accordingly</li>
                            <li>Directs staffing, training and performance evaluations to monitor sales and marketing programmes</li>
                            <li>Represents the company at major industry conferences, tradeshows, expositions and other events to promote the company services</li>
                          </ul>
                          
                          <strong>Requirements and Competencies:</strong>
                          <ul>
                            <li>At least a Masters Degree in Marketing or Sales or a related field</li>
                            <li>At least 5 years related experience leading a marketing and sales team with proven results</li>
                            <li>Ability to meet and surpass monthly, quarterly and yearly sales targets</li>
                            <li>A proven track record of designing marketing tools and strategies</li>
                            <li>Possess the ability to position the company as the leading volunteer placement provider in the Caribbean within 3 years</li>
                            <li>Be fluent in English (both written and spoken) - knowledge of a second language such as German, Dutch, French, 
                            Japanese would be an asset</li>
                            <li>Very good understanding of the European and US markets</li>
                            <li>Very good interpersonal, leadership, management, business, presentation, communication, problem solving, analytical, research, 
                            computer and writing skills</li>
                            <li>A customer-centred and results-oriented person who is a strategic thinker with high technical capacity</li>
                            <li>Ability to work on own initiative</li>
                            <li>High motivated and committed to results</li>
                          </ul>
                          
                          <p>This is a three-year contractual position, subject to a three-month probationary period. Contract is renewable if key 
                          performance indicators are met. Salary is dependent on qualifications and experience.</p>
                          
                          <p>Please send your cover letter (include expected salary) and CV in one Microsoft Word or PDF document to <a href="mailto:hr@rsvpcaribbean.com">hr@rsvpcaribbean.com</a> 
                          with subject line Application - Marketing Director. Only shortlisted applicants will be contacted. Closing date for applications 
                          is  <strong>Friday</strong>, <strong>February 17, 2017</strong> at 4:00pm EST. <strong>No telephone calls, please.</strong></p>
                          
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