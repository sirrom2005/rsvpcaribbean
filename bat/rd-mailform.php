<?php
$recipients = 'info@rsvpcaribbean.com';
try {
    require './phpmailer/PHPMailerAutoload.php';

    preg_match_all("/([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/", $recipients, $addresses, PREG_OFFSET_CAPTURE);

    if (!count($addresses[0])) {
        die('MF001');
    }
    
    if (preg_match('/^(127\.|192\.168\.)/', $_SERVER['REMOTE_ADDR'])) {
        die('MF002');
    }

    $template = file_get_contents('rd-mailform.tpl');

    if (isset($_POST['form-type'])) {
        switch ($_POST['form-type']){
            case 'contact':
                $subject = 'Enquiry Message';
                break;
            case 'subscribe':
                include_once('../config/config.php');
                include_once('../classes/site.class.php');
                $obj = new site();
                $data['email'] = $_POST['newsletter_email'];
                $obj->insertRecord($data, 'newsletter_email');
                die('MF000');
            break;
            case 'order':
                $subject = 'Order Request';
                break;
            case 'call-back':
                $subject = 'Call Back Request';
                include_once('../config/config.php');
                include_once('../classes/site.class.php');
                $obj = new site();
                $data['first-name']     = $_POST['first-name'];
                $data['last-name']      = $_POST['last-name'];
                $data['email']          = $_POST['email'];
                $data['telephone-number'] = $_POST['telephone-number'];
                $data['organization']   = $_POST['organization'];
                $data['hear-about']     = $_POST['hear-about'];
                $data['message']        = $_POST['message'];
                $data['best-time-call'] = $_POST['best-time-call'];
                $data['newsletter']     = $_POST['newsletter'];
                $data['date_added']     = date('Y-m-d G:i:s');
                $obj->insertRecord($data, 'callback');
                
                break;
            case 'quote':
                $subject = 'Quote Timetable Request';
                break;
            default:
                $subject = 'A message from your site visitor';
                break;
        }
    }else{
        die('MF004');
    }

    if (isset($_POST['email'])) {
        $template = str_replace(
            array("<!-- #{FromState} -->", "<!-- #{FromEmail} -->"),
            array("Email:", $_POST['email']),
            $template);
    }else{
        die('MF003');
    }

    if (isset($_POST['message'])) {
        $template = str_replace(
            array("<!-- #{MessageState} -->", "<!-- #{MessageDescription} -->"),
            array("Message:", $_POST['message']),
            $template);
    }

    preg_match("/(<!-- #{BeginInfo} -->)(.|\n)+(<!-- #{EndInfo} -->)/", $template, $tmp, PREG_OFFSET_CAPTURE);
    foreach ($_POST as $key => $value) {
        if ($key != "email" && $key != "message" && $key != "form-type" && !empty($value)){
            $info = str_replace(
                array("<!-- #{BeginInfo} -->", "<!-- #{InfoState} -->", "<!-- #{InfoDescription} -->"),
                array("", ucfirst($key) . ':', $value),
                $tmp[0][0]);

            $template = str_replace("<!-- #{EndInfo} -->", $info, $template);
        }
    }

    $template = str_replace(
        array("<!-- #{Subject} -->", "<!-- #{SiteName} -->"),
        array($subject, $_SERVER['SERVER_NAME']),
        $template);

    $mail = new PHPMailer();
    $mail->From = $_POST['email'];

    if (isset($_POST['name'])){
        $mail->FromName = $_POST['name'];
    }elseif (isset($_POST['first-name']) && isset($_POST['last-name'])){
        $mail->FromName = $_POST['first-name'] . ' ' . $_POST['last-name'];
    }else{
        $mail->FromName = "Site Visitor";
    }

    foreach ($addresses[0] as $key => $value) {
        $mail->addAddress($value[0]);
    }

    $mail->CharSet = 'utf-8';
    $mail->Subject = $subject;
    $mail->MsgHTML($template);
    $mail->send();
    
    // send email to client
    $template = file_get_contents('rd-mailform-client.tpl');
    
    $message = '
    <p>Hello '. $_POST['first-name'] .' '. $_POST['last-name'] .',</p>
    <p>Thank you for submitting the RSVP Caribbean '. $subject .' Form. A member from the RSVP Team will contact you within 48-72 hours.</p>
    <p>Regards</p>
    ';
    $template = str_replace(array("<!-- #{MessageState} -->", "<!-- #{MessageDescription} -->"), array('', $message), $template);
    $template = str_replace(array("<!-- #{Subject} -->", "<!-- #{SiteName} -->"), array($subject, $_SERVER['SERVER_NAME']), $template);

    $mail = new PHPMailer();
    $mail->From = 'noreply@rsvpcaribbean.com';
    $mail->FromName = $_SERVER['SERVER_NAME'];

    if(isset($_POST['email']))
      $mail->addAddress($_POST['email']);
    
    $mail->CharSet = 'utf-8';
    $mail->Subject = $subject;
    $mail->MsgHTML($template);
    $mail->send();

    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
} catch (Exception $e) {
    die('MF255');
}