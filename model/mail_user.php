<?php

function mail_usr(){

	$message = "Thanks for your order! Attached is a copy of your receipt";
	$message = wordwrap($message);

	$recipient = 'zshmagra@gmail.com';

	mail($recipient, "Test", $message);
}

?>
