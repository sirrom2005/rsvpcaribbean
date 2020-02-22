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
                  <div class="row">
                      <div class="col-md-12">
                          <h1>About the Caribbean</h1>
                          <hr style="margin-top:0" class="divider divider-md bg-mantis pull-left">
                      </div>
                  </div>
                  
                  <p class="text-justify">The head office for RSVP Caribbean Volunteers Limited is located in Jamaica. RSVP Caribbean currently offers programmes and projects in Jamaica, St. Lucia
                  and Grenada and will continuously expand to the rest of the Caribbean each year. As new locations are established we will update our partners and present exciting opportunities for
                  our volunteers to explore.</p>
                  
                  <p class="text-justify">The Caribbean region is located between the Atlantic Ocean and Central America. It is to east of the Atlantic Ocean, west of Central America and the Pacific Ocean, south of the
                  United States and north of South America. The Caribbean is made up of many islands all sharing some similarity in history, vibrancy and issues but each very unique in its culture
                  and way of life. The islands from Bahamas and Cuba to the south all the way east to Trinidad and Tobago are referred to as the West Indies. These are classified into three main groups:
                  the Bahamas, the Greater Antilles and the Lesser Antilles. The Greater Antilles include Cuba, Jamaica, Hispaniola (Haiti and Dominican Republic) and Puerto Rico. The Lesser Antilles
                  is divided into the Leeward Islands, the Windward Islands and the Netherlands Antilles.</p>
                  
                  <p class="text-justify">The Caribbean is an idyllic get away known for  its beautiful beaches, breathtaking sunsets, lush vegetation, mountainous and flat landscape, rivers, caves, food, warm people and
                  a place full of life and adventures. English is spoken in most Caribbean islands with other languages such as Creole, Dutch, Spanish and French in some islands. In countries where the
                  second language is spoken more widely than English, RSVP Caribbean staff and partners will provide support.</p>
                  
                  <p class="text-justify">Volunteers will be exposed to aspects of the Caribbean culture such as music, dance, fashion, food, history, achievements, sub-cultures, art, craft, folklore, drama,
                  language and many others. Not only will volunteers learn the culture but there will also be opportunities for volunteers to share their culture with people in the Caribbean. Of
                  course there is also the sand, sea and sun that volunteers can bask in on the weekend.</p>
                  
                  </div>
                </div>
              </section>
              <section>
                <div id="destination-map" class="code-rd-map" style="height: 500px;"></div>
                <script>
                function initMap() {
                  var JamaicaLatLng = {lat: 18.084481, lng: -76.595235};
                  var GrenadaLatLng = {lat: 12.117318, lng: -61.679831};
                  var LuciaLatLng = {lat: 13.898701, lng: -60.975061};
                  var bounds = new google.maps.LatLngBounds();
                  var map = new google.maps.Map(
                    document.getElementById('destination-map'), 
                    { 
                      center: {  
                          lat: 18.084481, 
                          lng: -76.595235
                      }, 
                      zoom: 6, 
                      scrollwheel: false 
                    }
                  );
                  var JamaicaMarker = new google.maps.Marker({ map: map, position: JamaicaLatLng, title: 'Jamaica' }); // Jamaica
                  bounds.extend(JamaicaMarker.getPosition());
                  
                  var GrenadaMarker = new google.maps.Marker({ map: map, position: GrenadaLatLng, title: 'Grenada' }); // Jamaica
                  bounds.extend(GrenadaMarker.getPosition());
                  
                  var LuciaMarker = new google.maps.Marker({ map: map, position: LuciaLatLng, title: 'St. Lucia' }); // Jamaica
                  bounds.extend(LuciaMarker.getPosition());
                  
                  map.fitBounds(bounds);                  
                }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3LYilYpN0bBZQIWMGS1dyHDan56B9PlI&callback=initMap" async defer></script>
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