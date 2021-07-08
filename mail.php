<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail_check= mail("guptaharsh0039@gmail.com","Portfolio Message",$message,$email);
if($mail_check == true)
{
	
	$final_mail = mail($email,"Thanks","will contact you");
	if($final_mail == true)
	{
		echo "done";
	}
}


?>