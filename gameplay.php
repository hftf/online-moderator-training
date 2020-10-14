<?php

$page = [
	'id'       => 'gameplay',
	'title'    => 'Gameplay',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<ul>
	<li><p>Post a <mark>delimiter</mark> in the game text chat before each tossup (e.g. <samp>TU 1</samp>), or delegate this task to the scorekeeper or a player.</p></li>
	<li><p>On tossups, players will buzz in by <mark>typing <samp>buzz</samp></mark> in the game room text chat. When you see a new buzz, stop reading and recognize the player who buzzed first on your screen (i.e. call out the player’s name).</p>
		<ul>
			<li><p>Players may see a different order of buzzes, but the order of buzzes on your screen is the official record and is not protestable.</p></li>
		</ul>
	</li>
	<li><p>In <mark>buzzer races</mark> (i.e. multiple buzzes at once), disregard all other buzzes until you finish judging the first buzzer’s answer and “reset/clear the buzzer system,” so to speak. You can post a delimiter like <samp>—</samp> to indicate the reset.</p>
		<ul>
			<li><p>If a player on the other team really wants to buzz again immediately, they can re-buzz.</p></li>
		</ul>
	</li>
	<li><p>After one player answers a tossup incorrectly, players on the other team may type non-substantive text in the chat (e.g. <samp>raise</samp>) to indicate to their teammates that they intend to buzz.</p></li>
	<li><p>Players may not use external devices during gameplay. If they must, you can tell them to sub themselves out, wait for halftime/the end of the match, or call a timeout.</p></li>
</ul>

<?php require_once 'footer.php'; ?>
