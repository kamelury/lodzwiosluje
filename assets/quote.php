<?php

if(!$_POST) exit;

// Email verification, do not edit.
function isEmail($email_quote ) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email_quote ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name_quote     = $_POST['name_quote'];
$email_quote    = $_POST['email_quote'];
$phone_quote   = $_POST['phone_quote'];
$date_quote = $_POST['date_quote'];
$days_quote = $_POST['days_quote'];
$boat_quote = $_POST['boat_quote'];
$skipper_quote = $_POST['skipper_quote'];
$passengers_quote = $_POST['passengers_quote'];
$verify_quote   = $_POST['verify_quote'];

if(trim($name_quote) == '') {
	echo '<div class="error_message">Enter your Name.</div>';
	exit();
} else if(trim($email_quote) == '') {
	echo '<div class="error_message">Enter a valid email address.</div>';
	exit();
} else if(!isEmail($email_quote)) {
	echo '<div class="error_message">Invalid e-mail address, try again.</div>';
	exit();
	} else if(trim($phone_quote) == '') {
	echo '<div class="error_message">Enter a valid phone number.</div>';
	exit();
} else if(!is_numeric($phone_quote)) {
	echo '<div class="error_message">Phone number can only contain numbers.</div>';
	exit();
} else if(trim($date_quote) == '') {
	echo '<div class="error_message">Enter a preferred start date.</div>';
	exit();
} else if(trim($days_quote) == '') {
	echo '<div class="error_message">Enter how many days.</div>';
	exit();
} else if(trim($boat_quote) == '') {
	echo '<div class="error_message">Enter a preferred boat.</div>';
	exit();
} else if(trim($skipper_quote) == '') {
	echo '<div class="error_message">Define skipper option.</div>';
	exit();
} else if(trim($passengers_quote ) == '') {
	echo '<div class="error_message">Enter number of passengers.</div>';
	exit();
} else if(!isset($verify_quote) || trim($verify_quote) == '') {
	echo '<div class="error_message">Enter the verification number.</div>';
	exit();
} else if(trim($verify_quote) != '4') {
	echo '<div class="error_message">The verification number is incorrect.</div>';
	exit();
}

//$address = "HERE your email address";
$address = "test@ansonika.com";


// Below the subject of the email
$e_subject = 'You\'ve been contacted by ' . $name_quote . '.';

// You can change this if you feel that you need to.
$e_body = "You have been contacted by $name_quote with a quote request for:" . PHP_EOL . PHP_EOL;
$e_content = "Passengers: $passengers_quote\nPreferred start date: $date_quote\nHow many days: $days_quote\nPreferred boat: $boat_quote\nPrivate skipper: $skipper_quote\n" . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $name_quote via email, $email_quote or via phone $phone_quote";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email_quote" . PHP_EOL;
$headers .= "Reply-To: $email_quote" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$user = "$email_quote";
$usersubject = "Thank You";
$userheaders = "From: info@volare.com\n";
$usermessage = "Thank you for contact VOLARE. We will reply shortly!";
mail($user,$usersubject,$usermessage,$userheaders);

if(mail($address, $e_subject, $msg, $headers)) {

	// Success message
	echo "<div id='success_page' style='padding-bottom:10px'>";
	echo "<strong >Email Sent.</strong>";
	echo "Thank you <strong>$name_quote</strong>,<br> your message has been submitted. We will contact you shortly.";
	echo "</div>";

} else {

	echo 'ERROR!';

}
