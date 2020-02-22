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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css">
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
                        <img src="images/icon_projectmanagement.png" alt="" style="height: 72px; width: 72px;" alt="">
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Projects</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="programmeandproject.php">Programmes and Projects</a></li>
                            <li><a href="programmeandproject.php">Projects</a></li>
                            <li>Summer Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>
        </section><!-- Page Content-->
        <main class="page-content">
            <section class="section-41">
                <div class="shell container">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>Summer Projects</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    <div class="section-18">
                      <ul class="custom-item-list">
                          <li><b>Location:</b> Jamaica</li>
                          
                          <li><b>Types of Partners:</b> Varies (<a href="javascript:void(null)" class="popup" data-title="Types of Partners" data-section="partners">View</a>)</li>
                          <li><b>Population Served:</b> Varies (<a href="javascript:void(null)" class="popup" data-title="Population Served" data-section="population">View</a>)</li>
                          <li><b>Age Group Served:</b> Varies (<a href="javascript:void(null)" class="popup" data-title="Age Group Served" data-section="age">View</a>)</li>
                          <li><b>Number of People Cared For:</b> Varies (<a href="javascript:void(null)" class="popup" data-title="Number of People Cared For" data-section="people">View</a>)</li>
                          
                          <li><b>Available Projects:</b> Child Care and Protection, Medicine and Health Care, Sports and Humanitarian</li>
                          
                          <li><b>Minimum Stay:</b> 2 weeks</li>
                          <li><b>Sustainable Development Goal:</b> Good Health and Well-Being, No Poverty and Quality Education</li>
                          <li><b>Project Requirements:</b> No specific requirement from some partners so anyone with a
                          love for children and the passion to serve can join the programme, volunteers with an interest
                          in social work, psychology, sociology or any related area are suitable for the child care
                          and protection project.<br><br>
                          No specific requirement for pre-medical volunteers. Volunteers will only be able to
                          observe on the medicine and health care project.<br><br>
                          Volunteers with an interest in building, construction, architecture, renovations,
                          painting, carpentry, plumbing or any related area are suitable for the humanitarian
                          project.<br><br>
                          Volunteers with studies or experience in teaching, sports development, sports medicine
                          or any related area are suitable for the sports project.</li>
                          <li><b>Work Schedule:</b> 6 hours per day, Monday – Friday</li>
                          <li><b>Activities:</b> Cultural events each afternoon Monday – Friday and weekend trips to tourist attractions</li>
                          <li><b>Accommodation Type:</b> Host Family</li>
                          <li>
                              <b>Price:</b> From $2,700USD per person, <a href="prices-jamaica.php">convert to your currency</a>.
                              Please see <a href="prices-jamaica.php">Programme and Project Price</a> for Jamaica
                          </li>
                          <li><b>Meals Included:</b> Breakfast, lunch and dinner (adapted to dietary requirements as necessary)</li>
                          <li>
                              <b>What's Included:</b> 24-hour support, accommodation, programme, three meals,
                              transportation to and from the airport, taxi cost from host family to partner
                              agency and on the weekends, please see <a href="what-included.php">What is Included</a> for a full list
                          </li>
                          <li>
                              <b>What is Not Included:</b> Airfare, daily lunch, internet, laundry, travel and health
                              insurance, please see <a href="what-not-included.php">What is Not Included</a> for a full list
                          </li>
                          <li>
                              <b>Start Dates:</b> Fixed dates, see <a href="information.php">Programme and Project Information</a> for dates
                          </li>
                          <li><b>Age of Volunteer:</b> Must be 16-18</li>
                          
                          <p>RSVP Caribbean offers four exciting projects for the summer. These include Child Care and Protection, Medicine and Health Care, Sports and Humanitarian. 
                          This is a supervised programme for 16-18 year olds where staff members are always with the volunteers.</p>
                          
                          <p><strong>Child Care and Protection</strong><br>As a volunteer you will be working at a summer camp with children in a needy community. Your role is to make 
                          their summer holiday fun, stimulating and different. You will assist in coordinating activities such as art and craft, dance, drama, sports, music and personal 
                          development workshops. Click here to view timetable – <a href="summer-project-timetable-child-care-protection.php">Child Care and Protection Summer Project</a>.</p>
                          
                          <p><strong>Medicine and Health Care</strong><br>You will volunteer in a poor community and provide different workshops that will help to improve the healthy lifestyle 
                          of these persons. You will take vital signs, high blood pressure checks, blood glucose checks, sessions on illnesses such as diabetes, hypertension, heart conditions, 
                          arthritis among others. You will get to visit a hospital or a health centre and see how it operates and participate in different workshops to build your skills. 
                          Click here to view timetable – <a href="summer-project-timetable-medicine-health-care.php">Medicine and Health Care Summer Project</a>.</p>
                          
                          <p><strong>Sports</strong><br>Get involved and feel the energy of the Jamaican children. Yes, they have a passion for sports and you can help to shape that. You will 
                          work at a sports camp and teach different sports such as football (soccer), netball, cricket, basketball and track and field. Guess what – you can also teach the 
                          children a sport from your country! On the last day of the camp a sports day will be hosted where the children will compete in different sporting activities and be 
                          awarded with prizes. Click here to view timetable – <a href="summer-project-timetable-sports.php">Sports Summer Project</a>.</p>
                          
                          <p><strong>Humanitarian</strong><br>Wouldn’t it be amazing to spend your summer to help to renovate the home of someone in need? Think about it – you may have a nice house 
                          and a warm bed but many people don’t. On this project volunteers will be repairing the home of someone who is living in a bad condition. This may include repairs to doors, 
                          windows, walls, painting and decoration – the aim is to have a total transformation. Your help is needed to make this happen. 
                          Click here to view timetable – <a href="summer-project-timetable-humanitarian.php">Humanitarian Summer Project</a>.</p>
                          
                          <p>Each afternoon is packed with fun activities for you to learn more about the culture. On the weekend trips are planned for you to 
                          visit other parts of the island. You will live with a host family and get to experience the warmth of the Jamaican people. How cool is that! 
                          See you in the summer – yeah mon!</p>
                          
                      </ul>
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
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog" style="margin-top: 10%;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            <strong class="modal-title" id="myModalLabel">Modal title</strong>
          </div>
          <div class="modal-body"></div>
        </div>
      </div>
    </div>
    
    <!-- Java script-->
    <script src="js/core.min.js"></script> 
    <script src="js/script.js"></script>
    <script>
    $document.ready(function(){
      $('.popup').each(function() {
        $(this).on('click', function() {
          var getTitle = $(this).data('title');
          var getSection = $(this).data('section');
          $.get('layout/project_content.php?project=summer&section=' + getSection, function( data ) {
            $('#myModal .modal-title').html(getTitle);
            $('#myModal .modal-body').html(data);
            $('#myModal').modal('show');
          });
        });
      });
    });
    </script>
</body>
</html>