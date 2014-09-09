<?php

if(!$_POST) exit;

// Email verification, do not edit.
function isEmail($email_booking) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email_booking ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name_booking     = $_POST['name_booking'];
$lastname_booking    = $_POST['lastname_booking'];
$email_booking    = $_POST['email_booking'];
$phone_booking   = $_POST['phone_booking'];
$country_booking = $_POST['country_booking'];
$gender_booking = $_POST['gender_booking'];
$level_booking = $_POST['level_booking'];
$age_booking   = $_POST['age_booking'];
$course_booking   = $_POST['course_booking'];
$date_booking   = $_POST['date_booking'];
$message_booking   = $_POST['message_booking'];
$verify_booking   = $_POST['verify_booking'];

if(trim($name_booking) == '') {
	echo '<div class="error_message">Enter your Name.</div>';
	exit();
} else if(trim($lastname_booking) == '') {
	echo '<div class="error_message">Enter your Last Name.</div>';
	exit();
} else if(trim($email_booking) == '') {
	echo '<div class="error_message">Enter a valid email address.</div>';
	exit();
} else if(!isEmail($email_booking)) {
	echo '<div class="error_message">Invalid e-mail address, try again.</div>';
	exit();
	} else if(trim($phone_booking) == '') {
	echo '<div class="error_message">Enter a valid phone number.</div>';
	exit();
} else if(!is_numeric($phone_booking)) {
	echo '<div class="error_message">Phone number can only contain numbers.</div>';
	exit();
} else if(trim($country_booking) == '') {
	echo '<div class="error_message">Enter your Country.</div>';
	exit();
} else if(trim($gender_booking) == '') {
	echo '<div class="error_message">Enter your Gender.</div>';
	exit();
} else if(trim($level_booking ) == '') {
	echo '<div class="error_message">Enter your sailing level.</div>';
	exit();
} else if(trim($age_booking ) == '') {
	echo '<div class="error_message">Enter your age.</div>';
	exit();
} else if(trim($course_booking ) == '') {
	echo '<div class="error_message">Enter your course.</div>';
	exit();
} else if(trim($date_booking ) == '') {
	echo '<div class="error_message">Enter a prefererred start date.</div>';
	exit();
} else if(trim($message_booking ) == '') {
	echo '<div class="error_message">Enter your message.</div>';
	exit();
} else if(!isset($verify_booking) || trim($verify_booking) == '') {
	echo '<div class="error_message">Enter the verification number.</div>';
	exit();
} else if(trim($verify_booking) != '4') {
	echo '<div class="error_message">The verification number is incorrect.</div>';
	exit();
}

//$address = "HERE your email address";
$address = "test@ansonika.com";


// Below the subject of the email
$e_subject = 'You\'ve been contacted by ' . $name_booking . '.';

// You can change this if you feel that you need to.
$e_body = "You have been contacted by\n$name_booking\n$lastname_booking\n$country_booking\n$gender_booking\n$level_booking\n$age_booking\nwith a book request for:" . PHP_EOL . PHP_EOL;
$e_content = "Course type: $course_booking\nPreferred start date: $date_booking\nWith additional message:$message_booking " . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $lastname_booking via email, $email_booking or via phone $phone_booking.";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email_booking" . PHP_EOL;
$headers .= "Reply-To: $email_booking" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$user = "$email_booking";
$usersubject = "Thank You";
$userheaders = "From: info@volare.com\n";
$usermessage = "Thank you for contact VOLARE. We will reply shortly!";
mail($user,$usersubject,$usermessage,$userheaders);

if(mail($address, $e_subject, $msg, $headers)) {

	// Success message
	echo "<div id='success_page'>";
	echo "<strong >Email Sent.</strong>";
	echo "Thank you <strong>$name_booking $lastname_booking</strong>,<br> your message has been submitted. We will contact you shortly.";
	echo "</div>";

} else {

	echo 'ERROR!';

}
