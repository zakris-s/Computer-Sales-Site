<?php
//Mail functions do not work becuase you need an open smtp connection non of which are free

function mail_new_user(){
	//Gmail doesnt have an open smtp connection but this how it would work
	ini_set("SMTP", "smtp.gmail.com");
	ini_set("smtp_port", 25);
	$message = "Thank you for joining not your tpye!";
	$message = wordwrap($message);

	//Chagne this to the recipients address from the users database
	$recipient = "test@example.com";
	$subject = "Thanks for joining";

	mail($recipient, $subject, $message);
}

function mail_receipt(){
	//Gmail doesnt have an open smtp connection but this how it would work
	ini_set("SMTP", "smtp.gmail.com");
	ini_set("smtp_port", 25);
	$message = "Thank you for your order! Here is a copy of your receipt";
	$message = wordwrap($message);

	//Chagne this to the recipients address from the users database
	$subject = "Order is being processed";
	$recipient = "test@example.com";

	mail($recipient, $subject, $message);
}
?>
