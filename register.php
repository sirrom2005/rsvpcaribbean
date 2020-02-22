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
    <div class="page text-center">
      <!-- Page Content-->
      <main class="page-content bg-shark-radio">
        <div class="one-page">
          <div class="one-page-header">
            <!--Navbar Brand-->
            <div class="rd-navbar-brand"><a href="index.html"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='images/intense/logo-light.png' alt=''/></a></div>
          </div>
          <!-- Register-->
          <section>
            <div class="shell">
              <div class="range">
                <div class="section-110 section-cover range range-xs-center range-xs-middle">
                  <div class="cell-xs-8 cell-sm-6 cell-md-4">
                    <div class="panel section-34 section-sm-41 inset-left-20 inset-right-20 inset-sm-left-20 inset-sm-right-20 inset-lg-left-30 inset-lg-right-30 bg-white shadow-drop-md">
                                <!-- Icon Box Type 4--><span class="icon icon-circle icon-bordered icon-lg icon-default mdi mdi-account-multiple-outline"></span>
                                <div>
                                  <div class="offset-top-24 text-darker big text-bold">Create your account</div>
                                  <p class="text-extra-small text-dark offset-top-4">All fields are required</p>
                                </div>
                      <!-- RD Mailform-->
                      <form data-form-output="form-output-global" data-form-type="contact" method="post" class="text-left offset-top-30">
                        <div class="form-group">
                          <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-account-outline"></span></span>
                            <input id="login-user-name" placeholder="User Name" type="text" name="user-name" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="form-group offset-top-20">
                          <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-email-outline"></span></span>
                            <input id="login-email" placeholder="E-Mail" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                          </div>
                        </div>
                        <div class="form-group offset-top-20">
                          <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-lock-open-outline"></span></span>
                            <input id="login-password" placeholder="Password" type="password" name="password" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="form-group offset-top-20">
                          <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-lock-outline"></span></span>
                            <input id="login-repeat-password" placeholder="Repeat a password" type="password" name="repeat-password" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="form-group offset-top-24">
                          <label class="checkbox-inline">
                            <input name="login-radio" value="checkbox-1" type="checkbox"><span class="text-dark text-extra-small">I agree with the <a href="termsandcondition.html" class="text-picton-blue">Terms of use</a>.</span>
                          </label>
                        </div>
                        <button type="submit" class="btn btn-xs btn-icon btn-block btn-primary offset-top-20">Sign Up <span class="icon mdi mdi-arrow-right-bold-circle-outline"></span></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="one-page-footer">
            <p style="color: rgba(255,255,255, 0.3)" class="small">&copy; <span id="copyright-year">2016</span>RSVP Caribbean <a href="privacy.html">Privacy Policy</a></p>
          </div>
        </div>
      </main>
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