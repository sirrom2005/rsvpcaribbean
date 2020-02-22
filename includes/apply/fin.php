<?php
$_SESSION['APPLICATION_FORM']['REFERENCE_ADDRESS'] = array(
	'address1' 	=> $_SESSION['APPLICATION_FORM']['REFERENCE']['address1'],
	'address2' 	=> $_SESSION['APPLICATION_FORM']['REFERENCE']['address2'],
	'address3' 	=> $_SESSION['APPLICATION_FORM']['REFERENCE']['address3'],
	'country_id'=> $_SESSION['APPLICATION_FORM']['REFERENCE']['country_id'],
	'state_id'	=> $_SESSION['APPLICATION_FORM']['REFERENCE']['state_id'],
	'zip_code' 	=> $_SESSION['APPLICATION_FORM']['REFERENCE']['zip_code']
);

$_SESSION['APPLICATION_FORM']['ADDRESS'] = array(
	'address1' 	=> $_SESSION['APPLICATION_FORM']['APPLICATION']['address1'],
	'address2' 	=> $_SESSION['APPLICATION_FORM']['APPLICATION']['address2'],
	'address3' 	=> $_SESSION['APPLICATION_FORM']['APPLICATION']['address3'],
	'country_id'=> $_SESSION['APPLICATION_FORM']['APPLICATION']['country_id'],
	'state_id'	=> $_SESSION['APPLICATION_FORM']['APPLICATION']['state_id'],
	'zip_code'  => $_SESSION['APPLICATION_FORM']['APPLICATION']['zip_code'],
	'phone'     => $_SESSION['APPLICATION_FORM']['APPLICATION']['home_phone']
);

$_SESSION['APPLICATION_FORM']['VOL'] = array(
	'nationality_id' 	=> $_SESSION['APPLICATION_FORM']['APPLICATION']['nationality_id'],
	'birth_country_id' 	=> $_SESSION['APPLICATION_FORM']['APPLICATION']['birth_country_id'],
	'name_on_passport' 	=> $_SESSION['APPLICATION_FORM']['APPLICATION']['name_on_passport'],
	'time_to_speak'		=> $_SESSION['APPLICATION_FORM']['APPLICATION']['time_to_speak'],
	'host_family_preference'		=> $_SESSION['APPLICATION_FORM']['PREFERENCE']['host_request'],
	'host_family_preference_desc'	=> $_SESSION['APPLICATION_FORM']['PREFERENCE']['host_request_desc'],
	'project_special_interest'		=> $_SESSION['APPLICATION_FORM']['PREFERENCE']['project_special_interest']
);

$username = substr($_SESSION['APPLICATION_FORM']['APPLICATION']['firstname'],0,1).$_SESSION['APPLICATION_FORM']['APPLICATION']['lastname'];
$_SESSION['APPLICATION_FORM']['APPLICATION']['account_type'] = 3;
$_SESSION['APPLICATION_FORM']['APPLICATION']['password'] = md5('password');
$_SESSION['APPLICATION_FORM']['APPLICATION']['username'] = preg_replace("/[^a-zA-Z]+/", "", strtolower($username));
$_SESSION['APPLICATION_FORM']['APPLICATION']['date_added'] = date('Y-m-d G:i:s');

unset($_SESSION['APPLICATION_FORM']['APPLICATION']['confirm_email']);
unset($_SESSION['APPLICATION_FORM']['EMERGENCY']['confirm_email']);
unset($_SESSION['APPLICATION_FORM']['REFERENCE']['confirm_email']);
unset($_SESSION['APPLICATION_FORM']['OTHER']['agree']);
unset($_SESSION['APPLICATION_FORM']['REFERENCE']['address1']);
unset($_SESSION['APPLICATION_FORM']['REFERENCE']['address2']);
unset($_SESSION['APPLICATION_FORM']['REFERENCE']['address3']);
unset($_SESSION['APPLICATION_FORM']['REFERENCE']['country_id']);
unset($_SESSION['APPLICATION_FORM']['REFERENCE']['state_id']);
unset($_SESSION['APPLICATION_FORM']['REFERENCE']['zip_code']);
unset($_SESSION['APPLICATION_FORM']['PREFERENCE']['host_request']);
unset($_SESSION['APPLICATION_FORM']['PREFERENCE']['host_request_desc']);
unset($_SESSION['APPLICATION_FORM']['PREFERENCE']['project_special_interest']);

