<?php

$page = [
	'id'       => 'q1',
	'title'    => 'Question 1',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>Under what circumstances are you required to report a player to the TD?</p>

<?php
make_quiz([
'a' => 'A player on the team that won the match wishes to protest that their incorrect answer to a question should have been acceptable.',
'B' => 'You repeatedly see or hear a player typing extensively, and then buzzing, while you are reading tossups.',
'c' => 'While you are reading a bonus to one team, a player from the opposing team complains in the chat about having lost the buzzer race on the preceding tossup.',
'd' => 'When you start the round, one team is missing a player who is listed on their roster, but that player shows up after 3 questions.',
]);
if (isset($_SESSION[$page['id']]) or defined('AGAIN')) {
?>

<h3>Explanation</h3>

<p><b>B</b> is correct. The behavior in <b>B</b> is <a href="misconduct.php">consistent with cheating</a> and should be <a href="how-to-report.php">reported to the TD</a>.</p>
<p>The <a href="protests.php">protest</a> in <b>A</b> is moot since it would benefit the game-winning team, so it doesn’t need to be reported.</p>
<p>The <a href="misconduct.php">behavior</a> in <b>C</b> is disruptive and should be stopped, but you have the option of handling it yourself or reporting it to the TD (or both).</p>
<p>The <a href="when-to-start.php">situation</a> in <b>D</b> should be noted in the scoresheet, but you don’t need to specifically alert the TD.</p>

<?php } require_once 'footer.php'; ?>
