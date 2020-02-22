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
                                <a href="index.html"><img alt='' height='94'
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
                                        <a href="index.html"><img alt=''
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
                    <div class=
                    "cell-lg-2 veil text-center reveal-sm-block cell-lg-push-2">
                    <span class="icon-lg mdi mdi-pencil icon icon-white">
                        </span>
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Blog</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
            <polyline points="0,0 60,0 29,29"></polyline>
        </svg>
        </section><!-- Page Content-->
        <?php 
        include('layout/blog_content.php'); 
        $id = isset($_GET['id'])? $_GET['id'] : null;
        ?>
        
        <main class="page-content">
        
          <section class="section-41">
        
          <div class="shell container">
            
            <!-- div class="range">
              <div class="cell-lg-12 text-lg-left">
                <h1>item and Updates</h1>
                <hr class="divider bg-mantis hr-lg-left-0">
              </div>
            </div -->
          
          <?php 
          if(empty($id)):
          
            foreach($contents as $key => $item):
            echo'  
            <div class="section-18">
              <article class="post post-default text-left">
                <div class="header post-header">
                  <h3 class="post-title">
                    <a href="blog.php?id='. $key .'">'. $item['title'] .'</a> 
                    <span class="text-middle icon-xxs text-picton-blue mdi mdi-clock"></span> 
                    <time datetime="2016-01-01" class="text-middle small">'. $item['date'] .'</time>
                  </h3>
                </div>
                <section class="post-content offset-top-41">
                  <p>'. substr(strip_tags($item['content']), 0, strrpos(substr(strip_tags($item['content']), 0, 400), ' ')) .'...</p>
                  <a href="blog.php?id='. $key .'" class="offset-top-24 btn btn-default btn-primary" style="color: #fff">Read More</a>
                </section>
              </article>
            </div>
            <hr class="hr offset-top-66">
            ';
            endforeach;
          
          else:
            
            $item = $contents[$id];
            echo'  
            <div class="section-18">
              <article class="post post-default text-left">
                <div class="header post-header">
                  <h3 class="post-title">
                    <a href="#">'. $item['title'] .'</a> 
                    <span class="text-middle icon-xxs text-picton-blue mdi mdi-clock"></span> 
                    <time datetime="2016-01-01" class="text-middle small">'. $item['date'] .'</time>
                  </h3>
                </div>
                <section class="post-content offset-top-41">'. $item['content'] .'</section>
              </article>
            </div>
            ';
            
            echo '
						<div class="single-media"> 
							<h4>Social Media</h4>
							<ul class="social-media-link list-inline"> 
              <li><a href="https://www.facebook.com/rsvpcaribbean" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-facebook"></span></a></li>
              <li><a href="https://www.twitter.com/rsvpcaribbean" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-twitter"></span></a></li>
              <!-- li><a href="https://plus.google.com/+rsvpcaribbean" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-google-plus"></span></i></a></li -->
              <li><a href="https://www.linkedin.com/company/10657115" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-linkedin"></span></a></li>
              <li><a href="https://www.instagram.com/rsvpcaribbean" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-instagram"></span></a></li>
              <li><a href="https://www.snapchat.com/add/rsvpcaribbean" target="_blank"><span class="icon icon-xxs icon-circle icon-darker-filled mdi mdi-snapchat"></span></a></li>
							</ul>
						</div>
            ';
          
          endif;
          ?>
          
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