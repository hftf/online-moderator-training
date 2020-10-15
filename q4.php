<?php

$page = [
	'id'       => 'q4',
	'title'    => 'Question 4',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>You are reading a tossup. Player A on Team 1 buzzes first, and Player B on Team 2 buzzes right after. Player A gets the tossup incorrect. According to the online-specific <a href="https://acf-quizbowl.com/gameplay-rules/#appendix-1-online-play">ACF</a> and <a href="http://www.pace-nsc.org/online-tournament-guide/players/online-tournament-rules/">PACE</a> rules, what is the correct thing to do next?</p>

<?php
make_quiz([
'a' => 'Recognize Player B, who can either answer or withdraw.',
'b' => 'Ask Player B if they would like to withdraw their buzz.',
'C' => 'Continue reading the tossup and watch for any further buzzes from Team 2.',
'd' => 'Ask all players on Team 2 if they would like to buzz.',
]);
if (isset($_SESSION[$page['id']]) or defined('AGAIN')) {
?>

<h3>Explanation</h3>

<p>Only answer <b>C</b> is correct.</p>

<p>Answers <b>A</b> and <b>B</b> are incorrect because after the first player’s buzz is recognized, all other buzzes become invalid. No other buzzes made before the moderator judges the first player’s answer should be recognized. Player B must rebuzz for their buzz to count, and therefore there is no need to withdraw.</p>
<p>Answer <b>D</b> is also incorrect. While it is true that only players from Team 2 can buzz for the rest of this tossup, moderators should not prompt for buzzes or answers on tossups.</p>

<?php } require_once 'footer.php'; ?>
