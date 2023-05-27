<?php
class Mailer
{
	 
	public function sendMail($receipientMail,$subject,$message,$from,$cc ="")
	{
		date_default_timezone_set('Africa/Nairobi');
 
		$message = wordwrap($message, 70);
		
		 
		$headers = "From: " . $from. "\r\n";
		$headers .= "Reply-To: ".$from . "\r\n";
		$headers .= "CC: ".$cc."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion();
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$result = mail($receipientMail,$subject,$message,$headers);
		if(!$result)
		{
			return false;

		}
		else{
			 return true;
		}
	}
	 
}
?>