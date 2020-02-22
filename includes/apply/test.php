<?php
$to       = "sirrom2005@gmail.com";
$subject  = "Message from RSVP Caribbean";	
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: rsvpcaribbean.com <no-reply@s104-238-97-224.secureserver.net>' . "\r\n";

include_once '../../tools/newsletter/email-notice.php';
echo $name = 'Rohan (Testing) morris-'.time();
$msg = "<b>Hello {$name}</b>, 
		<p>Thank you for submitting your application to volunteer with RSVP Caribbean.</p> 
		<p>Your application will be reviewed and you will be contacted within 5 working days.</p>
		Regards";

if(mail($to, $subject, str_replace('__CONTENT_AREA__', $msg, $email_template), $headers)){
    echo "email to client<br>";
}

$msg = "New volunteer application form submitted by {$name}.
		<p>Login into the <a href='https://www.rsvpcaribbean.com/cms/'>Admin Panel</a> to view details.</p>";
if(mail("admin@rsvpcaribbean.com", "New application", str_replace('__CONTENT_AREA__', $msg, $email_template), $headers))
{
    echo "email to admininn<br>";
}