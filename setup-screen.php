<?php

$page = [
	'id'       => 'setup-screen',
	'short'    => 'Set up your screen',
	'title'    => 'Setting up your screen',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>Setting up your screen(s) properly is critical, as moderating an online tournament requires you to keep track of many windows or tabs:</p>
<ul>
	<li>questions</li>
	<li>game text chat (and game voice chat)</li>
	<li>moderator chat, lobby chat, and possibly others</li>
	<li>scoresheet (if scorekeeping)</li>
</ul>

<p>Arrange your windows so that you can at least see the <mark>questions</mark> and monitor the <mark>game text chat</mark> at the same time.</p>
<ul>
	<li><p>If you are reading questions from Microsoft Word, you can use “Window → Split” to view tossups and bonuses simultaneously.</p></li>
	<li><p>Moderators who are also scorekeeping have an additional layer of complexity to handle:</p>
		<ul>
			<li><p>The scoresheet is typically in a browser window. If you are also reading questions from another browser window, make sure you can switch between the two windows or tabs quickly using a keyboard shortcut.</p></li>
		</ul>
	</li>
</ul>
<p>Consider using an external device (e.g. a phone, tablet, or second monitor) if you have trouble handling many streams of information on one device. In particular, Discord video is highly resource-intensive. Try out your equipment beforehand to see if you can get a better connection by joining via phone and pulling up packets on your computer.</p>

<?php require_once 'footer.php'; ?>
