<?php

$page = [
	'id'       => 'conclusion',
	'title'    => 'Conclusion',
];

require_once 'header.php';

$showform = false;
if (isset($_SESSION['conclusion'])) {
	echo '<p><strong>You already submitted! Thank you!</strong></p>';
}
else if (isset($_POST['conclusion-submit']) and !defined('AGAIN')) {
	$submission = [
		'time'    => mytime(),
		'name'    => $_SESSION['registered']['name'] ?: '-',
		'email'   => $_SESSION['registered']['email'] ?: '-',
		'q1'      => implode($_SESSION['q1']['value'] ?: ['-']),
		'q2'      => implode($_SESSION['q2']['value'] ?: ['-']),
		'q3'      => implode($_SESSION['q3']['value'] ?: ['-']),
		'q4'      => implode($_SESSION['q4']['value'] ?: ['-']),
		'q5'      => implode($_SESSION['q5']['value'] ?: ['-']),
		'q6'      => implode($_SESSION['q6']['value'] ?: ['-']),
		'q7'      => implode($_SESSION['q7']['value'] ?: ['-']),
		'q8'      => implode($_SESSION['q8']['value'] ?: ['-']),
		'q1t'     => $_SESSION['q1']['time']  ?: '-',
		'q2t'     => $_SESSION['q2']['time']  ?: '-',
		'q3t'     => $_SESSION['q3']['time']  ?: '-',
		'q4t'     => $_SESSION['q4']['time']  ?: '-',
		'q5t'     => $_SESSION['q5']['time']  ?: '-',
		'q6t'     => $_SESSION['q6']['time']  ?: '-',
		'q7t'     => $_SESSION['q7']['time']  ?: '-',
		'q8t'     => $_SESSION['q8']['time']  ?: '-',
		'testing' => $_SESSION['testing']['value']  ?: '-',
	];
	$fh = fopen('_submissions.csv', 'a');
	fputcsv($fh, $submission);
	fclose($fh);
	$_SESSION['conclusion'] = ['time' => mytime()];
	echo '<p><strong>Completion submitted! Thank you!</strong></p>';
}
else {
	$showform = true;
}

if (true or $showform or defined('AGAIN')) {
?>

<h2><?php echo $page['title']; ?></h2>

<p>Thank you for completing this training! We hope it better prepared you to moderate future tournaments.</p>

<p>For further reading, you can find additional resources here:</p>
<ul>
	<li><a href="https://hsquizbowl.org/forums/viewtopic.php?f=30&amp;t=21132">Thread about moderator resources on the hsquizbowl.org forums</a></li>
	<li><a href="http://www.pace-nsc.org/online-tournament-guide/">PACE’s guide to online tournaments</a></li>
	<li><a href="https://www.naqt.com/online/">NAQT’s guide to online tournaments</a></li>
	<li><a href="https://www.notion.so/Online-tournaments-1c15784884a7401ba9268ff7fe0a2644#635621e0c7d54d2db5a38f9be5f088a5">Ophir’s guide to online tournaments</a></li>
</ul>

<p>We’d like to continue this training in the future, so we welcome any feedback or suggestions. If you have further questions, or you’d like to provide feedback, please use the form below or contact:</p>
<ul>
	<li>ACF: Jonathan Magin, <a href="mailto:jonathan.magin@gmail.com">jonathan.magin@gmail.com</a></li>
	<li>PACE: Victor Prieto, <a href="mailto:vprieto@pace-nsc.org">vprieto@pace-nsc.org</a></li>
</ul>

<?php
}
if ($showform) {
	echo '<h3>Submit</h3>';
	echo '<p>Click the button below to submit a record of your completion to ACF.</p>';
	if (!registered()) {
		echo '<p><strong>We recommend that you <a href="register.php">register first</a> before submitting.</strong></p>';
	}
	$buttons = [['conclusion-submit', 'Submit a record of your completion!']];
} else {
	$buttons = [];
}


require_once 'footer.php'; ?>
