<?php

$page = [
	'id'       => 'overview',
	'title'    => 'Training overview',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>The training itself takes about 20 minutes to complete (not including any time needed to <a href="testing.php">test your setup</a>).</p>

<h3>Review quiz</h3>

<p>There are <mark>8 quiz questions</mark> to test your understanding of the training material and also of standard quizbowl rules and procedures.</p>

<p>The quiz is not timed; you can pause and come back to it as necessary. However, we ask that you read closely and try to remain engaged throughout. Taking this training seriously will improve the experience for yourself, the other staffers, and players at your next online tournament. No need to stress over incorrect answers either.</p>

<h3>Interactive training</h3>

<p>The interactive training tracks your progress as you read each section. Click the <b>Continue</b> button below a section to mark it as complete. You can read the sections or do the quiz in any order. You can also leave feedback directly on any section.</p>

<p>If you <a href="register.php">register for the interactive training</a> and click the <b>Submit a record of your completion!</b> button at the conclusion of the training, a record of your completion will be submitted to ACF.</p>

<p>For technical issues with the interactive training, please email <a href="mailto:quizbowl@ophir.li">quizbowl@ophir.li</a>.</p>

<?php require_once 'footer.php'; ?>
