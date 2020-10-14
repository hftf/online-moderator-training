<?php

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<?php

$showform = false;
if (isset($_POST['feedback-submit'])) {
	$feedback = escapeinput($_POST['feedback']);
	$submission = [
		'time'    => mytime(),
		'name'    => $_SESSION['registered']['name'] ?: '-',
		'email'   => $_SESSION['registered']['email'] ?: '-',
		'section' => $_POST['section'],
		'feedback'=> $feedback,
	];
	$fh = fopen('_feedbacks.csv', 'a');
	fputcsv($fh, $submission);
	fclose($fh);
	echo '<p><strong>Feedback submitted! Thank you!</strong></p>';
}

$buttons = [['return', 'Return']];
$feedback = false;

require_once 'footer.php'; ?>
