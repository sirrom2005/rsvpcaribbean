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
    <div class="page text-center">
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
                    <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2">
                        <span class=
                        "icon-lg mdi mdi-file-outline icon icon-white"></span>
                    </div>
                    <div class=
                    "cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                    <h2><span class="big">Terms and Conditions</span></h2>
                    </div>
                    <div class=
                    "offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                    <ul class="list-inline list-inline-dashed p">
                            <li><a href="index.php">Home</a></li>
                            <li>Terms and Conditions</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-bottom">
                <polyline points="0,0 60,0 29,29"></polyline>
            </svg>            
        </section>
        <main class="page-content section-41">
            <!-- Classic  Accordion-->
            <section>
                <div class="shell">
                    <div class="range">
                        <div class="cell-lg-12 text-lg-left">
                            <h1>Terms and Conditions</h1>
                            <hr class="divider bg-mantis hr-lg-left-0">
                        </div>
                    </div>
                    
                          <div class="section-18"><p>Please read through the terms and conditions very carefully before you submit your application. Submission of your application means 
                          that you agree with the terms and conditions outlined by RSVP Caribbean. By clicking on the box beside the words "I have read and agree to the RSVP Caribbean 
                          terms and conditions" on the application form and/or submitting your application form means you agree to the following terms and conditions. If you are unclear 
                          about any of the terms and conditions listed please call us at +1 876 569 5918 or email <a href="mailto:info@rsvpcaribbean.com">info@rsvpcaribbean.com</a> and 
                          we will be happy to explain it.</p></div>
                    
                            <!-- Classic Accordion-->
                            <div class=
                            "responsive-tabs responsive-tabs-classic"
                            data-type="accordion" style="border-bottom: 0;">
                                <ul class=
                                "resp-tabs-list tabs-group-default termsofrsvpul"
                                data-group="tabs-group-default">
                                    <li>RSVP Service</li>
                                    <li>Application Process</li>
                                    <li>Programme and Project Information</li>
                                    <li>Accommodation and Food</li>
                                    <li>Holiday</li>
                                    <li>Travel</li>
                                    <li>Insurance</li>
                                    <li>Complaints and Disciplinary
                                    Procedures</li>
                                    <li>Amendments, Cancellations, Curtailment
                                    and Late Payment</li>
                                    <li>Responsibility, Personal Risks and
                                    Other Matters</li>
                                    <li>Indemnity</li>
                                    <li>Use of Information</li>
                                    <li>Termination of Contract</li>
                                </ul>
                                <div class=
                                "resp-tabs-container rsvptermscontent tabs-group-default"
                                data-group="tabs-group-default" style="border-bottom: none;">
                                    <div>
                                        <p>1. RSVP Caribbean provides services
                                        for individuals, groups, professionals
                                        and corporate companies who wish to
                                        volunteer in the Caribbean.</p>
                                        <p>2. RSVP Caribbean offers a
                                        programme, accommodation, airport
                                        pickup and transfer to host family,
                                        transportation to airport when
                                        departing, daily breakfast and dinner,
                                        orientation on arrival, pre-arrival
                                        assistance and incountry support.</p>
                                        <p>3. RSVP Caribbean provides timely
                                        updates and advice about the
                                        volunteering experience.</p>
                                    </div>
                                    <div>
                                        <p>4. The application process has
                                        different steps, see <a href="apply.php">How to
                                        Apply and Application Form</a>; and you
                                        must complete all aspects of the
                                        application process.</p>
                                        <p>5. You agree to respond to emails,
                                        phone calls and messages sent in
                                        similar form, or by any other agreed,
                                        acceptable medium, and provide the
                                        necessary information required to
                                        better assist us in planning for you.
                                        Failure to respond or to provide the
                                        information requested will result in
                                        delays in your application or matching
                                        of programme or project and
                                        accommodation may not represent your
                                        needs.</p>
                                    </div>
                                    <div>
                                        <p>6. When you sign-up for a programme
                                        with RSVP Caribbean you are expected to
                                        work five (5) hours each day, Monday -
                                        Friday and you will be allowed one (1)
                                        hour lunch time. This one (1) hour is
                                        exclusive of the five hours of work
                                        required each day. On some programmes
                                        the hours may be more but you will not
                                        be required to work more than 8 hours
                                        each day.</p>
                                        <p>7. You are expected to work the
                                        hours that are the normal opening hours
                                        of your programme. The exact hours will
                                        be based on your location and
                                        programme.</p>
                                        <p>8. You are not allowed to take days
                                        off unless you are sick or for another
                                        legitimate reason.</p>
                                        <p>9. You will be provided with a
                                        timetable to guide your work.</p>
                                        <p>10. You should show flexibility if
                                        your programme requires you to work
                                        extra hours or on a weekend as
                                        necessary.</p>
                                        <p>11. You will be provided with a
                                        one-day orientation the day after
                                        arrival or on a Monday if you arrive
                                        Friday, Saturday or Sunday.</p>
                                        <p>12. You are required to attend a
                                        workshop once per week with other
                                        volunteers to discuss topics that will
                                        help to make your programme or project
                                        more meaningful.</p>
                                        <p>13. You are required to attend
                                        cultural events once per week to learn
                                        more about the local customs.</p>
                                        <p>14. You agree to comply with RSVP
                                        Caribbean and its partner
                                        organization’s code of conduct,
                                        policies and procedures.</p>
                                        <p>15. RSVP Caribbean provides a
                                        service connecting volunteers with
                                        partner organizations. As such, RSVP
                                        Caribbean is not liable for any actions
                                        or omissions of any partner
                                        organization.</p>
                                    </div>
                                    <div>
                                        <p>16. RSVP Caribbean is responsible
                                        for ensuring that your accommodation is
                                        in place with a Caribbean family prior
                                        to your arrival.</p>
                                        <p>17. RSVP Caribbean will ensure that
                                        basic accommodation is provided in a
                                        clean, safe and comfortable family
                                        friendly atmosphere.</p>
                                        <p>18. While at your accommodation two
                                        meals will be provided - breakfast and
                                        dinner, on most programmes. Lunch is
                                        only provided on the health and
                                        wellness programme, rastafarian culture project and summer project.</p>
                                        <p>19. If you choose to stay at your
                                        accommodation after your programme,
                                        that is, after the agreed date as per
                                        invoice, then you will be required to
                                        make this additional payment.</p>
                                        <p>20. You are not allowed to have
                                        guests (local or foreign) at your
                                        accommodation to stay overnight. Any
                                        request for a visit from a guest must
                                        be approved by your host family. This
                                        request is to be made by the volunteer.
                                        A visit means that the guest comes by
                                        at an agreed date and time with your
                                        host family and stays in a common area
                                        at your accommodation. Failure to
                                        adhere to this condition will result in
                                        disciplinary actions taken against you.
                                        The disciplinary action could include
                                        an apology to your host family, removal
                                        from the host family or removal from
                                        the programme.</p>
                                    </div>
                                    <div>
                                        <p>21. You are only entitled to holiday
                                        during your programme if you have
                                        signed up for 12 weeks or more. If you
                                        sign up for 12 weeks or more you can
                                        work the full 12 weeks or you can take
                                        2 weeks holiday. You must work 10 weeks
                                        before you can take your holiday, so
                                        your holiday will be at the end of your
                                        programme. You are not entitled to
                                        holiday if you have signed up for less
                                        than 12 weeks.</p>
                                        <p>22. If you choose to stay at your
                                        accommodation during your entitled
                                        holiday, you are allowed to, with no
                                        additional charge.</p>
                                        <p>23. If you would like to take more
                                        than your entitled holiday, you may
                                        make a request. This will require that
                                        you pay for accommodation, food and
                                        ensure that you have the necessary
                                        insurance in place.</p>
                                        <p>24. If you are doing independent
                                        travel before or after your holiday you
                                        are not allowed to stay for free at
                                        your host family.</p>
                                        <p>25. If you are doing entitled
                                        vacation or independent travel, RSVP
                                        Caribbean must be provided with the
                                        full details of your vacation period.
                                        This includes itinerary and
                                        accommodation.</p>
                                    </div>
                                    <div>
                                        <p>26. You are solely responsible for
                                        arranging and paying for your own
                                        flights and any associated costs to and
                                        from your destination.</p>
                                        <p>27. It is the responsibility of the
                                        volunteer to carry all the necessary
                                        travel documents and ensure that they
                                        are valid.</p>
                                        <p>28. RSVP Caribbean provides advice
                                        on travel but accepts no responsibility
                                        for information passed on from third
                                        parties.</p>
                                        <p>29. RSVP Caribbean provides
                                        transportation from the airport upon
                                        arrival and to the airport when you are
                                        departing.</p>
                                        <p>30. RSVP Caribbean will pay for
                                        local transportation to and from your
                                        programme; Mondays – Fridays. This is
                                        via the local taxi and bus systems. Any
                                        other transportation required, for
                                        example, social activity, evening
                                        activities and weekend trips, is the
                                        responsibility of the volunteer.</p>
                                    </div>
                                    <div>
                                        <p>31. You are required to obtain your
                                        own medical insurance for the duration
                                        of your time on the programme and if
                                        you are also doing independent travel.
                                        It is your responsibility to carefully
                                        evaluate the type, extent and levels of
                                        any insurance coverage that will be
                                        needed for your programme duration.</p>
                                        <p>32. You are required to obtain your
                                        own travel insurance for the duration
                                        of your time on the programme and if
                                        you are also doing independent travel.
                                        It is your responsibility to carefully
                                        evaluate the type, extent and levels of
                                        any insurance coverage that will be
                                        needed for your programme duration.</p>
                                        <p>33. We can provide information on
                                        insurance options but you will choose
                                        your own company. RSVP Caribbean
                                        accepts no responsibility for any
                                        insurance company and the coverage they
                                        provide.</p>
                                        <p>34. You are required to provide a
                                        copy of your travel and medical
                                        insurance to RSVP Caribbean at least 60
                                        days before your arrival date.</p>
                                        <p>35. If you become sick and need
                                        medical attention, you will have to pay
                                        out of pocket and then claim back from
                                        your insurance company. In the event of
                                        hospitalization, a RSVP Caribbean staff
                                        will assist you in contacting your
                                        insurance company and the insurance
                                        company will provide guidance on the
                                        steps to be taken.</p>
                                    </div>
                                    <div>
                                        <p class="sm-pora">RSVP Caribbean will
                                        make every effort to ensure that all
                                        aspects of your volunteering experience
                                        are properly organized. There may be
                                        circumstances due to external or
                                        unforeseen matters that may cause
                                        challenges. As such, a formal
                                        complaints procedure (for you as the
                                        volunteer) and disciplinary procedures
                                        (by RSVP Caribbean as the organizers)
                                        is necessary and outlined below in
                                        36-47.</p>
                                        <p>36. If you have a complaint about
                                        any issue before arrival in the
                                        Caribbean, call the Operations Director
                                        at +1 876 569 5918 Mondays to Thursdays
                                        8:30am – 4:30pm and 8:30am – 3:30pm on
                                        a Friday. You may also send an email to
                                        <a href=
                                        "mailto:complaints@rsvpcaribbean.com">complaints@rsvpcaribbean.com</a>.
                                        All complaints will be dealt with
                                        quickly and solutions exhausted to
                                        reach a mutually satisfactory
                                        outcome.</p>
                                        <p>37. If you have a complaint while
                                        in-country, call the Programme Director
                                        at +1 876 569 5918 Mondays to Thursdays
                                        8:30am – 4:30pm and 8:30am – 3:30pm on
                                        a Friday. All complaints will be dealt
                                        with quickly. Be mindful that while in
                                        country the culture, systems and
                                        procedures may change so we expect some
                                        level of flexibility, use of initiative
                                        and understanding when dealing with
                                        issues that may arise.</p>
                                        <p>38. If you have a problem or
                                        complaint about work please
                                        respectfully discuss this with your
                                        programme supervisor. Please also bring
                                        it to the attention of your assigned
                                        RSVP Caribbean staff member.</p>
                                        <p>39. If you have a problem or
                                        complaint about your accommodation
                                        please respectfully discuss this with
                                        your host family first or if you feel
                                        uncomfortable doing so please discuss
                                        with the RSVP Caribbean staff assigned
                                        to you.</p>
                                        <p>40. If you still feel dissatisfied
                                        after doing 36 and 37 above please
                                        bring the matter to the attention of
                                        the Regional Director by coming to the
                                        office, calling +1 876 569 5918 or send
                                        an email to
                                        <a href="mailto:complaints@rsvpcaribbean.com">complaints@rsvpcaribbean.com</a>.</p>
                                        <p>41. Every effort will be made to
                                        resolve all complaints in a timely
                                        manner and RSVP Caribbean will ensure
                                        that you are kept fully up-to-date on
                                        the matter and that workable options
                                        are provided where necessary that are
                                        mutually beneficial.</p>
                                        <p>42. If any issue between you and
                                        the host family cannot be mutually
                                        resolved, then RSVP Caribbean has the
                                        right to change your host family.</p>
                                        <p>43. If any issue between you and
                                        your programme partner cannot be
                                        mutually resolved, then RSVP Caribbean
                                        has the right to change your programme
                                        partner but within the same programme
                                        area.</p>
                                        <p>44. When a volunteer commits a
                                        breach of conduct or an offence under
                                        the laws of the country in which he/she
                                        is assigned, the matter will be dealt
                                        with as fair as possible. We hope to
                                        resolve matters before they escalate.
                                        However, RSVP Caribbean reserves the
                                        right to take the necessary actions
                                        against a volunteer if the behaviour is
                                        extremely inappropriate, repetitive or
                                        is a clear breach of the agreement with
                                        RSVP Caribbean and its partners. The
                                        breach of conduct or offence can be
                                        against but is not limited to RSVP
                                        Caribbean staff, partners and their
                                        staff, host family, beneficiaries at
                                        programmes and projects and other
                                        volunteers. The behaviour can include
                                        but is not limited to inappropriate
                                        behaviour to children, colleagues or
                                        volunteers, drunkenness, use of illegal
                                        drugs, disorderly and disruptive
                                        behaviour at work, lack of respect,
                                        failure to attend work, leaving work
                                        before scheduled time, leaving work
                                        with no reason, leaving work with no
                                        approval and not carrying out assigned
                                        tasks.</p>
                                        <p>45. For breaches of conduct there
                                        will be a first verbal warning. If the
                                        issue still continues after 5 days then
                                        a written warning is issued. This will
                                        be given to you during a meeting. If we
                                        are unable to contact you this will be
                                        sent to your accommodation address. Any
                                        other breach will result in removal
                                        from the programme and you will be sent
                                        home immediately. The volunteer will pay any costs associated with flight change. If you wish to remain
                                        in country and not return home, RSVP
                                        Caribbean will take no responsibility
                                        for your accommodation, food, insurance
                                        or travel arrangements and immigration
                                        officials will be notified.</p>
                                        <p>46. For offence under the laws of
                                        the country in which you are assigned
                                        such as but not limited to the use of
                                        illegal drugs, physical abuse, illegal
                                        guns or ammunition or any other
                                        criminal act you will be removed from
                                        the programme immediately and in
                                        instances where you are not charged
                                        with any offence by the local
                                        authorities you will be asked to leave
                                        the country and RSVP Caribbean will
                                        ensure this is done and provide
                                        transportation to the airport for
                                        immediate removal. The volunteer will
                                        pay any costs associated with flight
                                        change. If you refuse to leave the
                                        country RSVP Caribbean will report the
                                        offence to the authorities. In the
                                        event that a volunteer is charged and
                                        placed before the court RSVP Caribbean
                                        accepts no responsibility for your
                                        accommodation, food, insurance, legal
                                        representation or travel
                                        arrangements.</p>
                                        <p>47. RSVP Caribbean reserves the
                                        right to suspend you from work. You are
                                        required to abide by the terms and
                                        conditions of the company, as such RSVP
                                        Caribbean and its partners have the
                                        authority to take disciplinary measures
                                        when required.</p>
                                    </div>
                                    <div>
                                        <p>48. If you decide to amend your
                                        programme you must do this in writing.
                                        Please send an email to
                                        <a href="mailto:admin@rsvpcaribbean">admin@rsvpcaribbean.com</a>. If you call
                                        the update will be noted but
                                        confirmation is needed in writing. This
                                        should be provided within 3 working
                                        days after telephone call. Once
                                        received in writing you will then be
                                        provided with advice on changing your
                                        ticket and relevant options but you
                                        have the sole responsibility to change
                                        your ticket.</p>
                                        <p>49. If you decide to cancel your
                                        programme you must do this in writing.
                                        Please send an email to
                                        <a href="mailto:admin@rsvpcaribbean">admin@rsvpcaribbean.com</a>. If you call
                                        the update will be noted but
                                        confirmation is needed in writing. This
                                        should be provided within 3 working
                                        days after telephone call. Once
                                        received in writing you will then be
                                        provided with advice on the
                                        cancellation procedure.</p>
                                        <p>50. If you would like to extend your
                                        programme, you will be required to pay
                                        the price quoted on the website based
                                        on the date the extension was
                                        requested. No amendment fee will be
                                        charged, only the relevant extension
                                        programme fee.</p>
                                        <p>51. If you would like to extend your
                                        time but on a different programme you
                                        will be required to pay the price
                                        quoted on the website based on the date
                                        the extension was requested. You will
                                        also be required to pay an application
                                        amendment fee.</p>
                                        <p>52. A “month” as it relates to the
                                        operations of RSVP Caribbean is defined
                                        as a calendar month or date to date.
                                        For example January 1-31st or January
                                        10th – February 10th.</p>
                                        <p>53. You are required to leave your
                                        programme on the date as per your
                                        invoice. If you stay beyond this date a
                                        pro-rated amount will be charged for
                                        each additional day ($90USD) and an
                                        invoice will be provided for you to pay
                                        immediately. The price on the website
                                        at the time will apply. Please refer to
                                        the <a href="prices-jamaica.php">Programme and Project
                                        Price</a> page on our website for the
                                        current daily rate.</p>
                                        <p>54. The amendment fee is $50USD plus
                                        any other associated costs. If the
                                        total cost is going to exceed $120USD
                                        we will provide you with a quotation to
                                        get your approval before
                                        proceeding.</p>
                                        <p>55. Curtailment and cancellation
                                        charges are dependent on how early RSVP
                                        Caribbean is notified about the
                                        changes. Your stated departure date is
                                        the “start date” on your application
                                        form or any subsequent agreed upon
                                        date. If you state only a month and a
                                        year on the application form, for
                                        administrative purposes the departure
                                        date will be considered as the 1st of
                                        the month specified.</p>
                                        <ul class="terms-mid-ul">
                                            <li>a) Notice of 91 days or more:
                                            $100USD will be charged by RSVP
                                            Caribbean and any additional sum
                                            paid will be refunded. The deposit
                                            fee is non-refundable.</li>
                                            <li>b) Notice of 61-90: 75% of
                                            total programme fee will be
                                            refunded. The deposit fee is
                                            non-refundable.</li>
                                            <li>c) Notice of 31-60: 50% of
                                            total programme fee will be
                                            refunded. The deposit fee is
                                            non-refundable.</li>
                                            <li>d) Notice of 25-30 days: 25% of
                                            total programme fee will be
                                            refunded. The deposit fee is
                                            non-refundable.</li>
                                            <li>e) Notice of less than 25 days:
                                            no refund</li>
                                        </ul>
                                        <p></p>
                                        <p>56. Any exceptions to what is listed
                                        in terms of the refund policy is at the
                                        discretion of RSVP Caribbean and must
                                        be agreed to in writing at the time
                                        when any postponement or cancellation
                                        is made.</p>
                                        <p>57. Once your programme has started
                                        amendments will only be done at the
                                        discretion of RSVP Caribbean. A minimum
                                        of 14 days notice is required.</p>
                                        <p>58. If you decide to shorten your
                                        programme or project for any reason
                                        other than RSVP Caribbean not
                                        fulfilling its agreement, you will not
                                        be refunded. You will be responsible
                                        for any additional costs incurred
                                        included but not limited to travel and
                                        flight changes. RSVP Caribbean may
                                        review your circumstances and credit
                                        the remaining days to a future
                                        programme or project with RSVP
                                        Caribbean.</p>
                                        <p>59. If your programme involves two
                                        or more locations it is treated as a
                                        single programme or project and all
                                        clauses apply. Your application is
                                        treated as if you are in one
                                        destination.</p>
                                        <p>60. All payments due as per invoice
                                        must be to RSVP Caribbean 90 days
                                        before departure. Departure means start
                                        date on your application or any new
                                        date agreed in writing between you and
                                        RSVP Caribbean. The only exception to
                                        this is if you applied 90 days or less,
                                        in this case the full payment is due
                                        immediately. If your case is not an
                                        exception and you do not pay the entire
                                        amount due 90 days before departure,
                                        RSVP Caribbean reserve the right to add
                                        a surcharge of $150USD, increasing the
                                        later payment is made, without
                                        prejudice to our right to terminate the
                                        agreement for failure to pay.</p>
                                    </div>
                                    <div>
                                        <p>61. Volunteering with RSVP Caribbean
                                        is at your own risk. We accept your
                                        application with the understanding that
                                        you accept any associated risk that
                                        comes with your volunteering
                                        experience. There are external factors
                                        that RSVP Caribbean has no control over
                                        and so we are not responsible for
                                        changes, error, oversight, omissions
                                        that you may experience. This includes
                                        but is not limited to actions by
                                        airlines, local transportation, airport
                                        personnel, embassies, immigration
                                        authorities, programme partners or
                                        locals.</p>
                                        <p>62. RSVP Caribbean is not
                                        responsible for any natural disasters,
                                        unexplainable acts, acts of God and
                                        human acts such as strikes, riots, war,
                                        terrorist attacks, insolvency of
                                        related or unrelated partners in any of
                                        the countries that we operate or any
                                        area that you may travel in, to and
                                        from your programme. In the event that
                                        your programme is affected by any of
                                        these there will be no extensions or
                                        refunds.</p>
                                        <p>63. RSVP Caribbean is not liable for
                                        any injury, loss or harm that the
                                        volunteer or associates may suffer,
                                        including but not limited to personal
                                        injury, illness or disease, damage to
                                        or loss of property, damage to self,
                                        death, war or terrorism, hostage,
                                        accident, delay, or any other
                                        irregularity while on a programme or
                                        project.</p>
                                        <p>64. Tours, weekend and other
                                        activities are provided by independent
                                        third parties. RSVP Caribbean provides
                                        suggestions on tours, excursions and
                                        other activities but we are not
                                        designated agents or representatives of
                                        these third parties and as such does
                                        not accept any liability for these
                                        entities and their activities.</p>
                                        <p>65. RSVP Caribbean will provide
                                        information on how to obtain a visa,
                                        how to renew a visa, work permit
                                        exemption, immigration and registration
                                        of professionals among others where
                                        this is required. However RSVP
                                        Caribbean has no control over any
                                        changes or delays and cannot accept any
                                        responsibility as this is an agreement
                                        between the volunteer and the state
                                        which is entirely out of our
                                        control.</p>
                                        <p>66. If you are issued with a work
                                        permit exemption, visa and or
                                        registration where applicable for your
                                        selected country, this only gives you
                                        the right to volunteer. Doing paid work
                                        while on a RSVP Caribbean programme is
                                        illegal; if RSVP Caribbean or the
                                        relevant authorities find out that you
                                        are doing any form of paid work, they
                                        will take action against you, and this
                                        would also be a disciplinary matter to
                                        be dealt under “complaints and
                                        disciplinary procedure” as listed
                                        above.</p>
                                        <p>67. RSVP Caribbean is not
                                        responsible for arrangements outside
                                        your working hours. Ensure that your
                                        insurance covers all programme and
                                        leisure activities. Baggage and
                                        personal effects are the sole
                                        responsibility of the volunteer at all
                                        times.</p>
                                        <p>68. All services, programmes,
                                        projects and accommodations are subject
                                        to the laws of the destinations in
                                        which it is provided. RSVP Caribbean
                                        reserve the right to make changes to
                                        agreed plans, programmes, projects and
                                        timetables whenever in their sole
                                        judgement the circumstances warrant
                                        this or if it is deemed necessary for
                                        the safety, security and wellbeing of
                                        volunteers, staff and partners. RSVP
                                        Caribbean also reserves the right to
                                        withdraw without penalty any programme,
                                        project and destination announced with
                                        or without notice.</p>
                                        <p>69. Without in any way limiting our
                                        entitlement and our responsibilities to
                                        you as a volunteer, in the event that
                                        RSVP Caribbean is advised by the
                                        commonwealth office, foreign ministry,
                                        embassy or consulate that you should
                                        not travel to, or should not remain in,
                                        the destination where you have been
                                        assigned then we will provide the
                                        nearest possible programme or project
                                        that is similar in standard in the
                                        nearest possible destination.</p>
                                        <p>70. RSVP Caribbean reserves the
                                        right to accept or reject any volunteer
                                        application or to ask any applicant to
                                        withdraw from the process at any time
                                        or to remove the volunteer from the
                                        programme or project at any time when
                                        such action is determined by RSVP
                                        Caribbean to be in the best interest of
                                        the general operations of the programme
                                        or any individual therein. In this
                                        instance, RSVP Caribbean accepts no
                                        responsibility for any airline
                                        cancellation penalty incurred by the
                                        purchase of a non-refundable ticket,
                                        any charge of ticket costs or any other
                                        cost that you may incur.</p>
                                        <p>71. Dates, schedules, programme and
                                        project details, cost and all
                                        information from third parties are
                                        given in good faith, at said time and
                                        are subject to change with or without
                                        notice. If RSVP Caribbean is unable to
                                        provide a suitable programme or project
                                        of the type requested, we will instead
                                        offer an alternative programme or
                                        project and will refund any difference
                                        between the price paid for the original
                                        programme or project and the price
                                        charged for the alternative programme
                                        in the destination you applied for.</p>
                                        <p>72. RSVP Caribbean is governed by
                                        the laws of Jamaica and any destination
                                        in which it operates. The court of
                                        Jamaica and the specific Caribbean
                                        country where the volunteer has the
                                        dispute has jurisdiction to settle
                                        disputes which may arise out of any
                                        disagreement with RSVP Caribbean.</p>
                                        <p>73. RSVP Caribbean reserves the
                                        right to without notice change and
                                        update these terms and conditions or
                                        the services it offers at any time.</p>
                                        <p>74. RSVP Caribbean reserves the
                                        right to without notice update its
                                        website at anytime due to change in
                                        information or omission.</p>
                                        <p>75. RSVP reserves the right to not
                                        accept any application.</p>
                                        <p>76. All guarantees are given in good
                                        faith but in the event of extreme
                                        circumstances including but not limited
                                        to a natural or man-made disaster that
                                        prevents us from reasonably honouring
                                        those guarantees, RSVP Caribbean
                                        reserves the right to justifiably
                                        withdraw those guarantees.</p>
                                    </div>
                                    <div>
                                        <p>77. The volunteer agrees to
                                        indemnify RSVP Caribbean against any
                                        and all liability which RSVP Caribbean
                                        incurs arising directly or indirectly
                                        out of, or in connection (in any way)
                                        with, the volunteer’s travel, living in
                                        and providing services in the
                                        volunteer’s selected country.</p>
                                    </div>
                                    <div>
                                        <p>78. All information collected from
                                        you will be strictly confidential.</p>
                                        <p>79. Information will only be shared
                                        with relevant third parties such as our
                                        programme partners and offices across
                                        the world.</p>
                                        <p>80. We will get your permission
                                        before providing your details to anyone
                                        else.</p>
                                        <p>81. RSVP Caribbean reserves the
                                        right to use pictures, videos,
                                        testimonials and all other written and
                                        visual content on our website, social
                                        media and our various communication
                                        platforms.</p>
                                    </div>
                                    <div>
                                        <p>82. Use of any form of illegal drugs.</p>
                                        <p>83. Involvement in any illegal activities.</p>
                                        <p>84. Provision of false information.</p>
                                        <p>85. If you leave the programme before the agreed date.</p>
                                        <p>86. You are charged of a criminal offence.</p>
                                        <p>87. You are involved in sexual misconduct.</p>
                                        <p>88. If the contract is being terminated will not be entitled to a refund.</p>
                                        <p>89. RSVP Caribbean reserves the right to notify the emergency contact noted on your application in the event
                                        that you are dismissed from the programme and in other circumstances deemed necessary by RSVP Caribbean.</p>
                                    </div>
                                </div>
                                <div class="terms-update">
                                    <strong>Updated :</b> December 2016</strong>
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