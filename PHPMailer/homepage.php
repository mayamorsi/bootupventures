<?php
require_once "config.php";
require_once "PHPMailerAutoload.php";

$email = trim($_POST['email']);
$body = "Email: $email";

	$mail = new PHPMailer(true);
	$mail->IsSMTP();
	$mail->Host = 'relay-hosting.secureserver.net';
	$mail->Port = 25;
	$mail->SMTPAuth = false;
	$mail->SMTPSecure = false;
	$mail->AddAddress('info@bootupworld.com', '');
//	$mail->AddAddress('rkulitskiy@gmail.com', '');
	$mail->SetFrom($__smtp['from'], $__smtp['mail_title']);
	$mail->Subject = htmlspecialchars('Newsletter');
	$mail->MsgHTML($body);
	$mail->Send();

?>

