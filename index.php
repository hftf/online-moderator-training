<?php

$page = [
	'id'       => 'index',
	'title'    => 'Welcome!',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>Thank you for your interest in moderating online quizbowl! Moderators are a vital part of the quizbowl experience; thank you for taking part in making this game possible.</p>

<?php require_once 'footer.php'; ?>
