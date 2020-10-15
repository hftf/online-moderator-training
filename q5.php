<?php

$page = [
	'id'       => 'q5',
	'title'    => 'Question 5',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>A player buzzes in during a tossup question. According to the <a href="https://acf-quizbowl.com/gameplay-rules/">ACF</a> and <a href="http://www.pace-nsc.org/wordpress/wp-content/uploads/2019/10/191027_PACE_ruleset.pdf">PACE</a> rules, which of the following statements are correct?</p>
<?php
make_quiz([
'A' => 'The player who buzzed in has 8 seconds to answer before the moderator calls time.',
'b' => 'Other team members are allowed to talk with the player who buzzed in before that player gives their answer.',
'C' => 'The moderator immediately stops reading the tossup and recognizes the player who buzzed.',
'd' => 'If that player gives an incorrect answer, other people on that player’s team may buzz in once the moderator continues reading.',
'E' => 'Players on the other team are allowed to gesture over video (or type non-substantive text, such as “raising my buzzer”) to signal to teammates that they intend to buzz in later.',
]);
if (isset($_SESSION[$page['id']]) or defined('AGAIN')) {
?>

<h3>Explanation</h3>

<p><b>A</b>, <b>C</b>, and <b>E</b> are correct. According to the ACF and PACE rules for online (though not in-person) quizbowl, players have 8 seconds to answer tossups. When one or more players buzz, the moderator should immediately stop reading and recognize the first player who buzzed. Players may communicate non-substantively over video or text to indicate their intention to buzz.</p>
<p><b>B</b> is not correct: the player who buzzes in must answer a tossup without help from their teammates. Conferring is only allowed on bonuses.</p>
<p><b>D</b> is not correct: once one player on a team has answered a tossup incorrectly, no other player from that team may buzz on that question.</p>

<?php } require_once 'footer.php'; ?>
