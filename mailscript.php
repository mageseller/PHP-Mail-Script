<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
	ini_set('display_errors', 1);
	include "classes/class.phpmailer.php";

	
	//Receiver Info
	$email = "satish29g@hotmail.com";
	$name = "Satish";
	
	//Sender Info
	$sender_name = "";
	$sender_email = "";
	$sender_password = "";
	
	$mail_subject = "Training Course Offers";
	$message = "Hello, How are U..... :)";
	
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->Host = "smtp.zoho.com";
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 1;
	$mail->SMTPSecure = "ssl";
	$mail->Username = $sender_email;
	$mail->Password = $sender_password;
	$mail->AddReplyTo($sender_email, $sender_name);
	$mail->SetFrom($sender_email,$sender_name);
	$mail->Subject = $mail_subject;
	$mail->AddAddress($email, $name);
	$mail->MsgHTML($message);
	$send = $mail->Send();
	
	//$mail->AddAttachment("images/phpmailer.gif");      // attachment
	//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
	if($send) {
		$replay = 'Mail Sent';
	} else {
		$replay = $mail->ErrorInfo;
	}
	print_r($replay);
	
?>