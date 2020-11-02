<?php

$page = [
	'id'       => 'register',
	'title'    => 'Register for training',
];

require_once 'header.php';
ini_set('pcre.jit', '0');

$showform = false;
if (registered()) {
	echo '<p><strong>You already registered!</strong></p>';
}
else if (isset($_POST['register-submit'])) {
	$name = escapeinput($_POST['name']);
	$email = escapeinput($_POST['email']);

	if (empty($name)) {
		echo '<p><strong>Invalid name. Try again.</strong></p>';
		$showform = true;
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo '<p><strong>Invalid email. Try again.</strong></p>';
		$showform = true;
	}
	else {
		$_SESSION['registered'] = ['name' => $name, 'email' => $email];
		$_SESSION['register'] = ['value' => $_POST['register-submit'], 'time' => mytime()];
		echo '<p><strong>Registered!</strong></p>';
	}
}
else {
	$showform = true;
}


if ($showform or defined('AGAIN')) {
?>
<h2><?php echo $page['title']; ?></h2>

<p>If you are staffing 2020 ACF Fall or 2020 ACF Winter and you already filled out the <a href="https://docs.google.com/forms/d/e/1FAIpQLScFPrVwO5ffvyj0cvcgkBsFBD40GExOwbPp3uiE2Nf-GO9mAA/viewform">staffer registration</a> form, please enter the same name and email address that you entered in that form.</p>
<p>Your name and email will only be used for the purposes of confirming your staff registration and training completion, and contacting you about feedback you send us.</p>

<p><label class="reg">Full name</label> <input type="text" name="name" /></p>
<p><label class="reg">Email address</label> <input type="text" name="email" /></p>

<?php

$buttons = [
['register-submit', 'Register'],
['continue', 'I prefer not to register'],
];
}

require_once 'footer.php';

?>
