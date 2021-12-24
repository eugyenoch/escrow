<?php

	$mailto = 'support@p2pxtrade.com';
	$mailSub  = 'You have a new member';
	$mailMsg  = 'A new member has just registered on the platform. Login to the admin dashboard to see this person';

require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug = 0;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host = "p2pxtrade.com";
$mail ->Port = 465; // or 587
$mail ->IsHTML(true);
$mail ->Username = "admin@p2pxtrade.com";
$mail ->Password = "P2Padminmail01";
$mail ->SetFrom("noreply@p2pxtrade.com");
$mail ->Subject = $mailSub;
$mail ->Body = $mailMsg;
$mail ->AddAddress($mailto);

if($mail->Send()){echo " ";}

/*else
{
	echo "mail not sent";
}*/
?>