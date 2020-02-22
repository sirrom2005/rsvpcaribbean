<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="www.rohanmorris.info">
    <title>RSVP Caribbean Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
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
    <div id="container">
        <!-- Navigation -->
        <nav class="navbar-inverse" role="navigation">
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
        
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="accommodation.php" id="mm_accom" class="list-group-item">Accommodation</a>
                    <a href="#" class="list-group-item">**Administration</a>
                    <a href="accommodation_detail.php?id=100002" id="mm_accom_detail" class="list-group-item">Accommodation Details</a>
                    <a href="#" class="list-group-item">**Programme and Project Details</a>
                    <a href="call_me_back_list.php" id="mm_call_back" class="list-group-item">Call Back</a>
                    <a href="volunteer-details.php" id="mm_voldetail" class="list-group-item">Volunteer Details</a>
                    <a href="index.php?vu=date_calculator" class="list-group-item <?php if($selected  == 'date_calculator'){ echo "active"; } ?>">Date Calculator</a>
                    <a href="#" class="list-group-item">**Destination Reports</a>
                    <a href="#" class="list-group-item">**Detail Search</a>
                    <a href="e-filing.php" id="mme_file" class="list-group-item">E-Filing</a>
                    <a href="communications.php" id="mme_file" class="list-group-item">Communications</a>
                    <!--a href="index.php?vu=validate_email" class="list-group-item" >Email Validator</a-->
                    <a href="#" class="list-group-item">***Volunteer Feedback </a>
                    <a href="#" class="list-group-item">***File Manager</a>
                    <a href="forms.php" id="mm_forms" class="list-group-item">Forms</a>
                    <a href="#" class="list-group-item">***Checklists</a>
                    <a href="manuals.php" id="mm_manuals" class="list-group-item">Manuals</a>
                    <a href="insurance_detail.php?id=100002" id="mm_insurance" class="list-group-item">Insurance Details###</a>
                    <a href="#" class="list-group-item">***Marketing</a>
                    <a href="#" class="list-group-item">***Accounts</a>
                    <a href="#" class="list-group-item">***RSVP Webpage</a>
                    <a href="newsletter.php" id="mmnewsletter" class="list-group-item">Newsletter</a>
                    <a href="note.php" id="mmnote" class="list-group-item">Volunteer Record</a>
                    <a href="#" class="list-group-item">***Overseas Reports</a>
                    <a href="#" id="mm_volinfo" class="list-group-item">***Volunteer Information</a>
                    <a href="#" class="list-group-item">***Programmes</a>
                    <a href="projects.php" id="mm_projects"  class="list-group-item">Projects</a>
                    <a href="#" class="list-group-item">***Receipts</a>
                    <a href="#" class="list-group-item">***Reports</a>
                    <a href="resources.php" id="mm_resources" class="list-group-item">Resources</a>
                    <a href="staff.php" id="mmstaff" class="list-group-item">Staff Information</a>
                    <a href="time-in-destinations.php" id="mmtime" class="list-group-item">Times in Destinations</a>
                    <a href="#" class="list-group-item">***Travel Details</a>
                    <a href="#" class="list-group-item">***Visa Information</a>
                    <a href="#" class="list-group-item">***Administration Checklist</a>
                    <a href="faqs.php" id="mmfaq" class="list-group-item">FAQ</a>
                    <a href="/rsvp-handbook" class="list-group-item">RSVP Handbook</a>
                </div>       
            </div>
            <div class="col-md-9">
                <div id="imgloader" class=""><span>acessing server please wait...</span><p align="center"><img src="views/images/loading.gif" alt="." /></p></div>
            	<div id="msg" class="flashmsg"></div>
            	<div class="page-content master-content prepend1 append1"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer">
                    <hr>
                    Copyright &copy; RSVP Caribbean Admin <?php echo date('Y');?> | Credit: <a href="http://www.rohanmorris.info" target="_blank">The Web Developer</a>
                </div>                    
            </div>
        </div>
    </div>

    <!-- jQuery >
    <script src="views/js/jquery.js"></script-->
    <!-- Bootstrap Core JavaScript -->
    <script src="views/js/bootstrap.min.js"></script>
</body>
</html>
