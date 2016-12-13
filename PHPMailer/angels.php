<?php
require_once "config.php";
require_once "PHPMailerAutoload.php";

$name = trim($_POST['name']);
$location = trim($_POST['location']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$linkedin = trim($_POST['linkedin']);
$angel = trim($_POST['angel']);
$personal = trim($_POST['personal']);
$angel_during = trim($_POST['angel-during']);
$membership = trim($_POST['membership']);
$sector = trim($_POST['sector']);
$message = trim($_POST['message']);

$body = "
Name: $name
<br>
Location: $location
<br>
Email: $email
<br>
Phone: $phone
<br>
Linkedin: $linkedin
<br>
Angel: $angel
<br>
Personal: $personal
<br>
Angel During: $angel_during
<br>
Membership: $membership
<br>
Sector: $sector
<br>
Message: $message
";
if(isset($_POST['btnsend'])) {
    try {
        $mail = new PHPMailer(true); 

        $mail->IsSMTP(); 
        $mail->Host = 'host';  
        $mail->SMTPDebug = $__smtp['debug'];  
        $mail->SMTPAuth = $__smtp['auth'];  
        $mail->Port = $__smtp['port'];  
        $mail->SMTPSecure = $__smtp['secure']; 
        $mail->CharSet = "UTF-8";  
        $mail->Username = $__smtp['username'];  
        $mail->Password = $__smtp['password'];  
        $mail->AddAddress('info@bootupworld.com', ''); 
        $mail->AddReplyTo($__smtp['addreply'], '');  
        $mail->SetFrom($__smtp['username'], $__smtp['mail_title']);  
        $mail->Subject = htmlspecialchars($__smtp['mail_title']); 
        $mail->MsgHTML($body); 
        $mail->Send();
        if ($mail == true) {
            echo '<script language="JavaScript">window.location.href="/#thankyou";</script>';
        }
        return 1;

    } catch (phpmailerException $e) {
        return 2;
    }
}

