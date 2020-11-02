<?php

$page = [
	'id'       => 'gameplay',
	'title'    => 'Gameplay',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<ul>
	<li><p>Post a <mark>delimiter</mark> in the game text chat before each tossup (e.g. “<samp>TU 1</samp>”), or delegate this task to the scorekeeper or a player. This lets everyone know which tossup a buzz was for.</p></li>
	<li><p>On tossups, players will buzz in by <mark>typing “<samp>buzz</samp>”</mark> in the game room text chat. When you see a new buzz, stop reading and recognize the player who buzzed first on your screen (i.e. call out the player’s name).</p>
		<ul>
			<li><p>Players may see a different order of buzzes, but the order of buzzes on your screen is the official record and is not protestable.</p></li>
		</ul>
	</li>
	<li><p>In <mark>buzzer races</mark> (i.e. multiple buzzes at once), disregard all other buzzes until you finish judging the first buzzer’s answer and you “reset/clear the buzzer system,” so to speak.</p>
		<ul>
			<li><p>You can also post a delimiter like “<samp>—</samp>” to indicate the reset/clear.</p></li>
			<li><p>If a player on the other team really wants to buzz again immediately, they can re-buzz.</p></li>
		</ul>
	</li>
	<li><p>After one player answers a tossup incorrectly, players on the other team may, if they like, type non-substantive text in the chat, such as “<samp>raising my buzzer</samp>” to indicate to their teammates that they intend to buzz.</p></li>
	<li><p>During a tossup, players may not <mark>confer</mark>, or convey any potentially substantive information pertinent to the answer. <a href="https://acf-quizbowl.com/gameplay-rules/">Section D.11 of ACF’s gameplay rules</a> covers illegal conferring.</p></li>
	<li><p>Players must not use external devices during gameplay. If they must, you can tell them to sub themselves out, wait for halftime or the end of the match, or call a timeout.</p></li>
</ul>

<?php require_once 'footer.php'; ?>
