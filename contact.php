<?php
	if(isset($_POST["message"]) && !empty($_POST["message"])){
		if(isset($_POST["email"]) && !empty($_POST["email"])){
			$email = mysql_escape_mimic($_POST["email"]);
		}
		else {
			$email = "Anonymous";
		}
		$message = $_POST["message"];
		//MOBILE
			if(isset($_POST["where"]) && !empty($_POST["where"])){
				$message = mysql_escape_mimic($_POST["where"]).":	$message";
			}
		//
		$message = mysql_escape_mimic($message);
		$IP = $_SERVER['REMOTE_ADDR'];
		mail("contact@videnri.com, davidfungengi@gmail.com", "Videnri.com - $email - $IP", $message, "", "-f contact@videnri.com -F Videnri.com ");
		//mail("wisterfungfung@gmail.com", "Videnri.com - $email", $message, "", "-f contact@videnri.com -F Videnri.com ");
		echo "Message sent.";
	}
	
	function mysql_escape_mimic($inp) { 
		if(is_array($inp))
			return array_map(__METHOD__, $inp); 

		if(!empty($inp) && is_string($inp)) { 
			return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp); 
		} 

		return $inp; 
	}
?>