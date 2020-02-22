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
    <div class="page about-t">
            <!-- Page Head-->
            <header class="page-head slider-menu-position">
                <!-- RD Navbar Transparent-->
                <div class="rd-navbar-wrap no-home-mn">
                    <nav class="rd-navbar rd-navbar-default rd-navbar-transparent" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
					
                        <div class="rd-navbar-inner">
                            <div class="navbar navbar-inverse navbar-fixed-top none-navbar">
                                <?php include('layout/top_menu.php'); ?>
                            </div>
                            <menu></menu>
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle">
                                    <span></span>
                                </button>
                                <!--Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a href="index.php">
                                        <img style='margin-top: -35px;margin-left: -25px;' width='138' height='94' src='images/intense/logo-light.png' alt='' />
                                    </a>
                                </div>
                            </div>
                            <div class="rd-navbar-menu-wrap">
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-mobile-scroll">
                                        <!--Navbar Brand Mobile-->
                                        <div class="rd-navbar-mobile-brand">
                                            <a href="index.php">
                                                <img style='margin-top: -35px;margin-left: -25px;' width='138' height="94" src='images/intense/logo-light.png' alt='' >
                                            </a>
                                        </div>
                                    </div>
                                    <!-- RD Navbar Nav-->
                                    <?php include('layout/main_menu.php'); ?>
									</div>
									</div>
									</div>
                    </nav>
                </div>
            </header>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic first-bc-margin text-center">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-help icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2>Frequently Asked Questions</h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.php">Home</a></li>
                <li>Frequently Asked Questions (FAQs)</li>
              </ul>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
            <polyline points="0,0 60,0 29,29"></polyline>
        </svg>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <!-- FREQUENTLY ASKED QUESTIONS (FAQ  -->
        <section class="section-41">
          <div class="shell container  ">
            <div class="range">
                <div class="cell-lg-12 text-lg-left">
                    <h1>Frequently Asked Questions (FAQs)</h1>
                    <hr class="divider bg-mantis hr-lg-left-0">
                </div>
            </div>
                    
            <div class="section-18"><p>We know you may have many questions about your volunteer experience. We will provide the questions most frequently asked and the 
            answers. However, if you need to get any additional information please email us at <a href="mailto:info@rsvpcaribbean.com">info@rsvpcaribbean.com</a> or call at 
            +1 876 569 5918 and we will respond within 48 hours for weekdays and 72 hours for weekends. </p></div>
        
				<div class="section-18">
					  <ul class="nav nav-tabs faq-nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">FAQs - Before Departure</a></li>
						<li><a data-toggle="tab" href="#menu1">FAQs - While In-Country</a></li>
						<li><a data-toggle="tab" href="#menu2">FAQs - For Parents</a></li>
						<li><a data-toggle="tab" href="#menu3">FAQs - Upon Return Home </a></li>
					  </ul>
					    <div class="tab-content faq-tab-content">
							<div id="home" class="tab-pane fade in active">
							  <p>These questions will help you ascertain the information you need prior to your journey overseas as a volunteer. For questions on what will happen 
                in-country, upon return or if you are a parent and want additional information please see <a href="faq.php">FAQs – While In-Country</a>, 
                <a href="faq.php">FAQs - for Parents</a> and <a href="faq.php">FAQs – Upon Return Home</a>.</p>
							  <h4>General</h4>
							  <div class="accordion-faqs"> 
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo"><i class="fa fa-plus"></i>1. Which countries can I volunteer in?</a> </h4>
									<div class="collapse" id="demo">
									<p class="faqs-accor-para"> 
									<a href="destinations.php">Grenada</a>, <a href="destinations.php">Jamaica</a>, <a href="destinations.php">St. Lucia </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo1"><i class="fa fa-plus"></i>2. Who can volunteer with RSVP Caribbean?</a> </h4>
									<div class="collapse" id="demo1">
									<p class="faqs-accor-para"> 
									We cater to a wide range of individuals - High School, College/University, Gap Year, Career Break, Professional and Retired persons; and anyone who meets the programme or project requirement. </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo2"><i class="fa fa-plus"></i>3. When can I apply? </a> </h4>
									<div class="collapse" id="demo2">
									<p class="faqs-accor-para"> 
									You can apply at any time. We prefer at least 90 days in advance to process your application. However, we do accept volunteers who apply within less than 90 days. Once you have decided on your 
                  destination and programme please go ahead and apply. </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo4"><i class="fa fa-plus"></i>4. When can I start? </a> </h4>
									<div class="collapse" id="demo4">
									<p class="faqs-accor-para"> 
									For most programmes you can choose your start and end date. Most programmes run all year round. Once you submit your application we will confirm your preferred dates. Only the health and 
                  wellness retreat programme, and the summer and spring break projects have set dates. </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo5"><i class="fa fa-plus"></i>5. How do I obtain a criminal record check?</a> </h4>
									<div class="collapse" id="demo5">
									<p class="faqs-accor-para"> 
									The process varies from country to country. The best starting point would be to contact your local police station or check online to find out about the process.  </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo6"><i class="fa fa-plus"></i>6. Can I use RSVP Caribbean as a referee after I have volunteered?</a> </h4>
									<div class="collapse" id="demo6">
									<p class="faqs-accor-para"> 
									We are happy to provide a reference or to be used as a referee provided that the volunteer complies with the <a href="termsandcondition.php">Terms and Conditions</a>. </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo7"><i class="fa fa-plus"></i>7. What Language is spoken?</a> </h4>
									<div class="collapse" id="demo7">
									<p class="faqs-accor-para"> 
									English is the main language in most Caribbean islands. However, Patois, French Creole and Dutch are other languages spoken. You do not have to know the local language, however during cultural 
                  sessions and interactions you will learn some aspects of the local language. If you want to improve your English or learn the local language you can sign up for our 
                  <a href="language-lesson.php">Language Lessons</a> but this is not compulsory. </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo8"><i class="fa fa-plus"></i>8. Will I be paid for my work?</a> </h4>
									<div class="collapse" id="demo8">
									<p class="faqs-accor-para"> 
									No, this is unpaid work, as volunteers cannot do paid work in our destinations; it is illegal to do so. You are working on a voluntary basis only. You will be making a significant 
                  contribution to partner organizations and helping to address important national and community needs within your host nation.  </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo9"><i class="fa fa-plus"></i>9. Are the countries safe?</a> </h4>
									<div class="collapse" id="demo9">
									<p class="faqs-accor-para"> 
									 RSVP Caribbean is committed to the safety and well-being of all volunteers and makes it a priority to carefully plan and select destinations, staff, host families, drivers, 
                   communities and programmes. RSVP has a risk management and safety plan for all destinations. All programmes have trained and dedicated staff who provide 24-hour support. A full 
                   orientation is provided the first day after arrival. Please see <a href="safety-support.php">Safety and Support</a>.  </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo10"><i class="fa fa-plus"></i>10. Can I travel with a friend?</a> </h4>
									<div class="collapse" id="demo10">
									<p class="faqs-accor-para"> 
									 You can travel with a friend, a boyfriend or girlfriend. However, please be aware that you cannot stay at the same host family as an unmarried couple or, if you are friends of the opposite sex, 
                   as culturally this is not the norm. Only legally married couples can stay together and certified proof of this must be provided. </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo11"><i class="fa fa-plus"></i>11. Can any nationality volunteer? </a> </h4>
									<div class="collapse" id="demo11">
									<p class="faqs-accor-para"> 
									Yes, you can be of any nationality and volunteer with us once you meet the requirements.  </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo12"><i class="fa fa-plus"></i>12. How do I benefit from volunteering? </a> </h4>
									<div class="collapse" id="demo12">
									<p class="faqs-accor-para"> 
									You will contribute by assisting persons with their basic needs and be a part of a life changing experience. Volunteering in a developing country will help you to see another part of the world 
                  and experience how other persons live. It will also be a good addition to your curriculum vitae or resume, and what you learn during the process will enhance your personal and professional development.</a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo13"><i class="fa fa-plus"></i>13. Can I fundraise for my programme? </a> </h4>
									<div class="collapse" id="demo13">
									<p class="faqs-accor-para"> 
									 Many volunteers fundraise to get additional support for their programme. You can click on <a href="fundraising-tips.php">Fundraising Tips</a> for ideas. </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo14"><i class="fa fa-plus"></i>14. Should I bring a suitcase or rucksack? </a> </h4>
									<div class="collapse" id="demo14">
									<p class="faqs-accor-para"> 
									Either one is ok, it depends on your personal preference. A small rucksack comes in handy on the weekend or for your daily activities and the main rucksack or suitcase for general travel.</a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo15"><i class="fa fa-plus"></i>15. What is the weather like?</a> </h4>
									<div class="collapse" id="demo15">
									<p class="faqs-accor-para"> 
									The weather in the Caribbean is mainly warm and sunny all year round. However, June to November it may rain occasionally so an umbrella or a raincoat might come in handy.</a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo16"><i class="fa fa-plus"></i>16. Is the tap water safe to drink?</a> </h4>
									<div class="collapse" id="demo16">
									<p class="faqs-accor-para"> 
									It is safe to drink the tap water in the Caribbean but your host family will boil the water for you, if you desire. However, if your preference is to have bottled water you will have to purchase 
                  that at a supermarket or shop.  </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo17"><i class="fa fa-plus"></i>17. What type of clothing should I take with me?</a> </h4>
									<div class="collapse" id="demo17">
									<p class="faqs-accor-para"> 
									It depends on your programme. Once you have applied and received your RSVP webpage the specific clothing requirement for your programme will be uploaded. You should pack slippers, shorts, pants, 
                  cotton blouses, dresses and a light sweater for evening and weekend wear.</a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo18"><i class="fa fa-plus"></i>18. When will I know where I will live and work?</a> </h4>
									<div class="collapse" id="demo18">
									<p class="faqs-accor-para"> 
									One month before arrival your programme and accommodation details will be uploaded to your RSVP webpage. </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo19"><i class="fa fa-plus"></i>19. Will I be able to use my mobile phone? </a> </h4>
									<div class="collapse" id="demo19">
									<p class="faqs-accor-para"> 
									 It is very expensive to roam in the Caribbean. We suggest that you purchase an inexpensive phone for approximately $60USD. If phones are available for rental at the office you will be able to 
                   rent a phone for $15USD. This must be returned the day before departure. </a>
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo20"><i class="fa fa-plus"></i>20. Will I have internet access? </a> </h4>
									<div class="collapse" id="demo20">
									<p class="faqs-accor-para"> 
									The Caribbean is made up of developing countries. There is no guarantee that your host family will have internet. However, there are internet cafes and hot spots where you can access the internet. 
                  You can also purchase a wireless device (for your smart phone or tablet) and add an internet data package based on your needs. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo21"><i class="fa fa-plus"></i>21. Where can I do my laundry? </a> </h4>
									<div class="collapse" id="demo21">
									<p class="faqs-accor-para"> 
									 There are different options for doing laundry. You can handwash your laundry and your host family will provide basins for this. If your host family has a washing machine you will be allowed to use it 
                   once every two weeks. You must have a full load as electricity bills are expensive in the Caribbean so you are not allowed to wash more frequently. You can also visit a laundromat in the town to do your 
                   laundry. Another option is to pay someone to do your laundry and this will cost approximately $25USD each time. In all cases you will have to provide your own laundry detergent. Your host family will 
                   discuss laundry options when you arrive. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo22"><i class="fa fa-plus"></i>22. What types of plugs are used? </a> </h4>
									<div class="collapse" id="demo22">
									<p class="faqs-accor-para"> 
									 The Caribbean uses the same plugs as the United States and Canada. These are the two-pin plugs.  Dependent on the type of plug used in your home country you may need to travel with an adaptor.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo23"><i class="fa fa-plus"></i>23. What can I do in the evenings and on the weekends?</a> </h4>
									<div class="collapse" id="demo23">
									<p class="faqs-accor-para"> 
									 In the evenings you can enjoy karaoke, the movies, hang out with islanders. Outdoor activities can help with your cultural immersion and so on the weekends enjoy the rivers, beaches, hiking, concerts, 
                   reggae and soca events and various attractions indigenous to your host nation. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo24"><i class="fa fa-plus"></i>24. Can I talk with another volunteer who has been on your programme? </a> </h4>
									<div class="collapse" id="demo24">
									<p class="faqs-accor-para"> 
									Sure you can, visit the <a href="volunteers-stories.php"> Volunteer Stories </a> page or <a href="contact-us.php">Contact Us </a> and we will put you in touch with a past volunteer.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo25"><i class="fa fa-plus"></i>25. What if I have more questions? </a> </h4>
									<div class="collapse" id="demo25">
									<p class="faqs-accor-para"> 
									 If you have additional questions or would like to discuss our programmes and projects in more detail, please email us at <a href="mailto:info@rsvpcaribbean.com">info@rsvpcaribbean.com</a> or 
                   call +1 876 569 5918 Mondays to Thursdays 8:30am – 4:30pm and 8:30am – 3:30pm on a Friday. You can also <a href="contact-us.php">Request a Call Back</a> or fill in 
                   the <a href="contact-us.php">Enquiry Form .</a> 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo26"><i class="fa fa-plus"></i>26. What is the next step? </a> </h4>
									<div class="collapse" id="demo26">
									<p class="faqs-accor-para"> 
									 You can <a href="contact-us.php">Contact Us </a>for more information or <a href="apply.php"> Apply Now.</a> 
									</p>
									</div>
									</div>
									
									<h4 class="accor-mid">Programmes and Projects </h4>
									<div class="single-faqsaccor">
									 <h4 class="text-uppercase offset-top-30 text-bold">
                    <a data-toggle="collapse" href="#demo27"><i class="fa fa-plus"></i>27. What types of programmes are available? </a>
                   </h4>
									<div class="collapse" id="demo27">
									<p class="faqs-accor-para">We have many different programmes to suit your interests. These include Child Care and Protection, Elderly Care, Teaching, 
                  Medicine and Health Care, Nursing, Physiotherapy, Dentistry, Health and Wellness Retreat, Sports, Humanitarian, Environmental Awareness and Protection, 
                  Entrepreneurship and Youth and Community Development. 
                  See <a href="information.php">Programme  and Project Information </a> for more details.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo28"><i class="fa fa-plus"></i>28. What types of projects are available?</a> </h4>
									<div class="collapse" id="demo28">
									<p class="faqs-accor-para"> 
                  We have many different projects to suit your interests. These include Reggae Music and Dance, Rastafarian Culture, Internship and Dissertation, Professional, Summer, Spring Break, Group Trips, 
                  Corporate Trips, English and Patois Lessons and Customized projects. See <a href="information.php">Programme and Project Information</a> for more details.
                  
									 <!-- Internship and Dissertation, Professional, Summer, Spring Break, Group  and Corporate trips in the areas of 
                                     Child Care and Protection, Elderly Care, Teaching, Medicine and Health Care, Nursing, Physiotherapy, Dentistry, Holistic Retreat, Sports, 
                                     Humanitarian, Environmental Awareness and Protection, Entrepreneurship and Youth and Community 
                                     Development. Other projects include English and Patois Lessons and Customized projects. 
                                     <a href="information.php">Programme and Project Information </a> for more details. --> 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo29"><i class="fa fa-plus"></i>29. How long can a volunteer stay on the programme? </a> </h4>
									<div class="collapse" id="demo29">
									<p class="faqs-accor-para"> 
									 This depends on which programme you choose and the destination. Programme length starts at 1 week and can go up to 18 months. You decide how long you would like to stay on the programme. 
                   You can click on <a href="information.php">Programme and Project Information</a> to view the minimum stay. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo30"><i class="fa fa-plus"></i>30. Can I do more than one programme? </a> </h4>
									<div class="collapse" id="demo30">
									<p class="faqs-accor-para"> 
                  Yes, you can combine your programmes. You can either do this within destination or across destinations.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo32"><i class="fa fa-plus"></i>31. Can a group of us join the programme? </a> </h4>
									<div class="collapse" id="demo32">
									<p class="faqs-accor-para"> 
									 We can organize programmes for you and your friends. A group for us is five (5) or more persons. You can click on <a href="group-trip.php">Group Trip</a> for more details and we will customize a programme to suit your group.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo33"><i class="fa fa-plus"></i>32. Should I bring a donation for where I will volunteer? </a> </h4>
									<div class="collapse" id="demo33">
									<p class="faqs-accor-para"> 
									 You can travel with donations if you wish to. You can view the <a href="charityanddonations.php"> Donation List</a> to determine what type of donation would be most 
                   appropriate and impacting to your programme. Do not bring items that are too heavy, that will affect your weight requirement with the airline.
									</p>
									</div>
									</div>
									
									<h4 class="accor-mid">Requirements</h4>
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo34"><i class="fa fa-plus"></i>33. How old do I have to be to volunteer? </a> </h4>
									<div class="collapse" id="demo34">
									<p class="faqs-accor-para"> 
									 To volunteer on RSVP programmes volunteers have to be at least 16 years old; for some programmes the minimum age requirement is 18 years old. There is no upper limit on age as long as volunteers are healthy and open to the experience. Please see <a href="information.php">Programme and Project Information</a> for the specific age requirements. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo35"><i class="fa fa-plus"></i>34. Do I need any academic qualifications? </a> </h4>
									<div class="collapse" id="demo35">
									<p class="faqs-accor-para"> 
									 Most programmes require limited or no academic qualifications. Please see <a href="information.php"> Programme and Project Information</a> for requirements. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo36"><i class="fa fa-plus"></i>35. Do I require a visa? </a> </h4>
									<div class="collapse" id="demo36">
									<p class="faqs-accor-para"> 
									 This is dependent on your nationality, chosen destination and length of time. You can <a href="contact-us.php">Contact Us</a> with this information and we will provide additional information. It is your responsibility to get your visa (if required) and any necessary visa or approval for any country you will have to transit. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo37"><i class="fa fa-plus"></i>36. Will I need vaccinations and what types? </a> </h4>
									<div class="collapse" id="demo37">
									<p class="faqs-accor-para"> 
									 This depends on the destination you choose and what vaccinations you have had in the past. We suggest that you visit your doctor who will provide expert advice on what vaccinations are needed. With your doctor ensure that you are fully immunized and you have the required vaccinations for your travel. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo38"><i class="fa fa-plus"></i>37. Are there any specific requirements for me to be accepted? </a> </h4>
									<div class="collapse" id="demo38">
									<p class="faqs-accor-para"> 
									Once we speak with your referee (listed on your application form) who could be a teacher, lecturer, employer, and pastor we will determine if you are suitable. All volunteers are required to provide a criminal record check as part of the application process. Once you are cleared, and your programme is available, you will be fully accepted. 
									</p>
									</div>
									</div>
									
									<h4 class="accor-mid">Prices </h4>
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo40"><i class="fa fa-plus"></i>38. What are the costs?</a> </h4>
									<div class="collapse" id="demo40">
									<p class="faqs-accor-para"> 
									 Please see <a href="prices-jamaica.php">Programme and Project Prices</a> for each programme and project costs; and pay careful attention to <a href="what-included.php">What is Included</a> 
                   and <a href="what-not-included.php">What is Not Included</a>. Programme costs start at $1,400USD per person. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo41"><i class="fa fa-plus"></i>39. What does the fee include? </a> </h4>
									<div class="collapse" id="demo41">
									<p class="faqs-accor-para"> 
                  Our prices include a programme, accommodation, breakfast and dinner, pre-arrival support, in-country support, transportation to and 
                  from the airport, transportation while in-country from your host family to your programme or project, and 24-hour support. Pay 
                  careful attention to <a href="what-included.php">What is Included</a> and <a href="what-not-included.php">What is Not included</a>. 
                  Please also see a <a href="breakdown-fees.php">Breakdown of Fees</a> to see how your money is spent.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo42"><i class="fa fa-plus"></i>40. Are 
                                    meals included in the cost? </a> </h4>
									<div class="collapse" id="demo42">
									<p class="faqs-accor-para"> 
									 Two meals (breakfast and dinner) are provided at your host family. If you are staying home on the weekends and not 
                                     travelling out, these two meals are still provided. On the Health and Wellness Programme, Rastafarian Culture Project and 
                                     Summer Project, breakfast, lunch and dinner are provided. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo43"><i class="fa fa-plus"></i>41. Is there a discount for returning volunteer?</a> </h4>
									<div class="collapse" id="demo43">
									<p class="faqs-accor-para"> 
									 Yes, returning volunteers get a 10% discount. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo44"><i class="fa fa-plus"></i>42. Is there a discount for combining programmes and destinations? </a> </h4>
									<div class="collapse" id="demo44">
									<p class="faqs-accor-para"> 
									 If volunteers are applying for 16 weeks or more and combining projects they get a 10% discount.  
									</p>
									</div>
									</div>
									
									<h4 class="accor-mid">Accommodation </h4>
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo45"><i class="fa fa-plus"></i>43. How are host families selected? </a> </h4>
									<div class="collapse" id="demo45">
									<p class="faqs-accor-para"> 
									  Each host family is carefully selected. A staff member visits the home and completes an assessment survey which takes into consideration safety, basic amenities (running water, electricity), proper sanitation, sufficient ventilation, adequate storage and family-friendly atmosphere. Once the standards are met a background check is done of all persons in the household and if everything is satisfactory the host family is provided with an orientation, a host family manual and then begins hosting volunteers. There is a quarterly visit to the host family to ensure standards are being maintained.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo46"><i class="fa fa-plus"></i>44. Do I need to bring towels?</a> </h4>
									<div class="collapse" id="demo46">
									<p class="faqs-accor-para"> 
									 Yes, bring your own towel, at least two (2). 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo47"><i class="fa fa-plus"></i>45. Do I need to bring sheets? </a> </h4>
									<div class="collapse" id="demo47">
									<p class="faqs-accor-para"> 
									  No, these will be provided by your host family.  
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo48"><i class="fa fa-plus"></i>46. Do I need to bring a mosquito net? </a> </h4>
									<div class="collapse" id="demo48">
									<p class="faqs-accor-para"> 
									  If you want to you can bring a mosquito net, however in some cases you might have difficulty installing them. You can travel with mosquito repellant as an alternative.  
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo49"><i class="fa fa-plus"></i>47. Do I need to bring a sleeping bag? </a> </h4>
									<div class="collapse" id="demo49">
									<p class="faqs-accor-para"> 
									 You do not need to travel with a sleeping bag. A bed, bed linen and pillows will be provided by your host family.  
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo50"><i class="fa fa-plus"></i>48. Should I bring gifts for my host family?</a> </h4>
									<div class="collapse" id="demo50">
									<p class="faqs-accor-para"> 
									 You do not have to bring any gifts for your host family but it is a nice gesture. You can travel with small souvenirs such as a cup, key ring, pens, postcard and sweets. Do not bring items that are too heavy that will affect your weight requirement with the airline.  
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo51"><i class="fa fa-plus"></i>49. Will I live with other volunteers? </a> </h4>
									<div class="collapse" id="demo51">
									<p class="faqs-accor-para"> 
									  This is not a guarantee and is dependent on your time of arrival and availability within host families. If you wish to live with another volunteer you can make this request on your application form.
									</p>
									</div>
									</div>
									
									<h4 class="accor-mid">Money Matters </h4>
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo52"><i class="fa fa-plus"></i>50. What is the local currency?</a> </h4>
									<div class="collapse" id="demo52">
									<p class="faqs-accor-para"> 
									  It varies across destinations; in Grenada and St. Lucia it is Eastern Caribbean Dollars and in Jamaica it is Jamaican dollars.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo53"><i class="fa fa-plus"></i>51. How much money should I bring?</a> </h4>
									<div class="collapse" id="demo53">
									<p class="faqs-accor-para"> 
									  This will vary based on your tastes, preferences and needs. Lunch can range from $5USD - $10USD, popular snacks from $1USD up and fast food $5USD and up. Your evening recreation could range from $20USD and above. Taking taxis on the weekends to the town will cost approximately $2USD and if you are travelling out of town it could cost $10-$30USD or more; if you are travelling alone or with a group. Meals while out on the weekend starts at $5USD and accommodation from $30USD per night dependent on location. To visit a local attraction can vary from $5USD - $30USD or more. To attend a local concert, a movie or any form of entertainment ranges from $6USD - $15USD. These are all estimates.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo54"><i class="fa fa-plus"></i>52. How should I bring my money? </a> </h4>
									<div class="collapse" id="demo54">
									<p class="faqs-accor-para"> 
									 You can bring cash, debit card, credit card or travelers cheque. The currencies which are easier to exchange in the Caribbean are US dollars, Canadian dollars, Pound Sterling and Euros. We suggest that you travel with limited cash as there are restrictions on how much cash you can take into some countries.  
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo55"><i class="fa fa-plus"></i>53. How do I exchange money?</a> </h4>
									<div class="collapse" id="demo55">
									<p class="faqs-accor-para"> 
									 You will not need any money until your first work day. Therefore when you arrive at the airport you do not need to change your money there. You will be picked up by a staff the day after arrival and taken to a bank or cambio to exchange your money and you will get better rates than at the airport.
									</p>
									</div>
									</div>
									
									<h4 class="accor-mid">Travel </h4>
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo56"><i class="fa fa-plus"></i>54. Do I need a passport? </a> </h4>
									<div class="collapse" id="demo56">
									<p class="faqs-accor-para"> 
									  Yes, you need a valid passport to travel internationally. Your passport must be valid for at least 6 months after your return date. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo57"><i class="fa fa-plus"></i>55. Is airfare included in the programme fee?</a> </h4>
									<div class="collapse" id="demo57">
									<p class="faqs-accor-para"> 
									 No, airfare is not included. Please see <a href="what-included.php">What is Included</a> and <a href="what-not-included.php">What is Not Included</a>. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo58"><i class="fa fa-plus"></i>56. How do I book my flight? </a> </h4>
									<div class="collapse" id="demo58">
									<p class="faqs-accor-para"> 
									 You can contact a reputable travel agent to book your flight. RSVP Caribbean does not organize flights. See <a href="flight.php">Flights</a> for more details. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo59"><i class="fa fa-plus"></i>57. Do I have to pay for transportation to and from my programme?</a> </h4>
									<div class="collapse" id="demo59">
									<p class="faqs-accor-para"> 
									 You will receive your taxi money by the second Thursday of the month from RSVP Caribbean as this is included in your programme fee. If you are staying for more than one (1) month, this becomes due each second Thursday.  
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo60"><i class="fa fa-plus"></i>58. How far is my programme from my host family? </a> </h4>
									<div class="collapse" id="demo60">
									<p class="faqs-accor-para"> 
									 This is dependent on where you will live and volunteer. However, most partner agencies are within 15-45 minutes of the host families. 
									</p>
									</div>
									</div>
									
									<h4 class="accor-mid">Internship </h4>
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo61"><i class="fa fa-plus"></i>59. What is an internship? </a> </h4>
									<div class="collapse" id="demo61">
									<p class="faqs-accor-para"> 
									 An internship is for students or experienced professionals to gain knowledge in their field of interest. Interns work alongside qualified professionals and have the opportunity to learn local policies and procedures.
									</p>
									</div>
									</div>
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo63"><i class="fa fa-plus"></i>60. What types of internships are available? </a> </h4>
									<div class="collapse" id="demo63">
									<p class="faqs-accor-para"> 
									 We offer internships in Child Care and Protection, Teaching, Medicine and Health Care, Nursing, Physiotherapy, Dentistry, Sports, Humanitarian, 
                   Environmental Awareness and Protection, Reggae Music and Dance and Rastafarian Culture. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo64"><i class="fa fa-plus"></i>61.  What qualifications do I need for an internship?</a> </h4>
									<div class="collapse" id="demo64">
									<p class="faqs-accor-para"> 
									 You need to have completed at least two (2) years of university, or, be practicing in your field for at least one (1) year.  
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo65"><i class="fa fa-plus"></i>62. Do I need to provide any other information? </a> </h4>
									<div class="collapse" id="demo65">
									<p class="faqs-accor-para"> 
									 You need to provide details on the objectives of the internship and any form that needs to be completed. These are reviewed and then you are informed if your internship is possible. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo66"><i class="fa fa-plus"></i>63. What will I do as an intern?</a> </h4>
									<div class="collapse" id="demo66">
									<p class="faqs-accor-para"> 
									 This is dependent on the programme you select but in most cases you will observe and conduct day to day tasks based on your programme. The day to day tasks will be based on your area of interest and or specialty, your current skills and the needs of the partner organization and what you are allowed to do.
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo67"><i class="fa fa-plus"></i>64. Who will supervise my internship? </a> </h4>
									<div class="collapse" id="demo67">
									<p class="faqs-accor-para"> 
									 Each programme has a qualified supervisor and also a qualified RSVP Caribbean staff member. These individuals will supervise your work and provide you with guidance and support. 
									</p>
									</div>
									</div>
									
									<div class="single-faqsaccor">
									<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo68"><i class="fa fa-plus"></i>65. How long can I do an internship? </a> </h4>
									<div class="collapse" id="demo68">
									<p class="faqs-accor-para"> 
									  It depends on the programme and the number of hours you want to complete. Internships typically start at 2 weeks and run for up to 3 months. If you wish to stay longer this can be arranged. 
									</p>
									</div>
									</div>
									
							  </div>
							</div>
              <!-- /////////////////////////////////////////////////// COUNTRY /////////////////////////////////////////////////// -->
							<div id="menu1" class="tab-pane fade">
							  <p>These questions will help you with what you need to know while you are at your destination. For questions on what should happen before your departure to start your programme, 
                upon your return home, or, if you are a parent and want additional information please see <a href="faq.php">FAQs – Before Departure</a>, <a href="faq.php">FAQs – Upon Return Home</a> 
                and <a href="faq.php">FAQs - for Parents</a></p>
								  <div class="accordion-faqs"> 
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo70"><i class="fa fa-plus"></i>1. Will I be picked up at the airport? </a> </h4>
										<div class="collapse" id="demo70">
										<p class="faqs-accor-para"> 
										 Yes, a RSVP Caribbean driver will pick you up at the airport and take you directly to your host family. At least 2 weeks before arrival you will get the name and a picture of the driver who will pick you up via email.
										</p>
										</div>
										</div> 
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo71"><i class="fa fa-plus"></i>2. What will happen after I arrive? </a> </h4>
										<div class="collapse" id="demo71">
										<p class="faqs-accor-para"> 
										 After you arrive and you are with the driver, a RSVP Caribbean staff member will speak with you, give you a warm welcome and explain what will happen in the next 24 hours. You will then be taken to your host family where you will settle in and get some rest.
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo72"><i class="fa fa-plus"></i>3. How many days will I volunteer on my programme or project? </a> </h4>
										<div class="collapse" id="demo72">
										<p class="faqs-accor-para"> 
										 You will volunteer at your programme for 5 hours each day Mondays – Fridays. 
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo73"><i class="fa fa-plus"></i>4. Can I take time off during my programme or project? </a> </h4>
										<div class="collapse" id="demo73">
										<p class="faqs-accor-para"> 
										 Only if you are sick or have a legitimate reason, for example to visit the embassy, entitled vacation or doctor’s appointment. Time off for leisure and fun is not allowed.
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo74"><i class="fa fa-plus"></i>5. What are the office opening hours? </a> </h4>
										<div class="collapse" id="demo74">
										<p class="faqs-accor-para"> 
										 Mondays – Thursdays 8:30am – 4:30pm and Fridays 8:30am – 3:30pm. However you can call us any day of the week and at any time for assistance.
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo75"><i class="fa fa-plus"></i>6. If I have a problem, who should I call?</a> </h4>
										<div class="collapse" id="demo75">
										<p class="faqs-accor-para"> 
										 First call your Programme Coordinator. If you do not get through to him/her call any RSVP staff member on your emergency card which you will get during orientation. 
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo76"><i class="fa fa-plus"></i>7. What if I get sick? </a> </h4>
										<div class="collapse" id="demo76">
										<p class="faqs-accor-para">Although this is by no means a regular occurrence, if this happens while you are in-country we will provide you with 24-hour 
                    support. A staff member will ensure that you receive immediate medical assistance and that the medical insurance company provided on file is contacted 
                    immediately. Your emergency contact will be updated immediately and kept fully up-to-date throughout your illness.  In the event of a serious illness or 
                    accident, each volunteer will be covered by their insurance policy, which is why we require all volunteers to have adequate insurance which includes 
                    repatriation. </p>
										</div>
										</div>
								</div>
							</div>
              <!-- /////////////////////////////////////////////////// PARENTS /////////////////////////////////////////////////// -->
							<div id="menu2" class="tab-pane fade">
							  <p>These questions will help with what you need to know as parents. For questions on: before departure, while in-country or upon return home please see <a href="faq.php">FAQs – Before Departure</a>, <a href="faq.php">FAQs – While In-Country</a>, <a href="faq.php">FAQs Upon Return Home</a> </p>
								  <div class="accordion-faqs"> 
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo77"><i class="fa fa-plus"></i>1. Will my child be met at the airport? </a> </h4>
										<div class="collapse" id="demo77">
										<p class="faqs-accor-para"> 
										 Yes, a RSVP Caribbean driver will pick your child up at the airport and take him/her directly to the host family. At least two (2) weeks before arrival via email you will get the name and a picture of the driver who will pick your child up.
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo78"><i class="fa fa-plus"></i>2. What if my child becomes ill? </a> </h4>
										<div class="collapse" id="demo78">
										<p class="faqs-accor-para"> 
										 Although this is by no means a regular occurrence, if this happens while your child is in country we will provide your child with 24-hour support. A staff will ensure that your child receives immediate medical assistance and that the medical insurance company provided on file is contacted immediately. As the parent you are also contacted immediately so that the situation can be explained and you are kept fully up-dated.  In the event of a serious illness or accident, each volunteer will be covered by their insurance policy, which is why we require all volunteers to have adequate insurance which includes repatriation.
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo79"><i class="fa fa-plus"></i>3. What if my child is homesick? </a> </h4>
										<div class="collapse" id="demo79">
										<p class="faqs-accor-para"> 
										 Many of our volunteers travel away from home for the first time. It is understandable that they will become homesick. Our trained staff will make every effort to provide support and integrate them with other volunteers. Through our friendly and comfortable environment at the RSVP office, programme support staff and host family, most times the volunteers eventually adjust to their new environment. 
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo80"><i class="fa fa-plus"></i>4. How will I know where my child will be?</a> </h4>
										<div class="collapse" id="demo80">
										<p class="faqs-accor-para"> 
										 Each volunteer is provided with a RSVP webpage. A month before departure all details about their programme and accommodation are uploaded. This includes names, full address, contact numbers and email addresses where available. You can also contact the office for any updates.
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo81"><i class="fa fa-plus"></i>5. How can I communicate with my child? </a> </h4>
										<div class="collapse" id="demo81">
										<p class="faqs-accor-para"> 
										 You can call your child at the host family or on his/her mobile Caribbean number. Internet cafes are accessible in some countries so you will be able to communicate via the internet in some locations. You will receive a call or an email once your child has safely arrived and we encourage volunteers to call home or send messages frequently so parents are aware that they are doing well. 
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo82"><i class="fa fa-plus"></i>6. Will my child be safe? </a> </h4>
										<div class="collapse" id="demo82">
										<p class="faqs-accor-para"> 
										 RSVP Caribbean is committed to the safety and well-being of all volunteers and makes it a priority to carefully plan and select destinations, staff, host families, 
                     drivers, communities and programmes that ensure that all volunteers are safe. RSVP has a risk management and safety plan for all destinations. All programmes have trained and 
                     dedicated staff who provide 24-hour support. A full orientation is provided the first day after arrival. Please also see <a href="safety-support.php">Safety and Support</a>.
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo83"><i class="fa fa-plus"></i>7. What emergency procedures are in place? </a> </h4>
										<div class="collapse" id="demo83">
										<p class="faqs-accor-para"> 
										 Your child will receive an emergency contact card upon arrival with the names of each staff member and also his/her first point of contact. Once there is an emergency we will respond based on the nature of the emergency as outlined in our emergency plan. 
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo84"><i class="fa fa-plus"></i>8. How do I know RSVP Caribbean is a real company? </a> </h4>
										<div class="collapse" id="demo84">
										<p class="faqs-accor-para"> 
										  We are registered with the Companies Office of Jamaica and verification can be done on their company website. We have established partners across the Caribbean who can verify our authenticity. We also have volunteers who have previously participated in our programmes that you can speak with and get feedback on their experience. 
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo85"><i class="fa fa-plus"></i>9. Will boys and girls be in the same family? </a> </h4>
										<div class="collapse" id="demo85">
										<p class="faqs-accor-para"> 
										 No, boys and girls are housed at separate host families. 
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo86"><i class="fa fa-plus"></i>10. What will my child do on the weekends?</a> </h4>
										<div class="collapse" id="demo86">
										<p class="faqs-accor-para"> 
										 If your child is on a regular programme he/she can enjoy the weekends with other volunteers by visiting attractions, going to the beach and enjoying the Caribbean way of life. Staff members can only provide advice on weekend trips but cannot be held responsible. If your child is on the summer or spring break projects weekend tours are planned for them and a staff member attends these with the volunteers.
										</p>
										</div>
										</div>
										
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo87"><i class="fa fa-plus"></i>11. Are meals included 
                                        in the cost? </a> </h4>
										<div class="collapse" id="demo87">
										<p class="faqs-accor-para"> 
										 Breakfast and dinner is provided at the host family. If your child is staying home on the weekends and not travelling out, these two 
                                         meals are also provided. Lunch is only included in the health and wellness programme, rastafarian culture project and summer project.
										</p>
										</div>
										</div>
								</div>
							</div>
              <!-- /////////////////////////////////////////////////// RETURN /////////////////////////////////////////////////// -->
							<div id="menu3" class="tab-pane fade">
							  <p>These questions will help you with what you need to know when you return home after your volunteering experience. For questions on before departure, while incountry or if you are a parent and want additional information please see <a href="faq.php">FAQs – Before Departure</a>, <a href="faq.php">FAQs – While In-Country and FAQs for Parents</a> </p>
							  
								  <div class="accordion-faqs"> 
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo88"><i class="fa fa-plus"></i>1. Will I be able to keep in touch when I get back home? </a> </h4>
										<div class="collapse" id="demo88">
										<p class="faqs-accor-para"> 
										 Yes, you will receive monthly newsletters and you can keep in touch via social media. Of course, you could also take another trip and volunteer with us. 
										</p>
										</div>
										</div> 
										<div class="single-faqsaccor">
										<h4 class="text-uppercase offset-top-30 text-bold"><a data-toggle="collapse" href="#demo89"><i class="fa fa-plus"></i>2. How do I become an RSVP Representative? </a> </h4>
										<div class="collapse" id="demo89">
										<p class="faqs-accor-para"> 
										 You can join the programme to tell others about your great experience in the Caribbean? Please see <a href="rsvp-representative.php">Become a RSVP Representative</a> for more information.
										</p>
										</div>
										</div>
								</div>
							</div>
						  </div>
					
				</div>
            </div>
        </section>	
		
		
		
				
		
      </main>
            <!-- Page Footer-->
            <!-- Default footer-->
            <?php include('layout/footer.php'); ?>
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