unset($_SESSION['APPLICATION_FORM']['APPLICATION']['address1']);
unset($_SESSION['APPLICATION_FORM']['APPLICATION']['address2']);
unset($_SESSION['APPLICATION_FORM']['APPLICATION']['address3']);
unset($_SESSION['APPLICATION_FORM']['APPLICATION']['country_id']);
unset($_SESSION['APPLICATION_FORM']['APPLICATION']['state_id']);
unset($_SESSION['APPLICATION_FORM']['APPLICATION']['zip_code']);
unset($_SESSION['APPLICATION_FORM']['APPLICATION']['home_phone']);

unset($_SESSION['APPLICATION_FORM']['APPLICATION']['nationality_id']);
unset($_SESSION['APPLICATION_FORM']['APPLICATION']['birth_country_id']);
unset($_SESSION['APPLICATION_FORM']['APPLICATION']['name_on_passport']);
unset($_SESSION['APPLICATION_FORM']['APPLICATION']['time_to_speak']);			
			
$_SESSION['APPLICATION_FORM']['VOLUNTEER'] = array_merge($_SESSION['APPLICATION_FORM']['EDUCATION'],$_SESSION['APPLICATION_FORM']['OTHER'],$_SESSION['APPLICATION_FORM']['VOL']);
$_SESSION['APPLICATION_FORM']['LESSONS']['start_date'] 	= $_SESSION['APPLICATION_FORM']['PREFERENCE']['start_date'];
$_SESSION['APPLICATION_FORM']['LESSONS']['end_date']   	= $_SESSION['APPLICATION_FORM']['PREFERENCE']['end_date'];
$_SESSION['APPLICATION_FORM']['LESSONS']['lessons'] 	= $_SESSION['APPLICATION_FORM']['PREFERENCE']['lessons_add_on'];

unset($_SESSION['APPLICATION_FORM']['APPLICATION']['guardian_email']);
unset($_SESSION['APPLICATION_FORM']['PREFERENCE']['lessons_add_on']);
unset($_SESSION['APPLICATION_FORM']['EDUCATION']);
unset($_SESSION['APPLICATION_FORM']['OTHER']);
unset($_SESSION['APPLICATION_FORM']['VOL']);

$obj = new site();

$rt = $obj->getResultSet("SELECT COUNT(username) AS cnt FROM account WHERE username = '{$_SESSION['APPLICATION_FORM']['APPLICATION']['username']}'");
if($rt[0]['cnt']){
	$_SESSION['APPLICATION_FORM']['APPLICATION']['username'] .= rand(1000,9000);
}
$accountId = $obj->insertRecord($_SESSION['APPLICATION_FORM']['APPLICATION'], 'account');
$addressId = $obj->insertRecord($_SESSION['APPLICATION_FORM']['ADDRESS'], 'address');
if(!$accountId){
	exit("APPLICATION Error...");
}

$_SESSION['APPLICATION_FORM']['VOLUNTEER']['account_id'] = $accountId;
$_SESSION['APPLICATION_FORM']['VOLUNTEER']['address_id'] = $addressId;
$_SESSION['APPLICATION_FORM']['VOLUNTEER']['user_id']    = $accountId;
$_SESSION['APPLICATION_FORM']['VOLUNTEER']['date_added'] = date('Y-m-d G:i:s');
$_SESSION['APPLICATION_FORM']['VOLUNTEER']['date_updated']=date('Y-m-d G:i:s');

if(!$obj->insertRecord($_SESSION['APPLICATION_FORM']['VOLUNTEER'], 'volunteer')){
	exit("VOLUNTEER Error...");
}
	
$_SESSION['APPLICATION_FORM']['PREFERENCE']['volunteer_id']     = $accountId;  
$_SESSION['APPLICATION_FORM']['PREFERENCE']['user_id'] 		= $accountId;
$_SESSION['APPLICATION_FORM']['PREFERENCE']['date_added'] 	= date('Y-m-d G:i:s');
if(!$obj->insertRecord($_SESSION['APPLICATION_FORM']['PREFERENCE'], 'volunteer_placement')){
	exit("PREFERENCE Error...");
}

$_SESSION['APPLICATION_FORM']['EMERGENCY']['volunteer_id'] = $accountId;
if(!$obj->insertRecord($_SESSION['APPLICATION_FORM']['EMERGENCY'], 'guardian')){
	exit("EMERGENCY Error...");
}

