<?php
require_once "config.php";
require_once "PHPMailerAutoload.php";

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);
$categories = [];

if(isset($_POST['check']) && is_array($_POST['check'])) {
	foreach($_POST['check'] as $c) {
		$categories[] = htmlentities($c);
	}
}

$body = "
Name: $name
<br>
Email: $email
<br>
Phone: $phone
<br>
Message: $message
";

if(count($categories) > 0) {
	$body .= "<br>
Category: ".implode(',',$categories)." 
";
}

        $mail = new PHPMailer(true); 
        $mail->IsSMTP();
	    $mail->Host = 'relay-hosting.secureserver.net';
	    $mail->Port = 25;
	    $mail->SMTPAuth = false;
	    $mail->SMTPSecure = false;
      //  $mail->AddAddress('a', '');  
        $mail->AddAddress('info@bootupworld.com', '');
		
		$mail->SetFrom($__smtp['from'], $__smtp['mail_title']);
        $mail->Subject = htmlspecialchars($__smtp['mail_title']);  
        $mail->MsgHTML($body); 
        $mail->Send();

echo '1';


?>

