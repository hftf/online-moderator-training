<?php

$page = [
	'id'       => 'discord',
	'title'    => 'Using Discord',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<ul>
	<li><p>Refer to <a href="http://www.pace-nsc.org/online-tournament-guide/staffers/discord-audio-settings/">PACE’s guide to Discord audio settings</a> for information on lowering microphone sensitivity (for voice activity) and disabling some notifications.</p></li>
	<li>
		<p>To view both the text chat and the video feeds simultaneously, click the Pop Out icon (<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQElEQVR42qXKwQkAIAxDUUdxtO6/RBQkQZvSi8I/pL4BoGw/XPkh4XigPmsUgh0626AjRsgxHTkUThsG2T/sIlzdTsp52kSS1wAAAABJRU5ErkJggg==" style="padding: 1px;" />) in the lower right of the video channel window:</p>
		<p><img src="discord-pop-out.jpg" /></p>
	</li>
	<li><p>Refer to <a href="http://www.pace-nsc.org/online-tournament-guide/staffers/troubleshooting-discord-technical-issues/">PACE’s guide to troubleshooting Discord</a> for assistance.</p></li>
	<li><p>If you are waiting for a player who is just sitting in the wrong voice channel, you can (given proper permissions) move them between voice channels yourself. Right click on the player and select “Move To.”</p></li>
</ul>

<?php require_once 'footer.php'; ?>
