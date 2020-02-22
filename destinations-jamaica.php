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
    <div class="page">
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
        <section class="breadcrumb-classic first-bc-margin">
            <div class="shell section-34 section-sm-50">
                <div class="range range-lg-middle">
                    <div class="cell-lg-2 text-center veil reveal-sm-block cell-lg-push-2">
                        <span class=
                        "icon-lg mdi mdi-map-marker icon icon-white"></span>
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Destinations</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                        <li><a href="index.php">Home</a></li>
                        <li>Destinations</li>
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
                    
                    <div class="col-md-4">
                      <p><img class="img-responsive img-thumbnail" src="images/jamaika.png" alt=""></p>
                      <p><img class="img-responsive img-thumbnail" src="images/jamaica_pic.jpg" alt=""></p>
                      <div id="destination-map" class="code-rd-map" style="height: 400px; width: 100%;"></div>
                      <script>
                      var pointLatLng = {lat: 18.194176, lng: -77.346931};
                      function initMap() {
                        var map = new google.maps.Map(
                          document.getElementById('destination-map'), 
                          { 
                            center: pointLatLng, 
                            zoom: 8, 
                            scrollwheel: false 
                          }
                        );
                        var GrenadaMarker = new google.maps.Marker({ map: map, position: pointLatLng, title: 'Jamaica' });                  
                      }
                      </script>
                      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3LYilYpN0bBZQIWMGS1dyHDan56B9PlI&callback=initMap" async defer></script>
                    </div>
                    <div class="col-md-8">
                        <h1>RSVP Jamaica</h1>
                        <hr style="margin-top:0" class="divider divider-md bg-mantis pull-left"><br />
                        <p class="text-justify">
                        <b>Capital:</b> Kingston<br>
                        <b>Population:</b> 2.7 Million<br>
                        <b>Size:</b> 10, 911 square kilometers (4,244 miles)<br>
                        <b>Official Language:</b> English<br>
                        <b>Other Language:</b> Patois<br>
                        <b>Currency:</b> Jamaican Dollars<br>
                        <b>Weather:</b> Warm tropical climate<br>
                        <b>Food:</b> A mix of flavours, seasonings and spices (from mild to spicy) used in meal preparations and lots of fresh fruits and 
                        vegetables<br>
                        <b>Main Industry:</b> Manufacturing, agriculture and tourism<br>
                        <b>Motto:</b> "Out of many one people"<br>
                        <b>Location:</b> Mandeville, Montego Bay and St. Ann's Bay<br>
                        <b>Programmes Available:</b> <a href="care-protection.php">Child Care and Protection</a>, <a href="elderly-care.php">Elderly Care</a>, <a href="teaching.php">Teaching</a>, 
                        <a href="medicine-care.php">Medicine and Health Care</a>, <a href="nursing.php">Nursing</a>, <a href="physiotherapy.php">Physiotherapy</a>, 
                        <a href="dentistry.php">Dentistry</a>, <a href="sports.php">Sports</a>, <a href="humanitarian.php">Humanitarian</a>, 
                        <a href="environmental-awareness.php">Environmental Awareness and Protection</a>, <a href="entrepreneurship.php">Entrepreneurship</a>,  
                        <a href="youth-community.php">Youth and Community Development</a> and <a href="health-wellness.php">Health and Wellness</a> <br>
                        <b>Projects Available:</b> <a href="reggae.php">Reggae Music and Dance</a>, <a href="rastafarian.php">Rastafarian Culture</a>, <a href="internship.php">Internship and Dissertation</a>, 
                        <a href="professional.php">Professional</a>, <a href="summer.php">Summer</a>, <a href="spring.php">Spring Break</a>, <a href="group-trip.php">Group Trips</a>, <a href="corporate.php">Corporate</a>, 
                        <a href="language-lesson.php">Language Lessons</a> and <a href="customized.php">Customized</a><br>
                        <b>Programme Duration:</b> From 1 week, see <a href="information.php">Programme and Project Information</a> for specific details<br>
                        <b>Price:</b> From $1,500USD per person, please see <a href="prices-jamaica.php">Programme and Project Price</a> for more details<br>
                        <b>Accommodation:</b> Host Families<br />
                        <b>What the Experience Offers:</b> Needs-based programmes and
                        projects, an opportunity to make a difference,
                        ongoing support and wholesome fun.<br><br>
                        Jamaica is one of the largest islands in the
                        Caribbean with 2.7 million people. Jamaica has
                        14 parishes, each with its own uniqueness and
                        style. The capital is Kingston with a strong
                        business sector and a vibrant night-life. The
                        second city Montego Bay, located in the parish
                        of St. James offers amenities, shopping and
                        activities targeted more towards tourists, with
                        lovely beaches, historical sites and a thriving
                        mix of exploration options.<br><br>
                        Portland, in the east offers, a more laid back,
                        down to earth, rustic flair with great Jamaican
                        hospitality. In the south, St. Elizabeth is
                        known as the bread basket parish as it produces
                        most of the food for the island. In the west,
                        Negril is known for its white sand beaches and
                        breathtaking sunsets. Volunteering in Jamaica
                        will allow you to experience the true spirit of
                        the people. When volunteers come to Jamaica to
                        give of their service they will learn about the
                        unique culture and energy that defines
                        Jamaica.<br><br>
                        The country offers a rich blend of authentic
                        music, defined by the melodies of Reggae legend
                        Bob Marley; sports, birthing and developing the
                        fastest man and woman in the world – Usain Bolt
                        and Shelly-Ann Fraser-Pryce; mouthwatering
                        cuisine; a colourful and appealing language;
                        captivating history, mountains, beautiful sites
                        and scenes, great beaches and importantly the
                        warmth and friendliness of the people.
                        </p>
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