if($_SESSION['APPLICATION_FORM']['LESSONS']['lessons']){
	$_SESSION['APPLICATION_FORM']['LESSONS']['volunteer_id'] = $accountId;
	if(!$obj->insertRecord($_SESSION['APPLICATION_FORM']['LESSONS'], 'lessons_add_on')){
		exit("LESSONS Error...");
	}
}

$obj->insertRecord(array('volunteer_id' => $accountId), 'administration');
$addressId = $obj->insertRecord($_SESSION['APPLICATION_FORM']['REFERENCE_ADDRESS'], 'address');

$_SESSION['APPLICATION_FORM']['REFERENCE']['volunteer_id'] = $accountId;
$_SESSION['APPLICATION_FORM']['REFERENCE']['address_id']   = $addressId;
if(!$obj->insertRecord($_SESSION['APPLICATION_FORM']['REFERENCE'], 'reference')){
	exit("REFERENCE Error...");
}

/*$to       = $_SESSION['APPLICATION_FORM']['APPLICATION']['email'];
$subject  = "Message from RSVP Caribbean";	
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: rsvpcaribbean.com <no-reply@s104-238-97-224.secureserver.net>' . "\r\n";

include_once '../../tools/newsletter/email-notice.php';
$name = $_SESSION['APPLICATION_FORM']['APPLICATION']['firstname'].' '.$_SESSION['APPLICATION_FORM']['APPLICATION']['lastname'];
$msg = "<b>Hello {$name}</b>, 
		<p>Thank you for submitting your application to volunteer with RSVP Caribbean.</p> 
		<p>Your application will be reviewed and you will be contacted within 5 working days.</p>
		Regards";

mail($to, $subject, str_replace('__CONTENT_AREA__', $msg, $email_template), $headers);

$msg = "New volunteer application form submitted by {$name}.
		<p>Login into the <a href='https://www.rsvpcaribbean.com/cms/'>Admin Panel</a> to view details.</p>";
mail("admin@rsvpcaribbean.com", "New application", str_replace('__CONTENT_AREA__', $msg, $email_template), $headers);*/

$name = $_SESSION['APPLICATION_FORM']['APPLICATION']['firstname'].' '.$_SESSION['APPLICATION_FORM']['APPLICATION']['lastname'];
$msg1 = "<b>Hello {$name}</b>, 
		<p>Thank you for submitting your application to volunteer with RSVP Caribbean.</p> 
		<p>Your application will be reviewed and you will be contacted within 5 working days.</p>
		Regards";

$msg2 = "New volunteer application form submitted by {$name}.
		<p>Login into the <a href='https://www.rsvpcaribbean.com/cms/'>Admin Panel</a> to view details.</p>";

send_email($_SESSION['APPLICATION_FORM']['APPLICATION']['email'],
            'no-reply@rsvpcaribbean.com',
            "Message from RSVP Caribbean", 
            $msg1);

send_email( "admin@rsvpcaribbean.com",
            'no-reply@s104-238-97-224.secureserver.net',
            "New application", 
            $msg2);

function send_email($to,$from,$subject,$msg){
    $email_template = "EMAIL_TEMPLATE";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: rsvpcaribbean.com <'.$from.'>' . "\r\n".
            'Reply-To: ' .$from. "\r\n" .
            'Return-Path: '.$from.  "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    
    include_once 'tools/newsletter/email-notice.php';
    mail($to, $subject, str_replace('__CONTENT_AREA__', $msg, $email_template), $headers);
}

$key = 	$_SESSION['APPLICATION_FORM']['APPLICATION']['email'].'_%_'.
		$_SESSION['APPLICATION_FORM']['APPLICATION']['firstname'].'_%_'.
		$_SESSION['APPLICATION_FORM']['APPLICATION']['lastname'].'_%_'.
		$_SESSION['APPLICATION_FORM']['PREFERENCE']['project_category_id'].'_%_'.
		$_SESSION['APPLICATION_FORM']['PREFERENCE']['country_id'].'_%_'.
		$_SESSION['APPLICATION_FORM']['PREFERENCE']['start_date'].'_%_'.
		$_SESSION['APPLICATION_FORM']['PREFERENCE']['end_date'];
		
unset($_SESSION['APPLICATION_FORM']);
header('location: checkout.php?key='.base64_encode($key));
exit();