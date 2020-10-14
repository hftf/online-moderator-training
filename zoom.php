<?php

$page = [
	'id'       => 'zoom',
	'title'    => 'Using Zoom',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>Zoom does not give participants large amounts of control over audio settings. Thankfully, its default settings are usually sufficient for quizbowl tournaments.</p>

<ul>
	<li><p>Regardless, make sure to test your external microphone using the tool provided in <b>Settings → Audio</b>. If you cannot hear yourself, make sure you have selected your external microphone and not your computer’s built-in microphone.</p></li>
	<li><p>As soon as you enter your room on the morning of the tournament, make sure the following settings are enabled under <b>Security</b>: <b>Enable Waiting Room, Chat, Rename Themselves, Unmute Themselves</b>. The other settings should be disabled.</p>
		<ul>
			<li><p>If <b>Chat</b> does not appear under security settings, recheck 1) with your tournament director (if using breakout rooms) or 2) on Zoom’s website under <b>Settings → In Meeting (Basic)</b> (if using your personal room).</p></li>
		</ul>
	</li>
	<li><p>Zoom tournaments may use either <a href="http://www.pace-nsc.org/moderating-and-scorekeeping-a-match-on-zoom-buzzin-live-method/">BuzzIn.Live</a> or <a href="http://www.pace-nsc.org/moderating-and-scorekeeping-a-match-on-zoom-built-in-chat-method/">the built-in chat</a> as methods for buzzing.</p></li>
</ul>

<?php require_once 'footer.php'; ?>
