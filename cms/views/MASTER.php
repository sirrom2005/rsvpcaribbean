<?php defined('RAXANPDI')||exit(); ?>
<?php $selected = (isset($_GET['vu']))? $_GET['vu'] : ''; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RSVP Caribbean Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="views/css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts >
    <link href="views/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">RSVP Caribbean Admin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="change_password.php">Change Password</a>
                    </li>
                    <li>
                        <a href="logout.php" id="logout">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container"><br>


        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="accommodation.php" id="mm_accom" class="list-group-item <?php if($selected  == 'accommodation'){ echo "active"; } ?>">Accommodation</a>
                    <a href="volunteer-search.php?id=<?php echo base64_encode('35');?>" id="mm_administration" class="list-group-item">Administration</a>
                    <a href="volunteer-search.php?id=<?php echo base64_encode('10');?>" id="mm_accom_detail" class="list-group-item">Programme & Project Details</a>
                    <!--a href="#" class="list-group-item">***Programme and Project Details</a-->
                    <a href="call_me_back_list.php" id="mm_call_back" class="list-group-item">Call Back List</a>
                    <a href="volunteer-search.php?id=<?php echo base64_encode('5');?>" id="mm_voldetail" class="list-group-item">Volunteer Details</a>
                    <a href="index.php?vu=date_calculator" class="list-group-item <?php if($selected  == 'date_calculator'){ echo "active"; } ?>">Date Calculator</a>
                    <a href="destination_reports.php" id="mm_destination_reports" class="list-group-item">Destination Applications</a>
                    <!--a href="#" class="list-group-item">***Detail Search</a>
                    <a href="#e-filing" id="mme_file" class="list-group-item">***E-Filing</a-->
                    <a href="communications.php" id="mme_file" class="list-group-item">Communications and PR</a>
                    <!--a href="index.php?vu=validate_email" class="list-group-item" >Email Validator</a-->
                    <a href="volunteer-search.php?id=<?php echo base64_encode('30');?>" id="mm_v_fedback" class="list-group-item">Volunteer Feedback</a>
                    <!--a href="#" class="list-group-item">***File Manager</a-->
                    <a href="forms.php" id="mm_forms" class="list-group-item">Forms</a>
                    <a href="checklists.php" id="mm_checklists" class="list-group-item">Checklists</a>
                    <a href="manuals.php" id="mm_manuals" class="list-group-item">Manuals</a>
                    <a href="volunteer-search.php?id=<?php echo base64_encode('15');?>" id="mm_insurance" class="list-group-item">Insurance Details</a>
                    <a href="marketing_sales.php" id="mm_market_sales" class="list-group-item">Marketing</a>
                    <a href="accounting-list.php" id="mm_account" class="list-group-item">Accounts</a>
                    <a href="volunteer-search.php?id=<?php echo base64_encode('60');?>" id="mm_acc_admin" class="list-group-item">Accounts Administration</a>
                    <a href="volunteer-search.php?id=<?php echo base64_encode('50');?>" id="mm_rsvp_page" class="list-group-item">RSVP Webpage</a>
                    <a href="newsletter.php" id="mmnewsletter" class="list-group-item">Newsletter</a>
                    <a href="volunteer-search.php?id=<?php echo base64_encode('40');?>" id="mm_volunteer_record" class="list-group-item">Volunteer Record</a>
                    <!--a href="#" class="list-group-item">***Overseas Reports</a-->
                    <a href="volunteer-search.php?id=<?php echo base64_encode('45');?>" id="mm_volinfo" class="list-group-item">Volunteer Information</a>
                    <a href="programmes_projects.php?type=<?php echo base64_encode('2');?>" id="mm_programmes" class="list-group-item">Programmes</a>
                    <a href="programmes_projects.php?type=<?php echo base64_encode('1');?>" id="mm_projects"   class="list-group-item">Projects</a>
                    <!--a href="#" class="list-group-item">***Receipts</a>
                    <a href="#" class="list-group-item">***Reports</a-->
                    <a href="resources.php" id="mm_resources" class="list-group-item">Resources</a>
                    <a href="staff.php" id="mmstaff" class="list-group-item">Staff Information</a>
                    <a href="time-in-destinations.php" id="mmtime" class="list-group-item">Times in Destinations</a>
                    <a href="volunteer-search.php?id=<?php echo base64_encode('25');?>" id="mm_travel" class="list-group-item">Travel Details</a>
                    <a href="volunteer-search.php?id=<?php echo base64_encode('20');?>" id="mm_visa" class="list-group-item">Visa Information</a>
                    <!--a href="#" class="list-group-item">***Administration Checklist</a-->
                    <a href="faqs.php" id="mmfaq" class="list-group-item">FAQ</a>
                    <a href="/rsvp-handbook" class="list-group-item">RSVP Handbook</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <div id="imgloader" class="hide"><span>acessing server please wait...</span><p align="center"><img src="views/images/loading.gif" alt="." /></p></div>
            	<div id="msg" class="flashmsg"></div>
            	<div class="page-content master-content prepend1 append1"></div>
                <hr />
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; RSVP Caribbean Admin <?php echo date('Y');?></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery >
    <script src="views/js/jquery.js"></script-->
    <!-- Bootstrap Core JavaScript -->
    <script src="views/js/bootstrap.min.js"></script>
    <div id="overlay" style="display:none;"><div id="htmlText">ffffffffffff</div></div>
</body>
</html>
