<?php

$page = [
	'id'       => 'testing',
	'short'    => 'Test your setup',
	'title'    => 'Testing your setup',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<h3>Computer</h3>
<ul>
	<li><p>Ensure you can have the game room, packet, and scoresheet (if applicable) open and accessible.</p>
		<ul>
			<li>These do not have to be on the same screen, but should all be quickly accessible (such as with a secondary workspace or a keyboard shortcut like Alt-Tab).</li>
		</ul>
	</li>
	<li><p>If your tournament is on Discord, make sure you can join the Discord server and that your permissions are set up (e.g. you are able to access all your game rooms and the secure <code>#moderators</code> channel).</p></li>
</ul>

<h3>Audio</h3>
<ul>
	<li><p>Log into Discord/Zoom and use the app to test your microphone and speakers.</p>
		<ul>
			<li>Discord: <b>User Settings → Voice and Video → Let’s Check</b></li>
			<li>Zoom: arrow by Mute button in a call → <b>Test Speaker and Microphone</b></li>
		</ul>
	</li>
	<li><p>If possible, have someone else join a call with you and read them a few questions.</p>
		<ul>
			<li>Make sure you are clearly understood all the way through your sentences. If you are cutting out on Discord, consider switching to Push-to-Talk in <b>Voice and Video</b>.</li>
			<li>Ensure you can quickly you can switch between reading the packet and checking Discord/Zoom for buzzes.</li>
		</ul>
	</li>
</ul>

<p>You can pause here to test your setup now.</p>

<?php
$buttons = [
['continue', 'I tested my setup and everything works!'],
['continue', 'Something doesn’t work / I will test my setup later.'],
];
?>

<?php require_once 'footer.php'; ?>
