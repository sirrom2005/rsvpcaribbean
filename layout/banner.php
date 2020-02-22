<?php
$banners = array(); 
$i = 0;
$i++;
$banners[$i] = array(
    'image' => 'images/intros/002.jpg',
    'heading' => 'Welcome to RSVP', 
    'text' => 'Respond...Discover...Change Lives!', 
    'button' => 'Start Your Journey ', 
    'url' => 'apply.php'
);
$i++;
$banners[$i] = array(
    'image' => 'images/intros/000.jpg',
    'heading' => 'Back to School Project', 
    'text' => 'Help us to provide basic school supplies for poor and vulnerable children', 
    'button' => 'Start Your Journey ', 
    'url' => 'rsvp-special-projects.php'
);
$i++;
$banners[$i] = array(
    'image' => 'images/intros/010.jpg',
    'heading' => '', 
    'text' => '', 
    'button' => 'Start Your Journey ', 
    'url' => 'apply.php'
);
$i++;
$banners[$i] = array(
    'image' => 'images/intros/humanitarian.jpg',
    'heading' => 'Help Persons in Need', 
    'text' => 'Find out how you can help renovate or build a home for the poor and vulnerable', 
    'button' => 'Start Your Journey ', 
    'url' => 'humanitarian.php'
);
$i++;
$banners[$i] = array(
    'image' => 'images/intros/012.jpg',
    'heading' => '', 
    'text' => '', 
    'button' => 'Start Your Journey ', 
    'url' => 'apply.php'
);
$i++;
$banners[$i] = array(
    'image' => 'images/intros/008.jpg',
    'heading' => 'We Need Your Help with Health Care', 
    'text' => 'Find out how you can assist with health care in the Caribbean', 
    'button' => 'Start Your Journey ', 
    'url' => 'medicine-care.php'
);
$i++;
$banners[$i] = array(
    'image' => 'images/intros/005.jpg',
    'heading' => '', 
    'text' => '', 
    'button' => 'Start Your Journey ', 
    'url' => 'apply.php'
);
$i++;
$banners[$i] = array(
    'image' => 'images/intros/sports.jpg', // 006.jpg
    'heading' => 'Teach Children Sports', 
    'text' => 'Find out more about the RSVP Sports Programme', 
    'button' => 'Start Your Journey ', 
    'url' => 'sports.php'
);
$i++;
$banners[$i] = array(
    'image' => 'images/intros/003.jpg',
    'heading' => '', 
    'text' => '', 
    'button' => 'Start Your Journey ', 
    'url' => 'apply.php'
);
$i++;
$banners[$i] = array(
    'image' => 'images/intros/009.jpg', // 006.jpg
    'heading' => 'Assist in Orphanages and Child Care Centres', 
    'text' => 'Find out more about RSVP Child Care and Protection Programme', 
    'button' => 'Start Your Journey ', 
    'url' => 'care-protection.php'
);
?>
<div class="rd-parallax rd-parallax-swiper">
<div data-speed="0.3" data-sm-speed="1" data-type="html" class="rd-parallax-layer">
    <div data-loop="true" data-height="100vh" data-dragable="false" data-min-height="480px" data-autoplay="true" class="swiper-container swiper-slider">
        <div class="swiper-wrapper text-center">
        
            <?php 
            $bannerTotal = count($banners);
            foreach($banners as $k => $b): 
            $eleID = ($k == 1)? 'id="page-loader"' : null; 
            ?>
            
            <div <?php echo $eleID; ?> data-slide-bg="<?php echo $b['image']; ?>" data-preview-bg="<?php echo $b['image']; ?>" class="swiper-slide">
                <div data-speed="0.5" data-fade="true" class="swiper-caption swiper-parallax">
                    <div class="swiper-slide-caption">
                        <div class="shell">
                            <div class="range range-lg-center">
                                <div class="cell-lg-12">
                                    <h1><span data-caption-animate="fadeInUp" data-caption-delay="700" class="big"><?php echo $b['heading']; ?></span></h1>
                                </div>
                                <div class="cell-lg-10 offset-top-30">
                                    <h4 data-caption-animate="fadeInUp" data-caption-delay="900" class="hidden reveal-sm-block text-light"><?php echo $b['text']; ?></h4>
                                    <div class="group group-xl offset-top-20 offset-xs-top-50">
                                        <a href="<?php echo $b['url']; ?>" data-caption-animate="fadeInUp" data-caption-delay="1200" class="btn btn-default btn-lg btn-anis-effect"><span class="btn-text"><?php echo $b['button']; ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
            
        </div>
        <?php /*
        <div data-speed="0.5" class="swiper-button swiper-button-prev swiper-parallax">
            <div class="preview">
                <?php 
                for($i = $bannerTotal; $i >= 1; $i--): 
                    echo "<div class=\"preview__img preview__img-{$i}\"></div>\n";
                endfor;
                ?>
            </div>
        </div>
        <div data-speed="0.5" class="swiper-button swiper-button-next swiper-parallax">
            <div class="preview">
                <?php 
                for($i = 1; $i <= $bannerTotal; $i++): 
                    echo "<div class=\"preview__img preview__img-{$i}\"></div>\n";
                endfor;
                ?>
            </div>
        </div>
        */ ?>
        <div class="swiper-pagination"></div>
    </div>
</div>
</div>