<?php

$page = [
	'id'       => 'q7',
	'title'    => 'Question 7',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>According to the <a href="https://acf-quizbowl.com/gameplay-rules/">ACF standard rules</a>, which of these situations are protestable?</p>

<?php
make_quiz([
'a' => 'A player argues that the moderator misheard their answer and mistakenly ruled them incorrect.',
'b' => 'A player argues that the opposing team gave an answer that was accepted but should have been prompted for more information.',
'C' => 'A player argues that they gave a correct but not sufficiently specific answer, and should have been prompted, but was ruled incorrect instead.',
'D' => 'A player argues that the opposing team was ruled correct for an answer that should have been ruled incorrect, either to an error by either the packet or moderator.',
'e' => 'A player claims that they were given only 6 seconds to answer a tossup rather than the full 8 seconds.',
]);
if (isset($_SESSION[$page['id']]) or defined('AGAIN')) {
?>

<h3>Explanation</h3>

<p><b>C</b> and <b>D</b> are correct. Answers that are ruled incorrect may be protested on the grounds that they should have received a prompt (Section H.5.E), and answers that are accepted may be protested on the grounds that they should have been ruled incorrect (Section H.5.F).</p>
<p><b>A</b> is not correct: “what the moderator heard” is not protestable (Section H.6.A) although if both teams agree that a moderator misheard an answer, the moderator should re-evaluate the actual answer.</p>
<p><b>B</b> is not correct: unlike answers that are ruled incorrect, answers that were accepted cannot be protested on the grounds that they should have been prompted (Section H.6.B.vii).</p>
<p><b>E</b> is not correct: although the moderator should always try to allow the full time to answer, moderator judgment calls of any kind, including timing, are not protestable (Section H.6.B.i).</p>

<?php } require_once 'footer.php'; ?>
