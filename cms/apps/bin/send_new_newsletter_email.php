<?php
$rs     = unserialize(base64_decode($_POST['email']));
$file   = "http://www.rsvpcaribbean.com/rsvp_docs/newsletter/" . $_POST['f'];
if(!$rs){return false;}

$subject = "Newsletter added";
$msg     = "A newsletter has been uploaded for the " . date('F Y', mktime(0, 0, 0, $_POST['m'], 0, $_POST['y'])) . ",
            <p>Click the link below to view.</p> <a href='".$file."'>".$file."</a>.";
        
$arr = array();
foreach($rs as $key => $value){
    $arr[] = $rs[$key]['fullname'] . ' <' . $rs[$key]['email'] . '>';
}

$to       = null;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: rsvpcaribbean.com <no-reply@rsvpcaribbean.com>' . "\r\n";
$headers .= 'Bcc: ' . implode(', ', $arr) . "\r\n";

include_once '../../../tools/newsletter/email-notice.php';
$msg = str_replace('__CONTENT_AREA__', $msg, $email_template);
@mail($to, $subject, $msg, $headers);
?>