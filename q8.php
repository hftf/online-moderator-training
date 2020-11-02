<?php

$page = [
	'id'       => 'q8',
	'title'    => 'Question 8',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>You are preparing to moderate a game of online quizbowl. What should you do before you begin a match?</p>

<?php
make_quiz([
'A' => 'Do a roll call to ensure that all players on both teams are present and ready to play.',
'B' => 'Ensure that players can hear your voice clearly. ',
'C' => 'If the tournament requires players to have their cameras turned on, ensure that all players are using cameras.',
'D' => 'Arrange your computer windows so that the questions, the game text channel, and (if scorekeeping) the scoresheet are visible.',
'E' => 'Test your computer’s microphone before the tournament.',
]);
if (isset($_SESSION[$page['id']]) or defined('AGAIN')) {
?>

<h3>Explanation</h3>

<p><b>All answers</b> are correct. Before beginning a round, you should ensure that all players are ready to play, can hear you (and each other), and have video on if required. You should also make sure that your computer screen setup enables you to carry out all your moderating tasks easily.</p>
<p>Regarding answer <b>E</b>, you should also make sure that your microphone is adequate <mark>well before the tournament</mark> so that you have time to troubleshoot if necessary. If possible, you should purchase and use an external microphone so that you are not relying on your computer’s built-in microphone.</p>

<?php } require_once 'footer.php'; ?>
