<?php

$page = [
	'id'       => 'answers',
	'title'    => 'Answers',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<ul>
	<li><p>For online ACF tournaments, players should speak their answers (on both tossups and bonuses), but may type answers if they are in a situation that prevents them from speaking.</p></li>
	<li><p>For online ACF tournaments, teams are required to answer bonus parts by saying “Our answer is…” before giving their response. Moderators should only evaluate answers for bonus parts that are directed this way, and should not consider any other responses. This rule is designed to ensure you only evaluate answers that teams intend to give.</p>
		<ul>
			<li><p>The TD may also allow other phrases for directing answers.</p></li>
			<li><p>Before each match, you can remind teams about the expectations for directing bonus answers.</p></li>
		</ul>
	</li>
</ul>

<h3>Timing</h3>

<ul>
	<li><p>Follow the tournament’s timing rules.</p>
		<ul>
			<li><p>For online ACF tournaments, allow 8 seconds to answer either a tossup or a bonus part. Don’t keep waiting or prompting for an answer after the allotted time; call “Time” assertively after the 8 seconds. Otherwise, tournaments take forever.</p></li>
			<li><p>For bonus parts, prompt for an answer (by saying “Answer?”) after 6 seconds. After that point, evaluate the first answer given, regardless of whether it is preceded by “Our answer is…” or another directing phrase. (See <a href="https://acf-quizbowl.com/gameplay-rules/">Section E.4.B of ACF’s gameplay rules</a>.)</p></li>
		</ul>
	</li>
	<li><p>You can hold up fingers or tap your desk to indicate counting down time.</p></li>
</ul>

<?php require_once 'footer.php'; ?>
