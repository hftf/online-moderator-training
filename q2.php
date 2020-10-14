<?php

$page = [
	'id'       => 'q2',
	'title'    => 'Question 2',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>After getting a tossup wrong, a player lodges a protest and begins to explain why their answer was actually correct. What should you do?</p>

<?php
make_quiz([
'a' => 'Immediately inform the TD of the protest.',
'b' => 'Google the clue that the player is concerned about and decide whether their answer should be accepted.',
'C' => 'Tell the player that the protest will be resolved if it matters at the end of the game, make a note about the protest in the scoresheet, and continue reading.',
'd' => 'Throw out the tossup and read a replacement question instead.',
]);
if (isset($_SESSION[$page['id']]) or defined('AGAIN')) {
?>

<h3>Explanation</h3>

<p><b>C</b> is correct. <a href="protests.php">When a team protests</a>, you should determine how the score would change if the protest were upheld, make a quick note about the protest circumstances in the scoresheet, and move on. Do not delay the game by getting into a debate about whether the protest is correct.</p>
<p><b>A</b> is incorrect because the TD does not need to be informed of protests unless they could alter the game’s outcome.</p>
<p>As a moderator, you are not responsible for adjudicating protests or taking action to resolve them without guidance from the TD, so <b>B</b> and <b>D</b> are both incorrect.</p>

<?php } require_once 'footer.php'; ?>
