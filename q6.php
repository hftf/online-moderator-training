<?php

$page = [
	'id'       => 'q6',
	'title'    => 'Question 6',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>You are reading a team a bonus question. According to the <a href="https://acf-quizbowl.com/gameplay-rules/">ACF</a> and <a href="http://www.pace-nsc.org/wordpress/wp-content/uploads/2019/10/191027_PACE_ruleset.pdf">PACE</a> rules, which of the following statements are correct?</p>

<?php
make_quiz([
'a' => 'You should not prompt teams to give you an answer. If they do not give an answer to a bonus part within 5 seconds, call “Time” and award 0 points for that bonus part.',
'b' => 'The first answer that a player clearly and obviously directs to you – even if they did not say “Our answer is…” (or a similar directing phrase allowed by the TD) – is their team’s official answer. Your judgment on whether a player directed an answer to you is not protestable.',
'c' => 'Only the team’s captain must direct the official answer to you. A team may get 2 additional seconds to answer if the team’s captain says “Defer” or “Designate” to indicate that a specific teammate should answer.',
'D' => 'If you accidentally reveal one or more bonus answers to a team, you only need to read a replacement bonus if the result of the bonus would change the outcome of a match. If a team answered a bonus part incorrectly before you revealed a different answer, they will not receive 30 points on the replacement bonus even if they answer all 3 parts correctly.',
]);
if (isset($_SESSION[$page['id']]) or defined('AGAIN')) {
?>

<h3>Explanation</h3>
<p><b>D</b> is correct: see Sections E.9 and E.10 of the ACF rules. Moderator errors of this type are only resolved if they can alter the outcome of the game, and cannot result in the affected team getting points for bonus parts that they had already answered incorrectly.</p>
<p><b>A</b> is not correct: the moderator should prompt for an answer after 6 seconds (Section E.5).</p>
<p><b>B</b> is not correct: only answers that are preceded by “Our answer is” or followed by the word “directed” will be considered an official answer in an online game (Section E.4.A) until the 6-second mark (Section E.4.B).</p>
<p><b>C</b> is not correct: any player may direct a bonus answer (Section E.4.D) and teams do not receive additional time by deferring to a specific teammate (Section E.4.E).</p>

<?php } require_once 'footer.php'; ?>
