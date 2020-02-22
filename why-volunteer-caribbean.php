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
                            <li>Why Volunteer in the Caribbean?</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
            
            <!-- WHY VOLUNTEER IN THE CARIBBEAN? -->
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1><a name="why_volunteer"></a>Why Volunteer in the Caribbean?</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <p>What you often see when you research any Caribbean island are the lovely beaches, sunsets, landscape, resorts, architecture and the beauty of the people.
                    However, these images do not tell the full story about some of the harsh conditions that many persons in the Caribbean are experiencing. From a low of 16% to a high
                    of 80% of the Caribbean’s various populations are living below the poverty line.</p>
                    <p>The Caribbean islands are riddled with many social problems. This includes high illiteracy rates, limited resources to stimulate learning within schools at
                    various levels, high unemployment, high levels of debt, inadequate access to or unaffordable health care, improper sanitation in schools and communities, lack of
                    access to basic necessities (food, clothing, shelter), insufficient programmes for the elderly, homeless and persons with disabilities and many other issues – it is
                    a myth to highlight only sand, sea and sun. The focus of Caribbean islands has been to reduce the debt burden leaving very little to improve the lives of the people.</p>
                    <p>As developing countries the resources such as schools, hospitals, child care facilities among others are basic and inadequate and the need to change this
                    often times is a challenge. One of the resources needed is the human resource necessary to support the various partner institutions in the child care, education,
                    health, environment, humanitarian and community sectors. As a volunteer you can provide that extra pair of hands, skills, experience and motivation to help a
                    partner take better care of its beneficiaries.</p>
                    <p>Below are some statistics and information that will help you to see why volunteering in the Caribbean helps to change lives.</p>
                </div>
            </section>
            
            <section class="section-41">
                <div class="shell container">
                    <div class="row">
                        
                        <div class="col-md-12 col-sm-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#child_care_protection" aria-controls="child_care_protection" role="tab" data-toggle="tab">Child Care and Protection</a></li>
                            <li role="presentation"><a href="#health_care" aria-controls="health_care" role="tab" data-toggle="tab">Health Care</a></li>
                            <li role="presentation"><a href="#water_sanitation" aria-controls="water_sanitation" role="tab" data-toggle="tab">Water and Sanitation</a></li>
                            <li role="presentation"><a href="#literacy_rate" aria-controls="literacy_rate" role="tab" data-toggle="tab">Literacy Rate</a></li>
                            <li role="presentation"><a href="#unemployment" aria-controls="unemployment" role="tab" data-toggle="tab">Unemployment</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="child_care_protection">
                            <ul class="custom-item-list">
                                <li>Every 18 seconds another child becomes an orphan</li>
                                <li>Every 14 second a  parent dies because of AIDS</li>
                                <li>9 million orphans live in Latin America and the Caribbean</li>
                                <li>Children are abandoned or neglected due to poverty, disabilities, parents with mental illnesses and other factors</li>
                                <li>The number of cases of child abuse in the Caribbean is increasing so there are more children in state care</li>
                                <li>Children are profoundly affected by these challenges circumstances and therefore face economic hardships, lack of love, affection and attention, stigma, discrimination, 
                                emotional distress, psychological distress, illnesses, sexual and physical abuse, exploitation and trafficking</li>
                                <li>There is limited staff in state run facilities</li>
                            </ul>
                            <cite><b>Source:</b> A joint report of new orphan estimates and a framework for action, UNICEF and UNAIDS</cite>
                            <!-- img src="images/h1.jpg" alt="" -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="health_care">
                            <ul class="custom-item-list">
                                <li >Cardiovascular diseases, diabetes and malignant neoplasm are the leading causes of death in Latin America and the Caribbean</li>
                                <li >Approximately 900,000 deaths from cardiovascular disease and 400,000 from cancer occur each year across Latin America and the Caribbean</li>
                                <li >The English-Speaking Caribbean shows even greater difference in mortality due to cardiovascular diseases compared to communicable diseases</li>
                                <li >The estimated mortality due to cardiovascular diseases and diabetes is almost 250 per 100,000 population compared to 70 per 100,000 with communicable diseases</li>
                                <li >Data from Pan American Health Organization (PAHO) suggest that the Caribbean epidemic of chronic non-communicable diseases is the worst in the region of the Americas</li>
                                <li >There is a high prevalence of obesity, hypertension, pre-hypertension, respiratory diseases and circulatory diseases</li>
                                <li >Chronic non-communicable diseases are included as priority for governments in the Caribbean</li>
                            </ul>
                            <cite><b>Source:</b> Chronic Diseases in the
                                Caribbean, West Indies Medical Journal vol. 60
                                No.4, 2011</cite>
                            <!-- img src="images/h1.jpg" alt="" -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="water_sanitation">
                            <ul class="custom-item-list">
                                <li>Approximately 110 million people do not have access to improved sanitation in the Latin American and the Caribbean</li>
                                <li>Approximately 36 million people do not have access to safe water in Latin America and the Caribbean</li>
                                <li>Only 51% of the population have access to sewers</li>
                                <li>Poor water quality, poor quality of service, irregular supply, low water pressure, unsafe drinking water, lack of resources and affordability are some of the
                                main issues related to water and sanitation in the Caribbean</li>
                            </ul>
                            <cite><b>Source:</b> Water and Sanitation in Latin America and the Caribbean UN Habitat Report, 2010 and UNDP Human Development Report – Water and Sanitation in Latin 
                            America and the Caribbean, 2006</cite>
                            <!-- img src="images/h2.jpg" alt="" -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="literacy_rate">
                            <ul class="custom-item-list">
                                <li>Literacy is defined as the ability to read and write, with understanding, a short, simple statement about one's everyday life (UN, 2008)</li>
                                <li>Caribbean adult literacy rate is 69%</li>
                                <li>Caribbean youth literacy rate is 82%</li>
                                <li>Low adult literacy levels is a problem that affects more women than men</li>
                            </ul>
                            <cite><b>Source:</b> Adult and Youth Literacy: National, Regional and Global Trends 1985-2015, UNESCO Institute of Statistics</cite>
                            <!-- img src="images/h3.jpg" alt="" -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="unemployment">
                            <ul class="custom-item-list">
                                <li>6.2% - 20% unemployment rate in the Caribbean</li>
                                <li>60% of citizens in the Caribbean are youth</li>
                                <li>11%-40% unemployment rate among youth across the islands</li>
                                <li>The Caribbean has the highest youth unemployment levels</li>
                                <li>Unemployment rate for women is 30% higher than men</li>
                                <li>The region will have to create nearly 50,000,000 jobs over the next decade just to offset demographic growth</li>
                            </ul>
                            <cite><b>Source:</b> International Labour Organization Labour Review for Latin America and the Caribbean 2014/2015 and Youth Unemployment and Labour in the Caribbean, 
                            Caribbean Knowledge Series, January 2014</cite>
                            <!-- img src="images/h4.jpg" alt="" -->
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